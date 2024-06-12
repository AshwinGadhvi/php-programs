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
        if(isset($_POST['submit']))
        {
            if($_POST['name']!='')
            {
                setcookie("ashwin",$_POST['name'],time()+86400,"/");
                header("Location : w2022prg4_1.php");
            }
        }
    ?>
    <form method="POST" action="w2022prg4.php">
        <input type="text" name="name">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>