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
        if(isset($_POST['sub']))
        {
            setcookie("name",$_POST['name'],time()+86400,"/");
            header("location: goat4.php");
        }
    ?>
    <form action="goat3.php" method="post">
        <input type="text" name="name" id="n1"><br>
        <input type="submit" value="submit" name="sub">
    </form>
</body>
</html>