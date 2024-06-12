<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<?php

function pass_data()
{
    $name="";
    if(isset($_POST['submit']))
    {
        $name=['n1'];
    }
    echo $name;
}
?>
<form action="" method="post">
    <input type="text" name="n1" id="op1" value="ashwin" readonly>
    <input type="submit" value="submit">
    </form>
</body>
</html>


