<?php
include 'header.php';

$arr1=array(0=>array(1,2),1=>array(3,4));
$arr2=array(0=>array(1,2),1=>array(3,4));
$arr3=array(0=>array(0,0),1=>array(0,0));

for($i=0;$i<2;$i++)
{
    for($j=0;$j<2;$j++)
    {
        $arr3[$i][$j]=$arr1[$i][$j]+$arr2[$i][$j];
    }
}

echo "Output is : "."<br>";

for($i=0;$i<2;$i++)
{
    for($j=0;$j<2;$j++)
    {
        echo $arr3[$i][$j];
        
    }
    echo"<br>"; 
    echo " ";
}
?>