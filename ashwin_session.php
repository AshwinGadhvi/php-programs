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
            if($_POST['eno1']=='' && $_POST['eno2'])
            {
                $_SESSION["eno1"]=$_POST['eno1'];
                $_SESSION["eno2"]=$_POST['eno2'];
                header("location : ashwin_session2.php");
            }
        }
    ?>
    <form action="ashwin_session.php" method="POST">
        <input type="number" name="eno1" id="n1"><br>
        <input type="number" name="eno2" id="n2"><br>
        <input type="submit" value="submit" name="sub">
    </form>
</body>
</html>