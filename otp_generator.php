<html>
<head>
    <title>op.com</title>
</head>
<body>
    <?php
    $ans="";
    if(isset($_POST['submit']))
    {
        // $ans=$_POST['otp_'];
    }
    $ans=rand(1000,9999);
    ?>
    <form action="" method="POST">
otp :  <input type="text" name="otp_" id="" value="<?php echo $ans;?>">
<br>
<input type="submit" value="submit">

</form>
</body>
</html>