<?php
	include"database.php";
	session_start();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Kodai - UDAY</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body>
			<?php include"navbar.php";?><br>
			<div class='admin'>	
				<img src="img/agri2.jpg" class="sha" width='100%' height='500px'><br><br>
			
			<div id="section">
				
				<?php include"sidebar.php";?><br><br><br>
				
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > Add Worker Details</h3><br>
						
					<?php
						if(isset($_POST["submit"]))
						{
							$sq="insert into worker(WNAME,WAGE,WSAL) values('{$_POST["wname"]}','{$_POST["wage"]}','{$_POST["wsal"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed..</div>";
							}
							
						}
						
					?>
					<form method="post" action="">
					     <label>Worker Name</label><br>
					     <input type="text" name="wname" required class="input">
					     <br><br>
					     <label>Age</label><br>
					     <input type="text" name="wage" required class="input">
					     <br><br>
					     <label>Salary</label><br>
					     <input type="text" name="wsal" required class="input">
					     <br><br>
					     <button type="submit" class="btn" name="submit">Add Worker Details</button>
					</form>
				
				
				</div>
				
				
			</div>
					</div>
	
				<?php include"footer.php";?>
	</body>
</html>