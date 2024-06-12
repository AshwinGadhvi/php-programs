<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display:flex;
            justify-content: center;
            align-items:center;
            margin-top:300px;
        }
        input{
            margin:5px;
        }
    </style>
</head>
<body>
<?php
        $name="";
        $enrollment="";
        $subject="";
        $sem="";
?>
<div class="container">
    <form action="" method="post">
        Name : <input type="text" name="name" value='<?php echo $name;?>' id="n1"><br>
        Enrollment : <input type="number" name="enrollment" value='<?php echo $enrollment;?>' id="e1"><br>
        Subject : <input type="text" name="subject" value='<?php echo $subject;?>' id="s1"><br>
        Semester : <input type="number" name="sem" value='<?php echo $sem;?>' id="sem1"><br>
        <input type="submit" value="Submit" name="Submit">
    </form>
    <?php
        
        if(isset($_POST['Submit']))
        {
            $connection=mysqli_connect("Localhost","root","",'demo');
            if(!$connection)
            {
                print("connection not estblish");
            }
            $name=$_POST['name'];
            $enrollment=$_POST['enrollment'];
            $subject=$_POST['subject'];
            $sem=$_POST['sem'];
            $sql="insert into ashwinop (name,enrollment,subject,semester) values ('".$name."','".$enrollment."','".$subject."','".$sem."');";
            $result=mysqli_query($connection,$sql);
            if($result)
            {
                print("data entered successfully!!!!");
            }
            else
            {
                print("error bro koi nahi");
            }
        }
    ?>
</div>
</body>
</html>