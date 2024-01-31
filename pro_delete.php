<?php
	include"database.php";
	
	session_start();
	
	$s="delete from product where PID={$_GET["id"]}";

	$db->query($s);

	echo "<script>window.open('add_pro.php?mes=Data Deleted.','_self');</script>"
?>