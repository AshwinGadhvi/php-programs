<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <!-- 1) Wap to take employee details like name , age expected salary and qualifications from user and display it to next page using php */ -->
    <?php

     $name1 = $_GET['name'];
     $age2 = $_GET['age'];
     $salary2 = $_GET['salary'];
     $qua2 = $_GET['qua'];
    //  echo "Name is $name1";
    //  echo "Age is : $age2";
    //  echo "Salary is : $salary2";
    //  echo "Qualification is : $qua2";
    ?>
    <h2>Employee details</h2>
    <form action="">
        Name   :          <input type="text" name="name" value="<?php echo $name1;?>"><br><br>
        Age    :          <input type="number" name="age" value="<?php echo $age2;?>"><br><br>
        Salary :          <input type="number" name="salary" value="<?php echo $salary2;?>"><br><br>
        qualifications :  <input type="text" name="qua" value="<?php echo $qua2;?>"><br><br>
</from>
</body>
</html>