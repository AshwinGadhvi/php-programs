<?php
echo"Ashwin gadhvi<br>";
echo"--------------------";
echo"<br>basic is =1500";

$da=7.5;
$hra=10;
$pt=300;
$basic=1500;

$da=($basic*$da)/100;
Echo"<br>DA is : ".$da;


$da=($basic*$hra)/100;
Echo"<br>HRA is : ".$hra;

$sal=($basic+$da+$hra)-$pt;
echo"<br>Net Salary is : ".$sal;
?>