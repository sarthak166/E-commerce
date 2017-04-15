<?php
$_
?>
<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<?php
								$a=0;
								$off=0;
								$count = 0;
								while($a!=3){
									
							 $r = mysqli_query($link,"select * from products where scat='$scat' limit 3 offset $off");
    										$z=0;
    										
        									if ($count==0){?>
							<div class="item active">
							<?php
						}	
						else { ?>
           					 <div class="item">
        							<?php
        							}
        							while ($row = mysqli_fetch_array($r)){
    											
    											
    											extract($row);
        							?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="admin/pimages/<?php echo "$pid.jpg";?>" alt="" />
													<h2><?php echo $price;?></h2>
													<p><?php echo $pname;?></p>
													<a href="product-details.php?pd=<?php echo $pid;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
												</div>
												
											</div>
										</div>
									</div>

							     <?php
        						
       							 
    								}
    								
    								
    								?>
    								</div>
								<?php 
								$count++;
								$off=$off+3;
								$a++;
							}
								?>
									
								
								
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->