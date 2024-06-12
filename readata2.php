<html>
<head>
    <title>read data</title>
</head>
<body>
<h2>Enter Number</h2>
<?php
    $no1=0;
    $no2=0;
    if(isset($_POST['submit']))
    {
    $no1 = $_POST['eno1'];
    $no2 = $_POST['eno2'];
    }
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="eno1" value="<?php echo $no1;?>" placeholder="Enter number"/>
<input type="text" name="eno2" value="<?php echo $no2;?>" placeholder="Enter number"/>
<input type="submit" name="submit" value="click me">
<h2>
<?php
    if($no1 != '0' && $no2 !='0')
    if($no1>$no2)
    {
        echo"<br>$no1 is max";
    }
        else
        {
        echo"<br>$no2 is max";
        }
    
    ?>
    </h2>
</form>
</body>
</html>