<?php

    $servername="localhost";
    $username="root";
    $password="";
    $db="demo";
    $connection=mysqli_connect($servername,$username,$password,$db);
    if($connection)
    {
        echo "welcome ashwin bhai";
    }
    if($connection->connect_error){
        die("Connection Failed".$connection->connect_error);
        }
    // $query="create database ashwin";
    // $result=mysqli_query($connection,$query);
    // if($result)
    // {
    //     echo "maa chod di bhai congo";
    // }
    // else{
    //     echo "lode lag gaye back bro";
    // }
    $status="drop database ashwin";
    $result=mysqli_query($connection,$status);
    if($result)
    {
        echo "<BR>";
        echo "gir gaya gir gaya";
    }
    else{
        echo "khada hei khada hei khada hei";
    }
?>