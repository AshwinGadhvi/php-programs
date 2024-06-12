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
        $age="";
        $enrollment="";
        $email="";
        $password="";
    ?>
    <form action="" method="post">
        <span>Name : </span><input type="text" value="<?php echo $name;?>" name="name" id="n1"><br>
        <span>Age : </span><input type="number" value="<?php echo $age;?>" name="age" id="a1"><br>
        <span>Enrollment : </span><input type="number" value="<?php echo $enrollment;?>" name="enrollment" id="n1"><br>
        <span>Email : </span><input type="email" value="<?php echo $email;?>" name="email" id="e1"><br>
        <span>Password : </span><input type="password" value="<?php echo $password;?>" name="password" id="p1"><br><br>
        <input type="submit" name="add" value="create">
    </form>
    <?php
    if(isset($_POST['add']))
    {
        $servername="Localhost";
        $username="root";
        $userpass="";
        $dbname="demo";
    //create connection
    $conn = new mysqli($servername,$username,$userpass,$dbname);
    //check connection
    if($conn->connect_error)
    {
        die("Connection failes : ".$conn->connect_error);
    }
        $name=$_POST['name'];
        $age=$_POST['age'];
        $enrollment=$_POST['enrollment'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query = "insert into login_student (name,age,enrollment,email,password) values ('".$name."','".$age."','".$enrollment."','".$email."','".$password."')";
        $status=mysqli_query($connect,$query);
        if($status)
        {
            header('location :readdbdata.php');
        }
        else{
            echo "errroooooo";
        }
    }
    ?>
</body>
</html>