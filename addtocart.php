<?php
include('admin/conn.php');
session_start();
$sid=$_SESSION['sid'];
extract($_POST);

if($sid==""){
	header('location:login.php');
}
else{
if(isset($cart)){


	if(mysqli_query($link,"insert into cart values('$sid','$pi',$quantity)"))
	{
				echo "<script> alert('Successfully added to cart');
	 location.href='shop.php'</script>"; 
	}
	else{
		echo "<script> alert('You have already added this product to cart');
	 location.href='shop.php'</script>"; 
	}


}
else{
	header('location:shop.php');
}
}
?>
