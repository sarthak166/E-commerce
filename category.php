<?php
include("admin/conn.php");
$sel=mysqli_query($link,"select distinct scat from products limit 5");
?>
<div class="category-tab"><!--category-tab-->
							
						<div class="col-sm-12">

							<ul class="nav nav-tabs">
							<?php
							$i=0;
							while($arr=mysqli_fetch_array($sel))
							{
								$scat1=$arr['scat'];
								$scat1=str_replace(' ', '', $scat1);

								if($i==0){
							?>
								<li class="active"><a href="#<?php echo $scat1;?>" data-toggle="tab"><?php echo $arr['scat'];?></a></li>
								
								<?php
								
							}
							else{
								?>
								<li><a href="#<?php echo $scat1;?>" data-toggle="tab"><?php echo $arr['scat'];?></a></li>
							<?php
						}
							?>
							<?php
							$i++;
						}
						mysqli_data_seek($sel,0);
						?>
						</ul>
							
							
							<div class="tab-content">
						<?php
						$j=0;
						

							while($arr2=mysqli_fetch_array($sel))
							{
								$scat=$arr2['scat'];
								$scat2=$arr2['scat'];
								$scat2=str_replace(' ', '', $scat2);
								

						if($j==0)
						{
							?>

							<div class="tab-pane fade active in" id="<?php echo $scat2;?>" >
							<?php
							
						}
						else{?>
						<div class="tab-pane fade" id="<?php echo $scat2;?>" >
						<?php
					}
					
							
							
								
								
							$sel1=mysqli_query($link,"select * from products where scat='$scat' limit 4");
							while($arr1=mysqli_fetch_array($sel1))
							{
								extract($arr1);			
							
							?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="admin/pimages/<?php echo "$pid.jpg";?>" alt="" />
												<h2>Rs.<?php echo $price;?></h2>
												<p><?php echo $pname;?></p>
												<a href="product-details.php?pd=<?php echo $pid;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
											</div>
											
										</div>
									</div>
								</div>
							
							
								<?php
							}
							$j++;
							?>
							</div>
						<?php
					
						
					}
							?>
								
							

							

							
								
							
						</div>

						
							
						</div>
					</div><!--/category-tab-->