<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $op="";
        if(isset($_POST['BJP']))
        {
            $op=$_POST['name'];
        }
    ?>
    <form action="data_get.php" method="post">
        <input type="text" name="name" id="n1">
        <input type="submit" value="BJP">
    </form>
</body>
</html>