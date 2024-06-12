<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        $no1 = "";
        $no2="";
        $no3="";
        $ans="";
        if(isset($_POST['submit']))
        {
            $no1=$_POST['no1'];
            $no2=$_POST['no2'];
            $no3=$_POST['no3'];
            $ans=$no1*$no2*$no3;
        }
        ?>
        <form action="" method="POST">
        <input type="text" name="no1" value='<?php echo($no1);?>' placeholder="Enter The number">
        <input type="text" name="no2" value='<?php echo($no2);?>' placeholder="Enter The number">
        <input type="text" name="no3" value='<?php echo($no3);?>' placeholder="Enter The number">
        <input type="submit" name="submit" value="click me">
        <input type="text" name="ans" value='<?php echo($ans);?>' readonly="true">
        </form>
    </body>
</html>