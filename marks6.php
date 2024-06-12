<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    
</head>
<body>
<?php
$str2="";
    if(isset($_GET['submit']))
    {
        $str2 = $_GET['str1'];   
    }
    
    
?>
    <form action="" method="GET">
        <input type="text" name="str1"  placeholder="enter string"><br><br>
        <input type="submit" value="btn1" name="click here">
        <input type="text" name="str2" id="" value="<?php echo $str2;?>">
        <?php echo $str2;?>
    </form>
</body>
</html>