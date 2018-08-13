
<meta charset="UTF-8">
<?php
  session_start();
  //$user_name=$_SESSION['user'];
  if(!isset($_SESSION['user'])){
    header('Refresh:1;url=../control/loginControl.php');
    echo"请先登录";
    exit;
      }
  $user_name=$_SESSION['user'];
  if(isset($_POST['sm'])){

	  $org=$_FILES['upfile']['tmp_name'];
    $des='../img/'.$_FILES['upfile']['name'];
    move_uploaded_file($org,$des);

    $img=$des;
    $time=$_POST["time"];
    $area=$_POST["area"];
    $opation=$_POST["opation"];
    $describe=$_POST["describe"];
    $lost_find="丢失";
    include "../operate/functionPDO.php";
    $addGoods=addGoods($user_name,$time,$describe,$opation,$area,$img,$lost_find);

    if(key($addGoods)){
      echo $addGoods[1];
    }
    else{
      header("Refresh:1; url=../control/LostControl.php");
      echo "提交成功...";
    }
  }
  else{
      include "../config.php";
      $Smarty->assign('user_name',$user_name);
      $Smarty->display("../view/Lost.html");
  }

?>
