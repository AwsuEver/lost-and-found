
<?php
	
	$fid=$_GET['fid'];
	include "../operate/functionPDO.php";
	$result=delByfind_id($fid);
	
	echo json_encode($result);

?>