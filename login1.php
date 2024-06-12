<html>
    <head><title>login.com</title>
        <style>
            *{
                margin: 0%;
                padding: 0%;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            .col2{
                width: 50%;
                display: inline-block;
                margin-top: 50px;
                vertical-align: top;
                background-color: white;
                height: 500px;
                
            }
            h2{
                text-align: left;
                margin: 20px 54px;
                font-size: 30px;
                font-weight: bold;
            }
            img{
                width: 100%;
                height: 500px;
                
                border-radius: 10px 0px 0px 10px;
            }
            input[type=email]
            {
                
                border-color: transparent;
                text-align: left;
                padding-left: 8px;
                font-size: 15px;
                font-weight: bold;
                width: 80%;
                outline:none;
                
            }
            input[type=password]
            {
                outline:none;
                width: 80%;
                border-color: transparent;
                text-align: left;
                padding-left: 8px;
                font-size: 15px;
                font-weight: bold;
                
                
            }
            input[type=submit]
            {
                border: none;
                background:linear-gradient(rgb(78, 32, 78),rgb(233, 93, 217));
                text-align: left;
                
                font-size: 15px;
                font-weight: bold;
                color: white;
                width: 81.5%;
                height: 40px;
                text-align: center;
                margin-left: 20px;
            }
            input[type=button]
            {
                border: none;
                background:linear-gradient(rgb(78, 32, 78),rgb(233, 93, 217));
                text-align: left;
                
                font-size: 15px;
                font-weight: bold;
                color: white;
                width: 81.5%;
                height: 40px;
                text-align: center;
                margin-left: 20px;
            }
            hr{
                margin-left: 20px;
                border: 1px solid rgb(193, 100, 193);
                width: 80%;
                margin-top: 10px;
                
                
            }
            .op{
                background-image: url('image/loginbg.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
            p{
                
                color: gray;
                text-align: center;
                font-size: 15px;
                margin-top: 10px;
            }
            #op1{
                background: linear-gradient(rgb(105, 105, 192),skyblue);
            }
            #op2{
                background: linear-gradient(blue,skyblue);
            }
            #mm{
                margin-left: -4px;
                border-radius: 0px 10px 10px 0px;
            }
            .container{
                height: fit-content;
                margin-top: 20px;
                width:60%;
            }
        </style>
    </head>
    <body class="op">

<?php
        $uname="";
        $upass="";
        $msg="";
        if(isset($_POST['sub']))
        {
            $uname=$_POST['name'];
            $upass=$_POST['pass'];  
        }
    ?>
    <?php
                if(isset($_POST['sub']))
                {
                    if(!empty($uname))
                    {
                        if(!empty($upass))
                        {
                            $flag=0;
                            $servername="Localhost";
                            $username="root";
                            $userpass="";
                            $dbname="project";
                            //create connection
                            $conn = new mysqli($servername,$username,$userpass,$dbname);
                            //check connection
                            if($conn->connect_error)
                            {
                                die("Connection failes : ".$conn->connect_error);
                            }
                            $sql="select * from login where uname='$uname' and upass='$upass';";
                            $result=$conn->query($sql);
                            if($result->num_rows>0)
                            {
                                //outpiut data of each row
                                while($row=$result->fetch_assoc())
                                {
                                    $flag=1;
                                }
                            }
                            $conn->close();
                            if($flag==1)
                            {
                                session_start();
                                $_SESSION["fname"]=$uname;
                                // header("Location : https://www.google.com");
                                header("Location: https://chat.openai.com");
                            }
                            else
                            {
                                $err="invalid user name and password...";
                                echo $err;
                            }
                        }   
                        else
                        {
                            $msg="invalid password...";
                            echo $msg;
                        } 
                    }
                    else
                    {
                        $msg="invalid username password ?";
                        echo $msg;
                    }
                }
                    ?>
        <center>
            <div class="container">
        <div class="col2">
            <img src="image/col2.png" alt="no image">
        </div>
        <div class="col2" id="mm">
            <form action="" method="POST">
                <h2>Sign In</h2><br>
                <input type="email" name="name" value='<?php echo $uname; ?>' placeholder="Email Address" id="email"  required><br>
                <hr><br>
                <input type="password" name="pass" value='<?php echo $upass; ?>' id="pass"  placeholder="Password" required><br>
                <hr><br>
                <input type="submit" name="sub" value="Continue">
                <br>
                <p>Of Connect with Social Media</p>
                <br><br>
                <input type="button" name="ok" value="Sign in with twitter" id="op1">
                <br><br>
                <input type="button" value="Sing in with facebook" id="op2">
                <br>
                <label name="err">
                    <?php
                        echo $msg;
                    ?>
                </label>
                
            </form>
        </div>
        </div>
        </center>
    </body>
</html>