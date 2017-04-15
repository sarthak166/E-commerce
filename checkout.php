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
    <title>Checkout | E-Shopper</title>
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
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			<div class="checkout-options">
				<h3>New User</h3>
				<p>Checkout options</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Register Account</label>
					</li>
					<li>
						<label><input type="checkbox"> Guest Checkout</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Cancel</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form action=placeorders.php method="post">
									
									<input type="text" placeholder="Email*" name="email" required>
									
									<input type="text" placeholder="First Name *" name="fn" required>
									
									<input type="text" placeholder="Last Name *" name="ln" required>
									<input type="text" placeholder="Address 1 *" name="address" required>
									<input type="text" placeholder="Zip / Postal Code *" name="postal" required>
								
							</div>
							<div class="form-two">
								
									
									<select name="country" required=>
										<option>-- Country --</option>
										<option value="United States">United States</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="UK">UK</option>
										<option value="India">India</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Ukraine">Ukraine</option>
										<option value="Canada">Canada</option>
										<option value="Dubai">Dubai</option>
									</select>
									<br><br>
									<select name="state" required>
										<option>-- State / Province / Region --</option>
										<option value="Punjab">Punjab</option>
										<option value="Maharashtra">Maharashtra</option>
										<option value="Gujarat">Gujarat</option>
										<option value="Rajasthan">Rajasthan</option>
										<option value="Bihar">Bihar</option>
										<option value="Tamil Nadu">Tamil Nadu</option>
										<option value="Karnataka">Karnataka</option>
										<option value="Madhya Pradesh">Madhya Pradesh</option>

									</select>
									<br><br>
									
									
									<input type="text" placeholder="Mobile Phone" name="phone" required>
									
									
							
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Shipping Order</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16" required></textarea>
							<br>
									<button type="submit" class="btn btn-default" name="sub">Place order</button>
						</div>	
						</form>
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
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
								<p><?php echo $pr;?></p>
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
					echo "<script> alert('Please add some items to cart.');
	 location.href='shop.php'</script>";
	}
					?>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>Rs.<?php echo $gt;?></td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>No Tax</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>Rs.<?php echo $gt;?></span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

	

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