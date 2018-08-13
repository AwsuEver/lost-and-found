
<meta charset="utf-8">
<?php

	session_start();

	if(!isset($_SESSION['user'])){
    	header('Refresh:1;url=../control/loginControl.php');
    	echo"请先登录";
    	exit;
     }
    $user_name=$_SESSION['user'];

    if(isset($_POST['sm'])){
    	$text=$_POST['back'];
    	$time=date("Y-m-d");

    	include "../operate/functionPDO.php";
    	$addBack=addBack($user_name,$text,$time);

    	if (key($addBack)){
    		echo $addBack[1];
    	}
    	else{
    		header("Refresh:1; url=../control/VIewbackControl.php");
    		echo "提交成功";
    	}
    }
    else{
    	include "../config.php";
        $Smarty->assign('user_name',$user_name);
        $Smarty->display("../view/Viewback.html");
    }

?>