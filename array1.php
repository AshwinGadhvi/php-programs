<?php
include 'header.php';
echo "<br>";
//array bolte bhau also called a indexed array
    $number = array(1,2,3,4,5);
    foreach($number as $value)
    {
        echo $value;
    }
    echo "<br>";
    $number[0]="data 1";
    $number[1]="data 2";
    $number[2]="data 3";
    $number[3]="data 4";
    $number[4]="data 5";

    foreach($number as $value)
    {
        echo $value."<br>";
    }

    //associative array

    $salary = array("e001"=>5000,"e002"=>6000,"e003"=>7000,);

    foreach($salary as $value)
    {
        echo $value."<br>";
    }

    echo "<br>";

    echo "salary of e001 : ".$salary['e001'];echo "<br>";
    echo "salary of e002 : ".$salary['e002'];echo "<br>";
    echo "salary of e003 : ".$salary['e003'];echo "<br>";
  //  echo "salary of e004".$salary['e004']; gives a array because no indexed is made for this

    $salary['e004']=80000;
    echo "salary of e004 : ".$salary['e004'];echo "<br>";

    //if index was matched then value will be updated

    $employee = array("e001"=>array("name"=>"mohan","address"=>"adipur","age"=>50),
    "e002"=>array("name"=>"mohana","address"=>"adipura","age"=>60),
    "e003"=>array("name"=>"mohanaa","address"=>"adipuraa","age"=>70),
);

    echo"name of employee : ". $employee['e001']['name']."Stayed at ". $employee['e001']['address']."age is : ". $employee['e001']['age']. "<br/>";
    foreach($employee as $e)
    {
        echo $e['name']."<br/>";
    }
?>