<html>
<head></head>
<body>
<h1>MAX out of three</h1>
<?php

$a=10;
$b=20;
$c=5;


if($a>$b)
    if($a > $c)
    {
        print($a." a is max");
    }
    else{
        print($b." b is max");
    }
else
    if($b>$c)
    {
     print($b."b is max");
    }
    else{
        print($c."c is max");
    }

?>
<p>PHP CODE EXECUTED IN BETWEEN HTML</p>
</body>
</html>