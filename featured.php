<?php
$sel=mysqli_query($link,"select * from products order by dat desc limit 6 offset 15");
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
											<a href="product-details.php?pd=<?php echo $pid;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Rs.<?php echo $price;?></h2>
												<p><?php echo $pname;?></p>
												<a href="product-details.php?pd=<?php echo $pid;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
						<?php
					}
					?>