<?php
include 'header.php';
$employee = array("e001"=>array("sr"=>1,"name"=>"ashwin","address"=>"adipur","age"=>18,"salary"=>50000),
"e002"=>array("sr"=>2,"name"=>"jaydeep","address"=>"adipur","age"=>18,"salary"=>50000),
"e003"=>array("sr"=>3,"name"=>"vrajesh","address"=>"anjar","age"=>19,"salary"=>50000),
"e004"=>array("sr"=>4,"name"=>"hem","address"=>"anjar","age"=>18,"salary"=>50000),
"e005"=>array("sr"=>5,"name"=>"het","address"=>"anjar","age"=>19,"salary"=>50000)
);

echo "<table border=1><tr><td>Sr</td><td>Name</td><td>Adress</td><td>Age</td><td>Salary</td></tr>";
foreach($employee as $e)
    {
        echo "<tr>";
        echo "<td>". $e['sr']."</td>";
        echo "<td>". $e['name']."</td>";
        echo "<td>". $e['address']."</td>";
        echo "<td>". $e['age']."</td>";
        echo "<td>". $e['salary']."</td>";
        echo "</tr>";
    }
?>