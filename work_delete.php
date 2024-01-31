<?php
	include"database.php";
	
	session_start();
	
	$s="delete from work where WID={$_GET["id"]}";

	$db->query($s);

	echo "<script>window.open('view_work.php?mes=Data Deleted.','_self');</script>"
?>