<html>
    <head>
    <title>max of 3 </title>
    </head>
<body>
<?php
    $n1=0;
    $n=0;
    $rev=0;
    $l_digit =0;
     if(isset($_POST['submit']))
     {
        $n1 = $_POST['$no1']
        while($n1>=0)
        {
            $l_digit=$n1%10;
            $rev=($rev*10)+$l_digit;
            $n=$n1/10;
        }
        $j.=$rev;
     }
?>
    <form method="POST" action="">
    <h2>Number 1 : </h2><input type="text" name="$no1"  value='<?php echo $n1?>'>
      

    <input type="submit" value="click me" name="submit" >
    <input type="text" name="no2" value='<?php echo $j?>' readonly><br>
   
    </h1>
</form>
</body>
</html>