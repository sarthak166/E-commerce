<?php
$cat=$_GET['con'];
$sel=mysqli_query($link,"select * from products where cat='$cat'");
?>
						<?php
						while($arr=mysqli_fetch_array($sel))
						{
							extract($arr);
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="admin/pimages/<?php echo "$pid.jpg";?>" alt=""  />
											<h2>Rs.<?php echo $price;?></h2>
											<p><?php echo $pname;?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $price;?></h2>
												<p><?php echo $pname;?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
						<?php
					}
					?>