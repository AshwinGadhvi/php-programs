<!DOCTYPE html>
<html>
    <body>
    <center><a href="InsertDB.php">Create a new User</a><br><br></center>
        <table width="100%" cellpadding=1 cellspacing=0 border=1>
        <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Address</th>
                <th>Select Type</th>
        </tr>

        <?php
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

            $sql="select * from login";
            $result=$conn->query($sql);

            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                ?>
                
                    <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['uname'] ?></td>
                    <td><?php echo $row['upass'] ?></td>
                    <td><?php echo $row['uadd'] ?></td>
                    <td><a href="edit_user.php?edit=<?php echo $row['id'];?>">Edit</a>
                    <a onclick="javascript:return confirm('Do you want to delete it?');" href="delete_user.php?del=<?php echo $row['id'];?>">Delete</a></td>
                    </tr>               
                <?php
                }
            }
            else
            {
                echo "No Record Found";
            }
        ?>

        </table>
</body>
</html>