<?php
extract($_POST);
if(isset($sub))
{
  $pid="Ecom".rand();
  if(mysqli_query($link,"insert into products values('$pid','$cat','$scat','$brand','$pname','$mod',$price,$quan,'$color','$feat',NOW())"))
  {
	move_uploaded_file($_FILES['att']['tmp_name'],"pimages/$pid.jpg");
	 $msg="Product Added";  
  }
  else
  {
	$msg="Already exists";  
  }
}
?>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="32%" border="1" cellspacing="5" cellpadding="5">
    <tr>
      <td colspan="2"><div align="center">Add Products</div></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><?php echo $msg;?></td>
    </tr>
    <tr>
      <td>CAtegory</td>
      <td>
      <select name="cat" id="cat">
       <?php
	    $sel=mysqli_query($link,"select cname from category");
		while($arr=mysqli_fetch_array($sel))
		{
			?>
         <option value="<?php echo $arr['cname'];?>"><?php echo $arr['cname'];?></option>
            <?php
		}
		?>
      </select>
      </td>
    </tr>
    <tr>
      <td>Scat</td>
      <td><input name="scat" type="text" required="required" id="scat"></td>
    </tr>
    <tr>
      <td>Brand</td>
      <td><input name="brand" type="text" required="required" id="brand"></td>
    </tr>
    <tr>
      <td>Pname</td>
      <td><input name="pname" type="text" required="required" id="pname"></td>
    </tr>
    <tr>
      <td>Model</td>
      <td><input name="mod" type="text" required="required" id="mod"></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><input name="price" type="text" required="required" id="price"></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quan" type="text" required="required" id="quan"></td>
    </tr>
    <tr>
      <td>Color</td>
      <td><input name="color" type="text" required="required" id="color"></td>
    </tr>
    <tr>
      <td>Features</td>
      <td><textarea name="feat" cols="45" rows="5" required="required" id="feat"></textarea></td>
    </tr>
    <tr>
      <td>Image</td>
      <td><input name="att" type="file" required="required" id="att"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="sub" id="sub" value="Submit">
      </div></td>
    </tr>
  </table>
</form>
