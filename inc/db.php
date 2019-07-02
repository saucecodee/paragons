<?php

    $con = mysqli_connect ('localhost', 'root', '', 'paragons' );

    if(!$con){
        die("sorry, didnt connect to database");
    }else{
       //echo "You're conected";
    }

?>