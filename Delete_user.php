<?php
    if(isset($_GET['del'])){
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

            $sql="delete from login where id=".$_GET['del'];
            $status=mysqli_query($conn,$sql);
                    if($status)
                    {
                        header('Location: ReadDBData.php');
            }
}
?>