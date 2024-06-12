<?php

$number=153;
$temp=$number;
$l_digit=0;
$cube=0;
while($number!=0)
{
    $l_digit=$number%10;
    $cube+=($l_digit*$l_digit*$l_digit);
    $number=$number/10;
}
echo $cube;
echo "<BR>";
echo $temp;
echo "<BR>";
if($temp==$cube)
{
    echo "number is armstrong : ".$cube;
}
else
{
    echo "number is not armstrong : ".$cube;
}
?>