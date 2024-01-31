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
					
					<div class="content1">
					
						<h3 > View Workers Details</h3><br>
						<form id="frm" autocomplete="off">
							<input type="text" id="txt" class="input">
						</form>
						<br>
						<div id="box"></div>
						
					</div>	
				</div>
</div>
				
				
			<?php include"footer.php";?>
			
			<script>
				$(document).ready(function(){
					$("#txt").keyup(function(){
						var txt=$("#txt").val();
						if(txt!="")
						{
							$.post("search.php",{s:txt},function(data){
								$("#box").html(data);
							});
						}
						
					});
					
					
					
				});
			</script>
			
	</body>
</html>