<?php
	include"database.php";
	
	session_start();
	
	$s="delete from places where PID={$_GET["id"]}";

	$db->query($s);

	echo "<script>window.open('add_place.php?mes=Data Deleted.','_self');</script>"
?>