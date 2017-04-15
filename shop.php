<?php
include("admin/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
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
	<?php include('header.php');?>
    <section id="advertisement">
        <div class="container">
            <img src="images/shop/advertisement.jpg" alt="" />
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <?php include('leftsidebar.php');?>
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Featured Items</h2>
                        <?php
                        if($_GET['con']){
                        $cat=$_GET['con'];
                        $sel=mysqli_query($link,"select * from products where cat='$cat'");
                        while($arr=mysqli_fetch_array($sel))
                        {
                        extract($arr);

                        ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="admin/pimages/<?php echo "$pid.jpg";?>" alt="" />
                                            <h2>Rs.<?php echo $price;?></h2>
                                            <p><?php echo $pname;?></p>
                                            <a href="product-details.php?pd=<?php echo $pid;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $price;?></h2>
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
                    <?php   
                        }
                        ?>
                        <?php
                        if($_GET['con1']){
                        $scat=$_GET['con1'];
                        $sel=mysqli_query($link,"select * from products where scat='$scat'");
                        while($arr1=mysqli_fetch_array($sel))
                        {
                        extract($arr1);

                        ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="admin/pimages/<?php echo "$pid.jpg";?>" alt="" />
                                            <h2>Rs.<?php echo $price;?></h2>
                                            <p><?php echo $pname;?></p>
                                            <a href="product-details.php?pd=<?php echo $pid;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $price;?></h2>
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
                    <?php   
                        }
                        ?>
                        <?php
                        if($_GET['con3']){
                        $brand=$_GET['con3'];
                        $sel=mysqli_query($link,"select * from products where brand='$brand'");
                        while($arr2=mysqli_fetch_array($sel))
                        {
                        extract($arr2);

                        ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="admin/pimages/<?php echo "$pid.jpg";?>" alt="" />
                                            <h2>Rs.<?php echo $price;?></h2>
                                            <p><?php echo $pname;?></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $price;?></h2>
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
                    <?php   
                        }
                        ?>

                        <?php
                        if(!$_GET['con'] && !$_GET['con1'] && !$_GET['con3']){
                        include('featured.php');
                         }
                        ?>
                    </div>    
            </div>
        </div>
    </section>
    
    <?php include('footer.php');?>
    

  
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>