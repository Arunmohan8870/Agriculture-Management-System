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
				<img src="img/agri2.jpg" class="sha" width='100%' height='500px'>
			
			<div id="section">
				
					<?php include"sidebar.php";?><br><br><br>
					
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
					
				<div class="content">
					
						<h3 >View Export Details</h3><br>
						
						<?php
							if(isset($_GET["mes"]))
								{
									echo"<div class='error'>{$_GET["mes"]}</div>";	
								}
					
						?>
						
						<table border="1px">
							<tr>
								<th>S.No</th>
								<th>Export Area </th>
								<th>Product</th>
                               
								<th>KG</th>
								<th>Delete</th>
							</tr>
							<?php
								$s="select * from export";
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
												<td>{$r["EAREA"]}</td>
												<td>{$r["EPRO"]}</td>
												<td>{$r["KG"]}</td>
												<td><a href='export_delete.php?id={$r["EID"]}' class='btnr'>Delete</a></td>
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