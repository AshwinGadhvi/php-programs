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
            session_start();
            if($_POST['name']!="")
            {
                $_SESSION["name"]=$_POST['name'];
                header("location: goat6.php");
            }
        }
    ?>
    <form action="goat5.php" method="post">
        <input type="text" name="name" id="no"><br>
        <input type="submit" value="submit" name="sub">
    </form>
</body>
</html>