
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style = "
background-image: linear-gradient(to top, #feada6 0%, #f5efef 100%);
">
<div class="navbar">

<ul class="list">
	<b style="color:white;float:left;line-height:50px;margin-left:10px;">
	Agriculture Management System</b>
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
	
			<li><a href="admin_home.php">Admin Home</a></li>
	        <li><a href="change_pass.php">Settings</a></li>
	         <li><a href="logout.php">Logout</a></li>
		';
	}
	else{
		echo'
		
		<li><a href="index.php">Admin</a></li>
	    <li><a href="about.php">About Kodai</a></li>
	    <li><a href="contact.php">Contact Us</a></li>';
	}
?>
	
</ul>
</div>
</body>
</html>
	