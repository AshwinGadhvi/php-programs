<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name="";
    $salary="";
        if(isset($_POST['sub']))
        {
            $name=$_POST['name'];
            $salary=$_POST['salary'];
        }
        echo "My name is : ".$name." and my salaary is : ".$salary;
    ?>
</body>
</html>