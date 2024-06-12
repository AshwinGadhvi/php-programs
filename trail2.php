<?php

$number=123;
$temp=$number;
$l_digit=0;
$rev=0;
echo $number;
echo $temp;
while($number!=0)
{
    $l_digit=($number%10);
    $rev=$rev*10+$l_digit;
    $number=$number/10;
}
echo $rev;

?>