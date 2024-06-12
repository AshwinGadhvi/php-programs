<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $uname="";
        $upass="";
        $upass1="";
        $uadd="";
    ?>
    <form action="insertdb.php" method="POST">
    <a href="readdbdata.php">List User</a><br><br><br>
    <h2>Create User</h2>
        User Name : <input type="text" value='<?php echo $uname;?>' name="uname" id="" require placeholder="enter name : "><br>
        Password : <input type="text" value='<?php echo $upass;?>' name="upass" id="" require placeholder="enter password : "><br>
        Confirm Password : <input type="text" value='<?php echo $upass1;?>' name="upass1" id="" require placeholder="enter password : "><br>
        Address : <input type="text" value='<?php echo $uadd;?>' name="uadd" id="" require placeholder="Enter Your Address : "><br>
        <input type="submit" name="sub" value="Create">
    </form>
    <?php
    if(isset($_POST['sub']))
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
    $uname=$_POST['uname'];
    $upass=$_POST['upass'];
    $uadd=$_POST['uadd'];
    $sql="insert into login (uname,upass,uadd) values ('".$uname."','".$upass."','".$uadd."')";
    $status=mysqli_query($conn,$sql);
    if($status)
    {
        header('Location:readdbdata.php');
    }
    }
    ?>
</body>
</html>