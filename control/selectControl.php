
<?php

	$option=$_GET['id'];
	//var_dump($option);
	include "../operate/functionPDO.php";
	$result=ShowByselect($option);
	
	include "../config.php";
    $Smarty->assign('result',$result);
    $Smarty->display("../view/selectIndex.html");

?>