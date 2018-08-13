<meta charset="utf-8">
<?php

	session_start();

	if(!isset($_SESSION['name'])){
    	header('Refresh:2;url=../admin/AdminControl.php');
    	echo"请先登录";
    	exit;
     }

	$name=$_SESSION['name'];

	include "../operate/functionPDO.php";
	$result=ShowView();
	//var_dump($result);
	include "../config.php";
	$Smarty->assign('name',$name);
    $Smarty->assign('result',$result);
    $Smarty->display("../view/showView.html");


?>