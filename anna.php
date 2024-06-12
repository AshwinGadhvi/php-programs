<?php

    $connection=mysqli_connect("localhost","root","",'ashop');
    $query="insert into op (name,contact) values('ashwin',90909);";
    $result=mysqli_query($connection,$query);
    if($result)
    {
        echo "data inserted ";
    }
    else
    {
        echo "errrroro";
    }
    
?>