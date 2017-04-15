<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
						<?php
							if ($r = mysqli_query($link,"select * from products limit 3")) {
    										$count = 0;
    										while ($row = mysqli_fetch_array($r)){
    											extract($row);
        									if ($count == 0){?>
							<div class="item active">
							<?php
						}
        						else { ?>
           					 <div class="item">
        							<?php
        							}
        							?>
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Your one stop for everything</h2>
									<p><?php echo $pname;?> </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="admin/pimages/<?php echo "$pid.jpg";?>" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
							     <?php
        						
       							 $count++;
    								}
								}
								?>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	