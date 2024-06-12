<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name="";
        if(isset($_GET['sub']))
        {
            $name=$_GET['name'];
        }
    ?>
    <form action="ashwinopchhe.php" method="get">
        <input type="text" name="name" id="n1">
        <input type="submit" value="submit" name="sub">
    </form> 
</body>
</html>