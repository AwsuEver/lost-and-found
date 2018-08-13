
<?php

	session_start();
	include "../operate/functionPDO.php";
	$result=ShowGoods();
	
	include "../config.php";
    $Smarty->assign('result',$result);
    $Smarty->display("../view/Index.html");


?>