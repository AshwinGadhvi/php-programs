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
            session_start();
            $_SESSION["eno1"]=$_POST['eno1'];
            $_SESSION["eno2"]=$_POST['eno2'];
            header("Location: sessation1.php");
        }
    }
    ?>
    <form method="POST" action="sessation.php">
    <input type="text" name="eno1" id="" placeholder="enter number 1">
    <input type="text" name="eno2" id="" placeholder="enter number 2">
    <input type="submit" value="Click me" name="sub">
    </form>
</body>
</html>