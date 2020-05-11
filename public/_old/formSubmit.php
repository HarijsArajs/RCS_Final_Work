
<style>
    .pareizais {
        font-size: 50px;
        margin-top:50px;
        color:green;
        text-align:center;
    }

    .nepareizais {
        font-size: 50px;
        margin-top:50px;
        color: red;
        text-align: center;
    }

</style>



<?php


$vards = $_POST["theName"];
$parole = $_POST["thePassword"];
   
   if ($vards === "guntis" && $parole === "1234") {
       echo "<p class=\"pareizais\">Paldies, tu esi ielogojies </p>";
   } else {
    echo " <p class=\"nepareizais\">Login un/vai parole nav pareizi </p>";
   };




   ?>
   
   