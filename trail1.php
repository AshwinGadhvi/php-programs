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
        $servername="Localhost";
        $username="root";
        $password="";
        $db="demo";
        $connection=mysqli_connect($servername,$username,$password,$db);
        if(!$connection)
        {
            Echo "Connection is not successfully";
        }
        $query='create table studentop(
            enrollment integer (10),
            name varchar (10),
            institude varchar (10),
            department varchar(10)
        );';
        // $result=mysqli_query($query,$connection);
        // if($result)
        // {
        //     Echo "Table created successfully";
        // }
            if($connection->query($query)===true)
            {
                echo "table studentop is made";
            }
    ?>
</body>
</html>