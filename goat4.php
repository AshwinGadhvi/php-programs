<?php
    if(!isset($_COOKIE['name']))
    {
        header("location: goat3.php");
    }
    else{
        echo "hellow ".$_COOKIE['name']." welcome to op";
    }
?>