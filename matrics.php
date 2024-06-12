<?php

    $arr=array(0=>array(1,2),1=>array(1,2));
    $arr1=array(0=>array(1,2),1=>array(1,2));
    $arr2=array(0=>array(0,0),1=>array(0,0));

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            $arr2[$i][$j]=$arr[$i][$j]+$arr1[$i][$j];
        }
    }
    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $arr2[$i][$j];
        }
        echo"<br>"; 
        echo " ";
    }

    echo "<h1>"."Associeative"."</h1>";
    $ar=array("0001"=>50000,"0002"=>100000,"0003"=>"ashwin");
    foreach($ar as $value)
    {
        echo $value;
    }
    echo "<br>";
    print("\n");
    function star($n)
    {
        for($i=0;$i<$n;$i++)
        {
            print("*");
        }
    }
    star(10);
    echo "<br>";
    $str="ashwin";
    $str2=strrev($str);
    $str3=strlen($str2);
    echo "real : ".$str;
    echo "<br>";
    echo "fake : ".$str2;
    echo "<br>";
    echo "fake : ".$str3;
    echo "<br>";
    $num1=10.1;
    $num2=-10.1;
    $ans=ceil($num1);
    echo $ans;
    echo "<br>";
    $ans=floor($num1);
    echo $ans;
    echo "<br>";
    $ans=abs($num2);
    echo $ans;
    
?>