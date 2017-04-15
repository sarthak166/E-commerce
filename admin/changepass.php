<?php
extract($_POST);
if(isset($sub))
{
  $sel=mysqli_query($link,"select pass from admin where id='$sid'");
  $arr=mysqli_fetch_array($sel);
  $op=md5($op);
  if($op==$arr['pass'])
  {
	  if($np==$cp)
	  {
		  $np=md5($np);
	mysqli_query($link,"update admin set pass='$np' where id='$sid'");
	$msg="Password Changed";
	  }
	  else
	  {
		$msg="np and cp are not match";  
	  }
  }
  else
  {
	$msg="Enter correct op";  
  }
}
?>
<form name="form1" method="post" action="">
  <table width="27%" border="1" cellspacing="5" cellpadding="5">
    <tr>
      <td colspan="2"><strong>Change Password</strong></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><?php echo $msg;?></td>
    </tr>
    <tr>
      <td><strong>Op</strong></td>
      <td><strong>
        <input name="op" type="password" required id="op">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Np</strong></td>
      <td><strong>
        <input name="np" type="password" required id="np">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Cp</strong></td>
      <td><strong>
        <input name="cp" type="password" required id="cp">
      </strong></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><strong>
        <input type="submit" name="sub" id="sub" value="Submit">
      </strong></div></td>
    </tr>
  </table>
</form>
