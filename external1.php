<?php
    $flag=1;
    $number=17;
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
        echo "Number is prime : ".$number;
    }
    else
    {
        echo "Number is not prime : ".$number;
    }
?>