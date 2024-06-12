<?php
    if(!isset($_COOKIE['eno1']))
    {
        header("location:ashwin_cookie.php");
    }
    else
    {
        echo "<h1> welcome ".$_COOKIE['eno1'];
    }
?>