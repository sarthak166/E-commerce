

<?php
include('admin\conn.php');
$sel=mysqli_query($link,"select cname from category");
$sel2=mysqli_query($link,"select DISTINCT brand from products");

?>
<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<?php
						while($arr=mysqli_fetch_array($sel))
						{
						?>					
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $arr['cname'];?>">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											  
												
													
													<a href="shop.php?con=<?php echo $arr['cname'];?>"><?php echo $arr['cname'];?></a>
													
												
										</a>
									</h4>
								</div>
								
								<div id="<?php echo $arr['cname'];?>" class="panel-collapse collapse">

									<div class="panel-body">
										<ul>

											<?php
											$cat=$arr['cname'];
											$sel1=mysqli_query($link,"select DISTINCT scat from products where cat='$cat'");
											while($arr1=mysqli_fetch_array($sel1))
											{
											?>
											<li><a href="shop.php?con1=<?php echo $arr1['scat'];?> "><?php echo $arr1['scat'];?> </a></li>
											<?php
											}
											?>

											
											
										</ul>
									</div>
								</div>
							</div>
							<?php
						}
						?>
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<?php
									while($arr2=mysqli_fetch_array($sel2))
									{
									?>
									<li><a href="shop.php?con3=<?php echo $arr2['brand'];?>"> <span class="pull-right"></span>
									<?php echo $arr2['brand'];?>
									</a></li>
									<?php
								}
								?>
									
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">Rs.500</b> <b class="pull-right">Rs.6000</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>