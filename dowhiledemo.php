<html>
    <head>
        <title>do while demo</title>
    </head>
    <body>
        
        <form action="" method="POSt">
            <h1>Demonstrate of do while</h1>
        <input type="number" name="no1" id="" value="0"><br><br>
        <input type="submit" value="click me" name="submit"><br>
        <?php
            $n="";
            if(isset($_POST['submit']))
            {
                $n=$_POST['no1'];
            }
            do{
                echo "$n "."<br>";
                $n--;
            }while($n>0);
            ?>
        </form>
    </body>
</html>