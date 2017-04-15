<?php
$pi=$_GET['edit'];
$sel=mysqli_query($link,"select * from products where pid='$pi'");
$arr=mysqli_fetch_array($sel);
extract($arr);
?>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="32%" border="1" cellspacing="5" cellpadding="5">
    <tr>
      <td colspan="2"><div align="center">Edit Products</div></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><?php echo $msg;?></td>
    </tr>
    
    <tr>
      <td>Scat</td>
      <td><input name="scat" type="text" required id="scat" value="<?php echo $scat;?>"></td>
    </tr>
    <tr>
      <td>Brand</td>
      <td><input name="brand" type="text" required id="brand" value="<?php echo $brand;?>"></td>
    </tr>
    <tr>
      <td>Pname</td>
      <td><input name="pname" type="text" required id="pname" value="<?php echo $pname;?>"></td>
    </tr>
    <tr>
      <td>Model</td>
      <td><input name="mod" type="text" required id="mod"></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><input name="price" type="text" required id="price"></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quan" type="text" required id="quan"></td>
    </tr>
    <tr>
      <td>Color</td>
      <td><input name="color" type="text" required id="color"></td>
    </tr>
    <tr>
      <td>Features</td>
      <td><textarea name="feat" cols="45" rows="5" required id="feat"></textarea></td>
    </tr>
    <tr>
      <td>Image</td>
      <td><input name="att" type="file" required id="att"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="sub" id="sub" value="Submit">
      </div></td>
    </tr>
  </table>
</form>
