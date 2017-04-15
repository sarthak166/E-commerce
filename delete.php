<?php
include('admin/conn.php');
$del=$_GET['del'];
session_start();
$sid=$_SESSION['sid'];
if($sid==""){
	header('location:login.php');
}
if($del!=""){
if(mysqli_query($link,"delete from cart where pid='$del' and sid='$sid' ")){
header('location:cart.php');

}
}
else{
	header('location:cart.php');

}

?>