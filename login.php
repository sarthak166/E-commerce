<?php
include("admin/conn.php");

extract($_POST);
if(isset($sub))
{
	$id=mysqli_real_escape_string($link,htmlentities(trim($id)));//sql injection
	$pass=mysqli_real_escape_string($link,htmlentities(trim($pass)));//sql injection
	$sel=mysqli_query($link,"select id,pass from users where id='$id'");
	$arr=mysqli_fetch_array($sel);
	$pass=md5($pass);
	if($id==$arr['id'] && $pass==$arr['pass'])
	{
	   session_start();
	   $_SESSION['sid']=$id;
	   header("location:index.php");	
	}
	else
	{
		?>
	
	<script>alert('id or pass is not correct');
	location.href='login.php';
	</script>
	<?php
	
	}

}
session_start();
$sid=$_SESSION['sid'];
	if($sid!=""){
		header("location:index.php");
	}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<?php
	include('header.php');
	?>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form method="POST" >
							
							<input type="text" placeholder="Email Address" name="id" required/>
							<input type="password" placeholder="Password" name="pass" required />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							&nbsp;&nbsp;
							<span>
								<a href="forgotpass.php">Forgot Password</a>
							</span>
							<button type="submit" class="btn btn-default" name="sub">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="signup.php" method="post">
							<input type="text" placeholder="Name" name="nam" required />
							<input type="text" placeholder="Email Address" name="id" required />
							<input type="password" placeholder="Password" name="pass" required />
							<input name="captcha" type="text" size="100" placeholder="Enter Captcha here" required></td>
							<img src="captcha.php" float:right /><br><br>
							

							<button type="submit" class="btn btn-default" name="sub">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
		<?php
include('footer.php');
?>
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>