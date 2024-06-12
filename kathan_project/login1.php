<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<HTML>
<HEAD>
<TITLE>Login</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="user-registration.php">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<?php
        $uname="";
        $upass="";
        $msg="";
        if(isset($_POST['submit']))
        {
            $uname=$_POST['uname'];
            $upass=$_POST['upass'];  
        }
    ?>
    <?php
                if(isset($_POST['submit']))
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
                                header("Location: login.php");
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

					<div class="signup-heading">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="uname"
								id="user-name" value='<?php echo $uname; ?>'>
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="upass" id="login-password" value='<?php echo $upass; ?>' >
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="submit"
							id="login-btn" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>
