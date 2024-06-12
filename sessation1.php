<?php
if(session_status()!=PHP_SESSION_ACTIVE)
{
    session_start();
}
if($_SESSION["eno1"]=="")
{
    header('Location: sessation.php');
}
else
{
    echo "<h1>Welcome $_SESSION[eno1]";
}
?>