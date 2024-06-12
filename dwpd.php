<?php
    echo "<h1>"."Question 1"."</h1>";
    echo "Welcome To practical hub";
    echo "<br>";
    echo "<h1>"."Question 2"."</h1>";

    $a=10;
    $b=10;
    $add=$a+$b;
    echo $add;
    echo "<br>";
    if($a>18)
    {
        print("eligible for vote");
    }
    else
    {
        echo "not eligible for vote";
    }
    echo "<br>";
    if(($a / 2==0) && (b / 2==0))
    {
        print("Number is even : ");
    }
    else
    {
        print("Number is not prime : ");
    }
    echo "<br>";
    echo "<h1>"."Question 3"."</h1>";
    $c=10.5;
    echo gettype($c);
    echo "<br>";
    echo gettype($a);
    echo "<br>";
    settype($a,"string");
    echo gettype($a);
    echo "<br>";
    echo "<h1>"."Question 4"."</h1>";
    echo gettype($a);
    echo "<br>";
    $k=(int)$a;
    echo "<br>";
    echo gettype($k);
    echo "<br>";
    echo "<h1>"."Question 5"."</h1>";
    $a1=0;
    $a2=1;
    echo $a1 ,$a2;
    $n=10;
    for($i=2;$i<$n;$i++)
    {
        $a3=$a1+$a2;
        echo $a3;
        $a1=$a2;
        $a2=$a3;
    }
?>