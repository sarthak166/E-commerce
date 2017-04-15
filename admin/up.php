<h2>Categories</h2>
<ul>
<?php
	    $sel=mysqli_query($link,"select cname from category");
		while($arr=mysqli_fetch_array($sel))
		{
			?>
        <li><a href="home.php?cat=<?php echo $arr['cname'];?>">
		<?php echo $arr['cname'];?></a>
        </li>
        <?php
		}
		?>
</ul>