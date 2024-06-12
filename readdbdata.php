<!DOCTYPE html>
<html lang="en">
<head>
    <title>DWPD</title>
</head>
<body>
    <a href="insertdb.php">Create User</a>
<table border="1" width="100%" cellpedding=1 cellspacing=0>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Address</th>
            <th>Select type</th>
        </tr>
    
    <?php
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