<?php

                    
function getdata($sql)
{
    // Create connection                    
    $conn = new mysqli("localhost", "root", "","demo");
     // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $result = $conn->query($sql);               
    return $result;
}

function ModifyData($sql)
{
    $conn = new mysqli("localhost", "root", "","demo");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $status=mysqli_query($conn,$sql);

    return $status;
}

?>