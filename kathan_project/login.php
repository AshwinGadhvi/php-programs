<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <?php
            if(isset($_POST['submit']))
            {        $uname="";
                $upass="";
                $msg="";
                $uname=$_POST['uname'];
                $upass=$_POST['upass'];  
                
                $flag=0;
                $server="localhost";
                $user="root";
                $password="";
                $db="project";
                $con=new mysqli($server,$user,$password,$db);
                // if($con)
                // {
                //     echo "connect to spaceX";
                // }
                // if($conn->connect_error)
                // {
                //     die("Connection failes : ".$conn->connect_error);
                // }
                $sql="select * from login where uname='$uname' and upass='$upass';";
                $result=$con->query($sql);
                if($result->num_rows>0)
                {
                    //outpiut data of each row
                    while($row=$result->fetch_assoc())
                    {
                        $flag=1;
                    }
                }
                $con->close();
                if($flag==1)
                {
                    // session_start();
                    // $_SESSION["fname"]=$uname;
                    // header("Location: https://www.google.com");
                    header("Location: https://chat.openai.com");
                }
                else
                {
                    $err="invalid user name and password...";
                    echo $err;
                }
            }
        ?>
        <input type="text" name="call" id="c" length="10">
        <input type="email" name="uname" value='<?php echo $uname; ?>' id="u_name"><br>
        <input type="password" name="upass" value='<?php echo $upass; ?>' id="u_pass"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>