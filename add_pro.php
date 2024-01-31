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
					
						<h3 > Add Product Details</h3><br>
						<?php
							if(isset($_POST["submit"]))
							{
								$sq="insert into product(PNAME) values ('{$_POST["pname"]}')";
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
						   <label>Product Name</label><br>
						   <input type="text" name="pname" required class="input">
						   <button type="submit" class="btn" name="submit">Add Product Details</button>
						</form>
				
				
					</div>
				
				
				<div class="boxx" >
					<h3 style="margin-top:30px;"> Products Details</h3><br>
				
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Product Name</th>
							<th>Delete</th>
						</tr>
						<?php
							$s="select * from product";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>
										<td>{$i}</td>
										<td>{$r["PNAME"]}</td>
										<td><a href='pro_delete.php?id={$r["PID"]}' class='btnr'>Delete</a></td>
										</tr>
									
									";
									
								}
								
							}
							else
							{
								echo "No Record Found";
							}
						?>
						
					</table>
				</div>
			</div>
						</div>
	
				<?php include"footer.php";?>
	</body>
</html>