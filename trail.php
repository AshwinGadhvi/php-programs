<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin:0%;
            padding:0%;
        }
        h4{
            color:gray;
        }
        .container{
            display:inline-block;
            width:15%;
            overflow: hidden;
            height:400px;
            margin-top:2%;
            margin-left:3.8%;
            border:1px solid black;
        } 
        .p_image{
            display:block;
            width:100%;
            height:200px;
            border:1px solid black;
        }
        .p_image img{
            width:100%;
            height:100%;
        }
        .p_info{
            display:block;
            width:100%;
            height:200px;
        }
        p{
            font-size:20px;
        }
    </style>
    <title>kyan bhai</title>
</head>
<body>
    <center><h1 style="margin:20px;">Product Summary</h1></center>
    <hr>    
<form action="" method="post" enctype="multipart/form-data">
<?php
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'demo');
                        $query = "select * from card_images";
                        $query_run = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <div class="container">
                            <div class="p_image">
                            <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="no image"">'; ?>
                            <?php echo "<br>";?>
                            </div>
                            <div class="p_info">
                            <?php echo "<h4>".$row['header_name']."</h4>"?>
                            <?php echo "<br>";?>
                            <?php echo "<p>"."$".$row['price']."</p>"."<strike>"."400"."</strike>"?>
                            <?php echo "<br>";?>
                            <?php echo $row['Discount']?>
                            <?php echo "<br>";?>
                            <?php echo $row['Description']?>
                            <?php echo "<br>";?>
                            </div>
                        </div>
                        <?php
                        }
?>                
</form>
</body>
</html>