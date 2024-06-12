<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>"."welcome ashwin"."</h1>";
        $a=10;
        $b=10;
        echo "Arithmetic oprator";
        echo "plus is : ".($a+$b);
        echo "<br>";
        echo "minus is : ".($a-$b);
        echo "<br>";
        echo "mul is : ".($a*$b);
        echo "<br>";
        echo "devide is : ".($a/$b);
        echo "<br>";
        echo "mod is : ".($a%$b);
        echo "<br>";
        echo "<h1>"."new quesiton"."</h1>";
        $om=10;
        echo gettype($om);
        echo "<br>";
        settype($om,"string");
        echo "<br>";
        echo gettype($om);
        echo "<br>";
        $result=(int)$om;
        echo "<br>";
        echo gettype($result);
        echo "<br>";
        echo "<br>";
        $no1=0;
        $no2=1;
        $n=10;
        echo $no1." ".$no2;
        for($i=0;$i<$n;$i++)
        {
            $temp=$no1+$no2;
            $no1=$no2;
            $no2=$temp;
            echo " ".$temp;
        }
        echo "<br>";
        echo "<br>";
        $sub1=99;
        $sub2=95;
        $sub3=96;
        $sub4=97;
        $sub5=98;
        $tot=$sub1+$sub2+$sub3+$sub4+$sub5;
        $avg=$tot/5;
        echo "Total Marks obtain from 500 : ".$tot;
        echo "<BR>";
        echo "Total Percentage from 100 : ".$avg;
        echo "<BR>";
        if($sub1>$sub2 && $sub1>$sub3)
        {
            echo "Number 1 is max : ".$sub1;
        }
        else if($sub2>$sub3)
        {
            echo "Number 2 is max : ".$sub2;
        }
        else
        {
            echo "Number 3 is max : ".$sub3;
        }
        echo "<BR>";
        echo "<BR>";
        $arr=array(1,2,3,4,5);
        
        echo "<BR>";
        echo "<BR>";
        $arr1=array(0=>array(1,2),1=>array(2,1));
        for($i=0;$i<2;$i++)
        {
            for($j=0;$j<2;$j++)
            {
                echo $arr1[$i][$j];
            }
            echo "<BR>";
            echo " ";
        }
        echo "<BR>";
        $arr2=array(0=>array(1,2),1=>array(2,1));
        for($i=0;$i<2;$i++)
        {
            for($j=0;$j<2;$j++)
            {
                echo $arr2[$i][$j];
            }
            echo "<BR>";
            echo " ";
        }


        $arr3=array(0=>array(0,0),1=>array(0,0));

        for($i=0;$i<2;$i++)
        {
            for($j=0;$j<2;$j++)
            {
                $arr3[$i][$j]=$arr1[$i][$j]+$arr2[$i][$j];
            }
        }

        echo "Output is : "."<br>";

        for($i=0;$i<2;$i++)
        {
            for($j=0;$j<2;$j++)
            {
                echo $arr3[$i][$j];
                
            }
            echo"<br>"; 
            echo " ";
        }

        $arr5=array("1"=>"ashwin","12"=>123,"3"=>12);
        foreach($arr5 as $value)
        {
            echo $value.",";
        }
        echo "<BR>";
        static $count=0;
        function inc($count)
        {
            $count+=1;
            echo $count;
        }
        inc($count);
        echo "<BR>";
        inc($count);
        echo "<BR>";
        $str="ashwin";
        echo strlen($str);
        echo "<BR>";
        echo strrev($str);
        echo "<BR>";
        echo strtoupper($str);
        echo "<BR>";
        echo strtolower($str);
        echo "<BR>";
?>
</body>
</html>