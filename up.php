<?php

    $str3="";
    if(isset($_POST['btn2']))
    {
        $str3 = $_POST['str1'];
    }
    echo strtoupper($str3);
    $ans=$str3;
?>