<?php
$servername="localhost";
$username="root";
$password="";
$con = new mysqli($servername,$username,$password,'demo');

if($con)
{
    echo "connected to database successfully";
}
echo "<br>";
// $sql="create table ashwin2(in_no int(5),in_name varchar(10))";

// if($con->query($sql)===true)
// {
//     echo "table ashwin2 is made";
// }

$sql="select * from ashwin2";
if($con->query($sql)===true)
{
    echo $row['in_no'];
    echo $row['in_name'];
}

$con->close();
?>
