<?php

$servername="localhost";
$username="root";
$password="";

$con = mysqli_connect($servername,$username,$password);

if($con)
{
    Echo "Successfully connect to database!!!!!!!";
}
else{
    echo "nahi hua jo ukhad na ukhad le";
}
?>