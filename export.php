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
 
				<?php
                if(isset($_POST['submit'])){
                  $seq = "insert into export(EAREA,EPRO,KG) values('{$_POST['ex']}','{$_POST['pro']}','{$_POST['kg']}')";
				 
				  if($db->query($seq))
					{
						echo "<div class='success'>Insert Success..</div>";
					}
					else
					{
						echo "<div class='error'>Insert failed..</div>";
					}
				}

                ?>

				<div class="content">
				<h3 >Export Details</h3><br>
					<form  method="post" action="">
					<div class="lbox1">	
						<label>Export Area</label><br>
					<select name="ex" required class="input3">
				     <option value="">Select</option>
					 <option value="Madurai">MADURAI</option>
					 <option value="Bangalur">BANGALORE</option>
					 <option value="Coimbatore">COIMBATORE</option>
					 <option value="Chennai">CHENNAI</option>
					</select>
					<br><br>
						
				</div>
				<div class="rbox">
					<label>Product</label><br>
						<select name="pro" required class="input3">
				
						<?php 
							 $sql="SELECT * FROM product";
							 $re=$db->query($sql);
								if($re->num_rows>0)
									{
										echo"<option value=''>Select</option>";
										while($r=$re->fetch_assoc())
										{
											echo "<option value='{$r["PNAME"]}'>{$r["PNAME"]}</option>";
										}
									}
						?>
					
					</select><br><br>
					<label>KG</label><br>
					<input type="text" name="kg" class="input3">
				</div>
					<button type="submit" class="btn" name="submit"> View Details</button>
				
						
					</form>
					<br>
					
				</div>
				
				
			</div>
								</div>
	
				<?php include"footer.php";?>
	</body>
</html>