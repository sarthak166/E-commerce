<?php
include('admin/conn.php');
extract($_POST);
session_start();
$sid=$_SESSION['sid'];

if($sid==""){
	header('location:login.php');
}
else{
	if(isset($sub)){
	$sel=mysqli_query($link,"select * from cart where sid='$sid'");
	while($arr=mysqli_fetch_array($sel)){
		$pid=$arr['pid'];
		$quan=$arr['quan'];
		$orderid="Order".rand();
		
	if(mysqli_query($link,"insert into orders values('$sid','$pid',$quan,'$email','$fn','$ln','$address',$postal,'$country','$state','$phone','$message','$orderid')")){

	echo "<script> alert('Your order has been placed.');
	 location.href='myorders.php'</script>";
	 mysqli_query($link,"delete from cart where sid='$sid'");
	 mysqli_query($link,"update products set quan=quan-$quan where pid='$pid'");
	}
	else{
		echo "<script> alert('You have already placed order for this product.');
	 location.href='cart.php'</script>";
	}
}
}
}
?>