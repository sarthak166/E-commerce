<?php
include('admin/conn.php');
session_start();
$sid=$_SESSION['sid'];
$sel=mysqli_query($link,"select * from cart where sid='$sid'");
if($sid==""){
	header('location:login.php');
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<?php
	include('header.php');
	?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<form action="update.php"method="post">
					<?php
					
  if(mysqli_num_rows($sel)>0)
  {
	  $s=1;
	  $gt=0;
	while($arr=mysqli_fetch_array($sel))
	  {
		  $q=$arr['quan'];
		  $pid=$arr['pid'];
	$sel1=mysqli_query($link,"select pname,price from products where pid='$pid'");
	$arr1=mysqli_fetch_array($sel1);
	$pr=$arr1['price'];
	$pn=$arr1['pname'];
	$tot=$q*$pr;
	$gt+=$tot;
		?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="admin/pimages/<?php echo "$pid.jpg";?>" alt="" height="200px"></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $pn;?></a></h4>
								<p><?php echo $pid;?></p>
							</td>
							<td class="cart_price">
								<p>Rs.<?php echo $pr;?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $q;?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Rs.<?php echo $tot;?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="delete.php?del=<?php echo $pid;?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php
					}
				}
				else{

					?>
					<tr>
					<td colspan="4" align="center">
					Empty Cart
					 </td>
     </tr>
    <?php  
  }
  ?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container" >
			
			
				<div class="col-sm-6" >
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>Rs.<?php echo $gt;?></span></li>
							<li>Eco Tax <span>No Tax</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>Rs.<?php echo $gt;?></span></li>
						</ul>
						<input type="submit" name="submit" class="btn btn-default update" value="Update">
							
							<a class="btn btn-default check_out" href="checkout.php">Check Out</a>
					</div>
					
					</form>
					
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	<?php
include('footer.php');
?>
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php
}
?>