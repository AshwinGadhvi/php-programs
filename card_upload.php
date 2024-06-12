<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color:lightgrey;
        }
        #op1,#op2,#op3,#op4,#op5{
            margin-left:50px;
            background-color:purple;
            color:white;
            font-size:20px;
            padding:10px;
            border:2px solid white;
        }
        input[type=text]
        {
            margin-left:30px;
        }
        input{
            font-size:20px;
            height:35px;
        }
        input[type=submit]
        {
            margin-left:500px;
            background-color:purple;
            border:2px solid black;
            color:white;
            border-radius:10px;
        }
        #pp1{
            margin-left:10px;
        }
        #op1{
            margin-right:50px;
        }
        #op2{
            margin-right:85px;
        }
        #op3{
            margin-right:90px;
        }
        #op4{
            margin-right:57px;
        }
        #op5{
            margin-right:35px;
        }
        
    </style>
    <title>ash.com</title>
</head>
<body>
    <center><h1>Product Master</h1></center>
    <hr>
    <br>
    <form action="" method="POST" enctype="multipart/form-data">
    <label id="op1">Choose Image</label>
    <input type="file" name="image" id="image" placeholder="Choose Your Image File"><br><br><br>

    <label id="op2">Name </label>
    <input type="text" name="product_name" id="p_name" placeholder="Enter Product Name"><br><br><br>

    <label id="op3">Price</label>
    <input type="text" name="product_price" id="p_price" placeholder="Enter Product Price"><br><br><br>

    <label id="op4">Discount</label>
    <input type="text" name="product_discount" id="p_dicount" placeholder="Enter Product Discount"><br><br><br>

    <label id="op5">Description</label>
    <input type="text" name="product_description" id="p_description" placeholder="Enter Product Description"><br><br><br>

    <input type="submit" name="upload" value="upload_data"> 
    <input type="submit" name="goto" value="View Product" id="pp1"> 
    </form>
</body>
</html>

<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'demo');

if(isset($_POST['upload']))
{
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $discount = $_POST['product_discount'];
    $description = $_POST['product_description'];

    $query = "insert into card_images(image,header_name,price,Discount,Description) values ('".$file."','".$name."','".$price."','".$discount."','".$description."')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script type="text/javascript">alert("Data Are Uploaded")</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("Data Are not Uploaded")</script>';
    }
}
if(isset($_POST['goto']))
{
    header("Location:displayproduct.php");
}
?>