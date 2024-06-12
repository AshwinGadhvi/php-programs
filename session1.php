<?php
if(session_status()!=PHP_SESSION_ACTIVE)
{
    session_start();
}
if($_SESSION["name"]=="")
{
    header('Location: session.php');
}
else
{
    echo "<h1>Welcome $_SESSION[name]";
}
?>