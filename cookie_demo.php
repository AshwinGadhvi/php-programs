<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['sub']))
    {
        if($_POST['eno1']!='' && $_POST['eno2']!='')
        {
            setcookie("eno1",$_POST['eno1'],time() + 86400,"/");
            setcookie("eno2",$_POST['eno1'],time() + 86400,"/");
            header("Location: cookie_demo1.php");
        }
    }   
    ?>
    <form method="POST" action="cookie_demo.php">
    <input type="text" name="eno1" id="" placeholder="enter number 1">
    <input type="text" name="eno2" id="" placeholder="enter number 2">
    <input type="submit" value="Click me" name="sub">
    </form>
</body>
</html>