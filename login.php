<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>form1</title>
    <style>
        .parellel{
            display: inline-block;
            vertical-align: top;
            margin-left: 0;
            margin-right: 0;
            height: 449px;
            border-radius: 10px;
            
        }
        input[type=submit]
        {
            background-color: blue;
            color: white;
            border-radius: 10px;
            width: 100px;
            height: 30px;
        }
        .container{
            vertical-align: middle;
            padding-left: 30%;
            padding-top: 2%;
        }
        input[type=text]
        {
            width: 80%;
        }
        input[type=password]
        {
            width: 80%;
        }
        input[type=email]
        {
            width: 80%;
        }
        .op
        {
            margin-left: -4px;
        }
        img{
            border-radius: 5px;
        }
    </style>
</head>
<body style="background-color:cornflowerblue;">
    <?php
        $uname="";
        $upass="";
        if(isset($_POST['submit']))
        {
            $uname=$_POST['email'];
            $upass=$_POST['upass'];
        }
        if($uname=="ashwingadhvi397@gamil.com" && $upass=="432344555566")
        {
            header('location: http://www.google.com/');
        }
        else{
            $msg="Invalid user name password";
        }
    ?>
    <form action="input.html" method="GET">
    <div class="container">
         <div class="parellel" style="margin-left: 0;">
            <img src="image/WhatsApp Image 2022-08-10 at 8.55.17 AM.jpeg" alt="no image">
        </div> 
        <div class="parellel op" style="background-color: white;padding: 10px;margin-right: 0;">
            <h1>Registration Form</h1><br>
            
            Your Email : <br>
            <input type="email" name="email" id="email" value='<?php echo $uname; ?>' placeholder="Enter Valid email" ><br><br>
            passport : <br>
            <input type="password" name="pass"  id="pass" value='<?php echo $upass; ?>' placeholder="Enter Valid pssword"><br><br>
            
            
            <input type="checkbox" name="chkb" id="chkb"><span>By signing up,you agree to the </span><br>
            <a href="www.google.com">Play term of service</a><br><br>
            <input type="submit" name="submit" id="submit" value="Login">

        </div>
    </div>
    </form>
</body>
</html>