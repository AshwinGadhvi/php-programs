<html>
    <head>
    <title>max of 3 </title>
    </head>
<body>
<?php
    $n1=0;
    $n2=0;
    $n3=0;
    if(isset($_POST['submit']))
    {
    $n1 = $_POST['$no1'];
    $n2 = $_POST['$no2'];
    $n3 = $_POST['$no3'];
    }
?>
    <form method="POST" action="">
    <h2>Number 1 : </h2><input type="text" name="$no1"  value='<?php echo $n1?>'>
    <h2>Number 2 : </h2><input type="text" name="$no2" value='<?php echo $n2?>'>
    <h2>Number 3 : </h2><input type="text" name="$no3" value='<?php echo $n3?>'>

    <input type="submit" value="click me" name="submit" >
    <h1>
    <?php
    if($n1!='' && $n2!='' && $n3!='')
    {
        if( $n1>$n2 && $n1>$n3)
        {
            echo "$n1 is max";
        }
        else if($n2>$n3)
        {
            echo "$n2 is max";
        }
        else
        {
            echo "$n3 is max";
        }
    }
    ?>
    </h1>
</form>
</body>
</html>