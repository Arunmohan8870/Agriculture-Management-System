<div class="sidebar"><br>
<h3 class="text">Dashboard</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">Agri Information</a></li>
			<li class="li"><a href="add_place.php"> Places</a></li>
			<li class="li"><a href="add_pro.php"> Products</a></li>
			<li class="li"><a href="add_worker.php"> Worker</a></li>
			<li class="li"><a href="view_worker.php">View Worker</a></li>
			<li class="li"><a href="set_work.php">Set Work</a></li>
			<li class="li"><a href="view_work.php">View work</a></li>
			<li class="li"><a href="export.php">Export</a></li>
			<li class="li"><a href="view_export.php">View Export</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		';
	}
?>
</ul>
</div>