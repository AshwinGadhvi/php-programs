<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="100%" border="1">
    <tr>
        <th>
            Id
        </th>
        <th>
            User Name
        </th>
        <th>
            User Pass
        </th>
        <th>
            User address
        </th>
    </tr>
    <?php
        $servername="Localhost";
        $username="root";
        $password="";
        $db="demo";
        $connection=mysqli_connect($servername,$username,$password,$db);
        if($connection->connect_error)
        {
            die("Connection Failed".$connection->connect_error);
        }
        $sql="select * from login";
        $result=$connection->query($sql);;
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['uname']."</td>";
                echo "<td>".$row['upass']."</td>";
                echo "<td>".$row['uadd']."</td>";
            }
        }
        else{
            echo "no record found";
        }
    ?>
    </table>
</body>
</html>