<?php
 include "database.php";
 $sq = "delete from export where EID = {$_GET['id']}";
 $db->query($sq);

 echo "<script>window.open('view_export.php?mes=Data Deleted.','_self');</script>"
?>

?>