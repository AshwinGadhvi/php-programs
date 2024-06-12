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
            if($_POST['eno1']!='' &&  $_POST['eno2']!='')
            {
                setcookie("eno1",$_POST['eno1'],time() + 86400,"/");
                setcookie("eno2",$_POST['eno2'],time() + 86400,"/");
                header("location: ashwin_cookie2.php");
            }
        }
    ?>
    <form action="ashwin_cookie.php" method="POST">
        <input type="number" name="eno1" id="e1">
        <br>
        <input type="number" name="eno2" id="e2">
        <br>
        <input type="submit" value="submit" name="sub">
    </form>
</body>
</html>