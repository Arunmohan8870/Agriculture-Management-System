<?php
	include"database.php";
	session_start();
			
?>

<!DOCTYPE html>
<html>
	<head>
		<title>kodai-UDAY</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>

	
		<?php include"navbar.php";?><br>
		
	<div class='admin'>	
		<img src="img/agri.jpg"  class="sha" width="100%" height="500px" ><br><br>
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > Agri Information</h3><br>
					<img src="img/agri2.jpg" class="imgs">
					 <p class="para">
					 Apart from its rich coffee plantations, <b>agriculture in Kodaikanal</b> involves cultivation of various fruits and vegetables
					</p>
					
					<p class="para">
					Kodaikanal is one of the largest producers of potatoes in the state. <b>The fruits and vegetables grown in Kodaikanal </b>are in great demand for their freshness and high quality.
					</p> 
				</div>
				
			</div>
			</div>	
		<?php include"footer.php";?>

	</body>
</html>