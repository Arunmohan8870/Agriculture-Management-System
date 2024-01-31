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
		 <img src="img/agri1.jpg" class="sha"width='100%' height='500px' ><br><br>
			<div id="section">
				<?php include"sidebar.php";?><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > Add Place Details</h3><br>
					<?php
						if(isset($_POST["submit"])) // isset is a variable set or not
						{
							 $sq="insert into places(PNAME,PWORKER) values('{$_POST["pname"]}','{$_POST["wor"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert failed..</div>";
							}
							
							
						}
					
					?>
						
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>Place Name</label><br>
				<select name="pname"  required class="input2">
						<option value="">Select</option>
						<option value="Poondi">POONDI</option>
						<option value="Keel Street">KEEL STREET</option>
						<option value="Kavunji">KAVUNJI</option>
						<option value="Mel pallam">MEL PALLAM</option>
						<option value="Vayal">VAYAL</option>
						<option value="Mannavanur">MANNAVANUR</option>
						<option value="Middel Street">MIDDEL STREET</option>
						<option value="Poondi Dam">POONDI DAM</option>
					
						
					</select><br><br>
					<label>No.of Workers </label><br>
					<select name="wor"  required class="input2">
						<option value="">Select</option>
						<option value="-">-</option>
						<option value="2">2</option>
						<option value="4">4</option>
						<option value="8">8</option>
						<option value="10">10</option>
						<option value="13">13</option>
						<option value="20">20</option>
					
					</select>
					<br>
					<button type="submit" class="btn" name="submit">Add Place Details</button>
				</form>
				
				
				</div>
				
				
				<div class="tbox">
					<h3 > Place Details</h3><br>
					 <?php
						 if(isset($_GET["mes"]))
						 {
						 	echo"<div class='error'>{$_GET["mes"]}</div>";	
						 }
					
					?>
					 <table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Place</th>
							<th>No.of Workers</th>
							<th>Delete</th>
						</tr>
						<?php
							$s="select * from places";
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
											<td>{$r["PWORKER"]}</td>
											<td><a href='delete.php?id={$r["PID"]}' class='btnr'>Delete</a></td>
										</tr>
										";
									
								}
								
							}
						?>
					
					</table>
				</div>
			</div>
			</div> 
	
				<?php include"footer.php";?>
            
	</body>
</html>