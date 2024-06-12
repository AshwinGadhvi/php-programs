<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
            border-collapse:collapse;
        }
        table,th,td{
            border:1px solid black;
            padding:5px;
        }
        th{
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
        $con = mysqli_connect('localhost','root','','demo');
        if(!$con)
        {
            die('coude not connect');
        }
        mysqli_select_db($con,'demo');
        $sql = "select * from ashwin";
        $result = mysqli_query($con,$sql);
        echo "<table><tr>
        <th>First Name</th>
        <th><Last Name</th>
        </tr>";
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['in_name']."</td>";
            echo "<td>".$row['in_no']."</td>";
            echo "<tr>";
        }
        echo "<table>";
        mysqli_close($con);
    ?>
</body>
</html>