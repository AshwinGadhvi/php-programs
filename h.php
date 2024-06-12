<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            $uname="";
            if(isset($_POST['btn1']))
            {
                $uname=$_POST['txt1'];
            }
            if($uname=="ashwin")
            {
                header('Location: https://www.youtube.com/');
            }
            else
            {
                
            }
        ?>
        <form action="" method="POST">
            <input type="text" name="txt1" id="" value="<?php echo$uname;?>"><br>
            <input type="submit" value="click me" name="btn1">
        </form>
    </body>
</html>