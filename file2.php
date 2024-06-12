<html>
<head>
    <title>getdata</title>
</head>
<body>
    
    <?php
    echo  $no1 = $_GET['eno1'];
    echo  $no2 = $_GET['eno2'];

    if($no1>$no2)
    {
        echo"<br>$no1 is max";
    }
        else
        {
        echo"<br>$no2 is max";
        }
    
    ?>
</body>
</html>