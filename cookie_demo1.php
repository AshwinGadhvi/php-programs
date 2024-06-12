<?php
if(!isset($_COOKIE['eno1']))
{
    header('Location: cookie_demo.php');
}
else
{
    echo "<h1>Welcome $_COOKIE[eno1]";
}
?>