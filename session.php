<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['sub']))
        {
            session_start();
            if($_POST['name']!='' and $_POST['gender']!='')
            {
                $_SESSION["name"]=$_POST['name'];
                $_SESSION["gender"]=$_POST['gender'];
                header("Location: session1.php");
            }
        }
    ?>
<form action="session.php" method="POST">
        <span>Name : <input type="text" name="name" id="n1"></span><br>
        <!-- <span>Subject : <input type="checkbox" name="chk" id="c1" value="math">Math <input type="checkbox" name="chk1" id="c2" value="vb">VB</span><br> -->
        <span>Gender : <input type="radio" name="gender" id="g1" value="Male">Male <input type="radio" name="gender" id="g2" value="Female">Female</span><br>
        <input type="submit" value="submit" name="sub">
    </form>
</body>
</html>