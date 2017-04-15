<?php
extract($_POST);
 if(isset($sub))
 {
	if(mysqli_query($link,"insert into category values('$cn',NOW())"))
	{
		move_uploaded_file($_FILES['att']['tmp_name'],"cimages/$cn.jpg");
		$msg="Category Added";
	}
	else
	{
	   $msg="Already exists";	
	}
 }
?>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="25%" border="1" cellspacing="5" cellpadding="5">
    <tr>
      <td colspan="2"><div align="center"><strong>Add Category</strong></div></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><?php echo $msg;?></td>
    </tr>
    <tr>
      <td><strong>Category</strong></td>
      <td><strong>
        <input name="cn" type="text" required id="cn">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Image</strong></td>
      <td><strong>
        <input name="att" type="file" required id="att">
      </strong></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><strong>
        <input type="submit" name="sub" id="sub" value="Submit">
      </strong></div></td>
    </tr>
  </table>
</form>
