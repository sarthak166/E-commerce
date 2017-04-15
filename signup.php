<?php
include("admin/conn.php");
session_start();
$sid=$_SESSION['sid'];
	if($sid!=""){
		header("location:index.php");
	}
extract($_POST);

if(isset($sub))
{
	$pass=md5($pass);
	$sel=mysqli_query($link,"select id,pass from users where id='$id' or pass='$pass'");
	if(mysqli_num_rows($sel)>0){
		echo "<script> alert('Id or password already exists');
	 location.href='login.php'</script>"; 
	}
	else{


		if(isset($captcha)&& $captcha!=""&& $_SESSION["code"]==$captcha){
			mysqli_query($link,"insert into users values('$id','$nam','$pass')");
			echo "<script> alert('Register successfully.Please login to continue');
	 location.href='login.php'</script>";
		}
		else{
				echo "<script> alert('Please enter correct captcha.');
	 location.href='login.php'</script>"; 
		}
	}
}
else{
	echo "no";
}
?>

