<?php

    $number=23;
    print($number);
    $flag=1;
    for($i=2;$i<$number;$i++)
    {
        if($number%$i==0)
        {
            $flag=0;
            break;
        }
    }
    if($flag==1)
    {
        print("number is prime : ");
    }    
    else
    {
        print("number is not prime");
    }
?>