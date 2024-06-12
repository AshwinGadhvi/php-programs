<html>
    <head>
        <title>op bhai</title>
    </head>
    <body>
        <?php
            $uname="";
            $upass="";
            $upass1="";
            $uadd="";
            $id=0;

            $servername="localhost";
            $username="root";
            $password="";
            $dbname="demo";

             //create connection
            $conn=new mysqli($servername,$username,$password,$dbname);

            //check connection
            if($conn->connect_error){
            die("Connection Failed".$conn->connect_error);
            }


            if(isset($_GET['edit']))
            {
                $id=$_GET['edit'];

                $sql="select * from login where id=" .$id;
                $result=$conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        $uname=$row["uname"];
                        $upass=$row["upass"];
                        $uadd=$row["uadd"];
                    }
                }
                else{
                    echo "No Record Found";
                }
            }
        ?>
        <form method="POST" autocomplete="off">
                User Name:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Enter User Name" required/></br>
                Password:<input type="text" name="upass" value="<?php echo $upass;?>" placeholder="Enter User Password" required/></br>
                Password confirm:<input type="text" name="upass1" value="<?php echo $upass1;?>" placeholder="Enter Conform Password" required/></br>
                Address:<input type="text" name="uadd" value="<?php echo $uadd;?>"  placeholder="Enter USer Address" required/></br>
                <input type="submit" name="sub" value="Edit"/>

                <?php
                    if(isset($_POST['sub']))
                    {   
                    $uname=$_POST['uname'];
                    $upass=$_POST['upass'];
                    $uadd=$_POST['uadd'];
                    $sql="update login set uname='". $uname ."',upass='". $upass ."',uadd='".$uadd."' where id=" .$id;
                    $status=mysqli_query($conn,$sql);
                    if($status)
                    {
                        header('Location: ReadDBData.php');
                    }
                    }
                ?>
        </form>
</body>
</html>