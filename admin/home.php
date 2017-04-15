<?php
include("conn.php");
session_start();
$sid=$_SESSION['sid'];
//blank session
if($sid=="")
{
    header("location:index.php");	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/a.css" rel="stylesheet"/>
</head>

<body>
<div class="main">
  <div class="header">Admin Panel</div>
  <div class="menu">
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="home.php?con=cp">Change Pass</a></li>
      <li><a href="logout.php">Logout</a></li>
      <li> Welcome : <?php echo $sid;?></li>
    </ul>
  </div>
  <div class="container">
    <div class="left">
      <ul>
        <li><a href="home.php?con=ac">Add Cat</a></li>
        <li><a href="home.php?con=ap">Add Products</a></li>
        <li><a href="home.php?con=up">Up Pro</a></li>
        <li><a href="#">Feedback</a></li>
        <li><a href="#">Orders</a></li>
      </ul>
    </div>
    <div class="right">
    <?php
	if($_GET['cat'])
	{
	include("cat_pro.php");	
	}
	if($_GET['edit'])
	{
	include("editpro.php");	
	}
	switch($_GET['con'])
	{
	case 'cp' : include("changepass.php");
	            break;	
	case 'ac' : include("addcat.php");
	            break;
	case 'ap' : include("addpro.php");
	            break;
	case 'up' : include("up.php");
	            break;
	}
	?>
    
    </div>
  </div>
</div>
</body>
</html>