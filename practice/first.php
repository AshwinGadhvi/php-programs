<?php

    $temp="";
    $number=121;
    $temp=$number;
    $rev=0;
    $l_digit=0;
    while($number!=0)
    {
        $l_digit=$number%10;
        $rev=($rev*10)+$l_digit;
        $number=$number/10;
    }
    print($rev);
    if($temp==$rev)
    {
        print("number is pelindrome");
    }
    else
    {
        print("number is not pelindrome");
    }
?>