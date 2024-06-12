<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php

    $no1="";

    $ans="";
    if(isset($_POST['submit']))
    {
        $no1 = $_POST['no1'];
        $ans=1;
        for($i=1;$i<=$no1;$i++)
        {
            $ans*=$i;
        }
    }
    ?>
    <form action="" method="POST">
    <input type="text" name="no1" value='<?php echo $no1;?>' placeholder="enter number">
    <input type="submit" name="submit" value="click me">
    <input type="text" name="ans" value='<?php echo$ans;?>' readonly="true">
</form>
</body>
</html>