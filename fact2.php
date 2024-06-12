<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $ans="";
    if(isset($_POST['submit']))
    {
        
        $ans=1;
        for($i=1;$i<=5;$i++)
        {
            $ans*=$i;
        }
    }
    ?>
    <form action="" method="POST">
    <input type="submit" name="submit" value="click me">
    <input type="text" name="ans" value='<?php echo$ans;?>' readonly="true">
</form>
</body>
</html>