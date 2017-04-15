<?php
$cat=$_GET['cat'];
if($cat!="")
{
	// for delete
	if(isset($_GET['del']))
	{
		$pi=$_GET['del'];//pid
		if(mysqli_query($link,"delete from products where pid='$pi'"))
		{
		unlink("pimages/$pi.jpg");
		echo "<script>alert('Product Deleted');
		location.href='home.php?cat=$cat'</script>"	;
		}
	}
?>
<h2> <?php echo $cat;?> Products</h2>
<?php	
  $sel=mysqli_query($link,"select * from products where cat='$cat'");
 ?>
 <table width="70%" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td>S.no</td>
    <td>Scat</td>
    <td>Brand</td>
    <td>Pname</td>
    <td>Price</td>
    <td>Quan</td>
    <td>Image</td>
    <td>Color</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
 <?php
  if(mysqli_num_rows($sel)>0)
  {
	  $s=1;
	  while($arr=mysqli_fetch_array($sel))
	  {
		extract($arr);
	?>
    <tr>
    <td><?php echo $s;?></td>
    <td><?php echo $scat;?></td>
    <td><?php echo $brand;?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><img src="pimages/<?php echo "$pid.jpg";?>" width=50 height=50/></td>
    <td>&nbsp;</td>
    <td><a href="home.php?edit=<?php echo $pid;?>">Edit</a></td>
    <td><a href="home.php?cat=<?php echo $cat;?>&del=<?php echo $pid;?>">Delete</a></td>
  </tr>
    <?php  
	$s++;
	  }
  }
  else
  {
	  ?>
   <tr>
    <td colspan="10" align="center"> No products</td>
     </tr>   
      <?php
	
  }
}
?>