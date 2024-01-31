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
						<h3 >Set Work Time Table Details</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							 $edate=$_POST["da"].'-'.$_POST["mo"].'-'.$_POST["ye"]; 
							
							$sq="insert into work(ANAME,WTYPE,WDATE,WORKERS,WPLACE,WPRO) values ('{$_POST["aname"]}','{$_POST["wtype"]}','{$edate}','{$_POST["ses"]}','{$_POST["pla"]}','{$_POST["pro"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed</div>";
							}
						}
					?>
			
					<form method="post" action="">
					
					<div class="lbox">
						<label> Admin Name</label><br>
							<input type="text" class="input3" name="aname"><br><br>
						<label> Select Period</label><br>
							<select name="wtype" required class="input3">
						       <option value="">Select</option>
						       <option value="I-Period">I-Period</option>
						       <option value="II-Period">II-Period</option>
						       <option value="III-Period">III-Period</option>
							</select>
					<br><br>			
					<label> Work Date</label><br>					
					<select name="da" class="input5">
						<option value="">Date</option>
						<option value="1">1 </option>
						<option value="2">2 </option>
						<option value="3">3 </option>
						<option value="4">4 </option>
						<option value="5">5 </option>
						<option value="6">6 </option>
						<option value="7">7 </option>
						<option value="8">8 </option>
						<option value="9">9 </option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select>
					<select name="mo" class="input5">
						<option> Month</option>
						<option value="01">Jan</option>
						<option value="02">Feb</option>
						<option value="03">Mar</option>
						<option value="04">Apr</option>
						<option value="05">May</option>
						<option value="06">Jun</option>
						<option value="07">Jul</option>
						<option value="08">Aug</option>
						<option value="09">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
					</select>
					<select name="ye" class="input5">
						<option value="">Select Year</option>
						<option value="2018">2023</option>
						<option value="2017">2022</option>
						<option value="2016">2021</option>
						<option value="2015">2020</option>
						<option value="2014">2019</option>
						<option value="2013">2018</option>
						<option value="2012">2017</option>
						<option value="2011">2016</option>
						<option value="2010">2015</option>
						<option value="2009">2014</option>
						<option value="2008">2013</option>
					
					</select>
				</div>
				
				<div class="rbox">
					<label>No.of Workers</label>
						<select name="ses" required class="input3">
							<option value="">Select</option>
							<option value="2">2</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="10">10</option>
							<option value="15">15</option>
						
						</select>
					<br><br>
					
					
					<label>Place</label>
					<select name="pla" required class="input3">
						<?php
							$sl="select DISTINCT(PNAME) from places";
							$r=$db->query($sl);
							if($r->num_rows>0)
							{
								echo 	"<option value=''>Select</option>";
								while($ro=$r->fetch_assoc())
								{
									echo "<option value='{$ro["PNAME"]}'>{$ro["PNAME"]}</option>";
								}
								
							}
						?>	
						
					</select>
					
					<br><br>
					
					
					<label>Product</label><br>
					<select name="pro" required class="input3">
						<?php
							$s="select * from product";
							$re=$db->query($s);
							if($re->num_rows>0)
							{
								echo "<option value=''>select</option>";
								while($r=$re->fetch_assoc())
								{
									echo "<option value='{$r["PNAME"]}'>{$r["PNAME"]}</option>";
								}
							}
						?>
						
					</select>
					<br><br>
				</div>
					<button type="submit" class="btn" name="submit">Add Work Details</button>
				</form>
				
				
				</div>
				
				
			</div>
						</div>
	
				<?php include"footer.php";?>
	</body>
</html>