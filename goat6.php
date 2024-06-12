<?php
    if(session_status()!=PHP_SESSION_ACTIVE)
    {
        session_start();
    }
    if($_SESSION["name"]=="")
    {
        header("location: goat5.php");
    }
    else{
        echo "hii bhai keso ho aap : $_SESSION[name]";
    }
?>