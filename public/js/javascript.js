"use strict"


// scroll-up button
$(document).ready(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() > 100){
            $(".scroll_Up").fadeIn();
        } else {
            $(".scroll_Up").fadeOut();

        }
    })
});

$(".scroll_Up").click(function(){
    $("html, body").animate({scrollTop: 0}, 800);
});

    $("#email_input").keyup(function() {
        if(validateEmail()) {
            $("#email_input").css("border", "2px solid green");
            $(".emailMessage").html("<p class='alert_success'>Valid</p>")

        } else { $("#email_input").css("border", "2px solid red");
            $(".emailMessage").html("<p class='alert_failure'>Invalid</p>")

        };
       

    });


        // proper email address validation
    function validateEmail() {
        let email = $("#email_input").val();
        var reg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

        if(reg.test(email)) {
            return true;

        } else {
            return false;
        }


    };


    // form validation
    $(document).on("click", ".contact_poga", function(){

      
		var epasts = $("#email_input").val();
        epasts = epasts.trim();
        
        if (!epasts || validateEmail() == false) {
            alert ("Leave some feedback");
        } else {
            alert ("Thank you!");
            $(".emailMessage").remove();
            $("#email_input").css("border", "2px solid rgb(110, 112, 117)");

        }

    
    });