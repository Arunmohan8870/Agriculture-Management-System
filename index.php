<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
	   <title>Agriculture Management System - Kodai - UDAY</title>
	   <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body style=" background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(./img/bg.jpg); background-position: center; background-size: cover;background-repeat:no-repeat;">
	<div class="back">
		<?php include"navbar.php";?>
       <h1> Agriculture Management<br>System</h1>
		
		<div class="login">
			<h2 class="heading">ADMIN LOGIN</h2>
			<div class="log">
			<?php
				if(isset($_POST["login"]))
				{
					$sql="select * from admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
					$res=$db->query($sql);  
					if($res->num_rows>0)
					{
						$ro=$res->fetch_assoc();          //fetch data one by one stored array
						$_SESSION["AID"]=$ro["AID"];     // temporarily storing
						$_SESSION["ANAME"]=$ro["ANAME"];
						echo "<script>window.open('admin_home.php','_self');</script>";
					}
					else
					{
						echo "<div class='error'>Invalid Username or Password</div>";
					}
				}
			?>
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>User Name</label><br>
					<input type="text" name="aname" required class="input"><br><br>
					<label>Password </label><br>
					<input type="password" name="apass" required class="input"><br>
					<button type="submit" class="btn" name="login">Login Here</button>
					<a href="http://udayjuniortamil.000webhostapp.com/" class ='uday'>www.udayjuniortamil</a>
				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p>Copyright &copy; kodai - UDAY </p></footer>
		</div>
</div>		
	</body>
</html>