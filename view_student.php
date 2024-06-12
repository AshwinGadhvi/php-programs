<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="100" border="1">
        <tr>
            <th>Sid</th>
            <th>Sname</th>
            <th>Ssem</th>
            <th>Sbranch</th>
        </tr>
        <?php
            $con=mysqli_connect("localhost","root","","demo");
            if(!$con)
            {
                echo "Error to connect database".mysql_error();
            }
            $query="select * from student";
            $result=$con->query($query);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                ?>
                <tr>
                    <td><?php echo $row['sid']?></td>
                    <td><?php echo $row['sname']?></td>
                    <td><?php echo $row['ssem']?></td>
                    <td><?php echo $row['sbranch']?></td>
                </tr>
                <?php
            }
            else
            {
                echo "no data found";
            }
        ?>
    </table>
</body>
</html>