<?php
include("conn.php");
extract($_POST);
if(isset($sub))
{
	$id=mysqli_real_escape_string($link,htmlentities(trim($id)));//sql injection
	$pass=mysqli_real_escape_string($link,htmlentities(trim($pass)));//sql injection
	$sel=mysqli_query($link,"select id,pass from admin where id='$id'");
	$arr=mysqli_fetch_array($sel);
	$pass=md5($pass);
	if($id==$arr['id'] && $pass==$arr['pass'])
	{
	   session_start();
	   $_SESSION['sid']=$id;
	   header("location:home.php");	
	}
	else
	{
	$msg="id or pass is not correct";	
	}
}
?>
<form id="form1" name="form1" method="post">
  <table width="34%" border="1" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2"><div align="center"><strong>Login Panel</strong></div></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><?php echo $msg;?></td>
    </tr>
    <tr>
      <td><strong>Id</strong></td>
      <td><strong>
        <input name="id" type="text" required="required" id="id">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Password</strong></td>
      <td><strong>
        <input name="pass" type="password" required="required" id="pass">
      </strong></td>
    </tr>
    <tr>
      <td><strong>
        <input type="checkbox" name="checkbox" id="checkbox">
      </strong></td>
      <td><strong>Remember Me</strong></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <strong>
        <input type="submit" name="sub" id="sub" value="Submit">
      </strong></div></td>
    </tr>
  </table>
</form>
