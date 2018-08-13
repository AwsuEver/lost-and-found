
<meta charset="UTF-8">
<?php
  session_start();

  if(!isset($_SESSION['user'])){
    header('Refresh:1;url=../control/loginControl.php');
    echo"请先登录";
    exit;
      }
  else{
	  	  $user_name=$_SESSION['user'];
	  	  include "../operate/functionPDO.php";
	  	  $result=ShowMy($user_name);
	  	  //var_dump($result);
	      include "../config.php";
	      $Smarty->assign('user_name',$user_name);
	      $Smarty->assign('result',$result);
	      $Smarty->display("../view/My.html");
  }

?>
