<html>
    <head>
        <title>perfect</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="number" name="no1" id=""><br><br>
            <input type="submit" value="click me" name="submit">
            <?php
                $num=0;
                $sum=0;
                    $mu=1;
                if(isset($_POST['submit']))
                {
                    $num=$_POST['no1'];
                    $temp=$num;
                    while($num>0)
                    {
                        $sum +=($num%10);
                        $mu*=($sum%10);
                        $num=(int)($num/10);
                    }
                }
                $num=$temp;
                if($mu==$temp)
                {
                    echo "number is perfect";
                }
                else
                {
                    echo "number is not perfect";
                }
            ?>
        </form>
    </body>
</html>