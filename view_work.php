<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
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
				<img src="img/agri2.jpg" class="sha" width='100%' height='500px'>
			
			<div id="section">
				
					<?php include"sidebar.php";?><br><br><br>
					
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
					
				<div class="content">
					
						<h3 >View Work Date Details</h3><br>
						
						<?php
							if(isset($_GET["mes"]))
								{
									echo"<div class='error'>{$_GET["mes"]}</div>";	
								}
					
						?>
						
						<table border="1px">
							<tr>
								<th>S.No</th>
								<th>Place </th>
								<th>Product</th>
								<th>Admin Name</th>
								<th>Period</th>
								<th>Date</th>
								<th>No.of Workers</th>
								<th>Delete</th>
							</tr>
							<?php
								$s="select * from work";
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
												<td>{$r["WPLACE"]}</td>
												<td>{$r["WPRO"]}</td>
												<td>{$r["ANAME"]}</td>
												<td>{$r["WTYPE"]}</td>
												<td>{$r["WDATE"]}</td>
												<td>{$r["WORKERS"]}</td>
												<td><a href='work_delete.php?id={$r["WID"]}' class='btnr'>Delete</a></td>
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