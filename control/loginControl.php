<meta charset="utf-8">
<?php
    session_start();
    
    if(isset($_POST['sm'])){
        
    	include "../operate/functionPDO.php";
		$user=$_POST['user'];
    	$pwd=$_POST['password'];
    	$check=checkUser($user,$pwd);
    	if(key($check)){	
            echo $check['1'];
    	}
    	else{
            $_SESSION['user']=$user;
    		header("Refresh:1; url=../control/IndexControl.php");
            echo "正在登录请等待...";

    	}
    }
    else{
    	
        include "../view/Login.html";
    }

?>