<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>

    .posts {
        margin-top: 20px;
    }

    .post {
        padding: 10px;
        margin: 10px;
        border: 1px solid gray;
    }
    
    
    
    </style>
</head>
<body>


    <button id="poga">Load More</button>

    <div class="posts">
    <div class="post"> Lorem Ipsum
    </div>


    </div>

<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script>
    function getPosts() {
        $.ajax({
            url: "https://baconipsum.com/api/?type=meat-and-filler",

            success: function (response) {
                for (var i = 0; i < response.length; i++) {

                var postins = $("<div>").addClass("post");
                postins.text(response[0]);
                $(".posts").append(postins);

            }
        }

        });
    }

    $("#poga").click(function() {
        getPosts();
    })

    $(document).ready(function() {

    })
</script>
   
</body>
</html>