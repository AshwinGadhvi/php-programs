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
        $sem="";
        $branch="";
    ?>
    <form action="external2.php" method="POST">
        Name : <input type="text" value='<?php echo $name;?>' name="name" id="n1"><br>
        Sem  : <input type="number" value='<?php echo $sem;?>' name="sem" id="s1"><br>
        Branch : <input type="number" value='<?php echo $branch;?>' name="branch" id="b1"><br>
        <input type="submit" value="submit" name="sub">
    </form>
    <?php
        if(isset($_POST['sub']))
        {
            $con=mysqli_connect("localhost","root","","demo");
            if(!$con)
            {
                echo "Error to connect database".mysql_error();
            }
            $name=$_POST['name'];
            $sem=$_POST['sem'];
            $branch=$_POST['branch'];
            $query="insert into student (sname,ssem,sbranch) values ('".$name."','".$sem."','".$branch."')";
            $status=mysqli_query($con,$query);
            if($status)
            {
                header('Location: view_student.php');
            }
        }
    ?>
</body>
</html>