<?php

if(!isset($_COOKIE['ashwin']))
{
    header('Location : w2022prg4.php');
}
else
{
    echo "welcome bhai $_COOKIE[name]";
}

?>