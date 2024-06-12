<html>
    <head>
    <title>max of 3 </title>
    </head>
<body>
<?php
    $n1=0;
    
     if(isset($_POST['submit']))
     {
         $n1 = $_POST['$no1'];
     }
?>
    <form method="POST" action="">
    <h2>Number 1 : </h2><input type="text" name="$no1"  value='<?php echo $n1?>'>
      

    <input type="submit" value="click me" name="submit" >
    <h1>
    <?php
    for($i=$n1;$i>0;$i--)
    {
        echo "$i ";
    }
    ?>
    </h1>
</form>
</body>
</html>