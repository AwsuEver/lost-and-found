
<meta charset="UTF-8">
<?php
  session_start();

  $user_name=$_SESSION['user'];
  $fid=$_GET['id'];
  if(isset($_POST['sm'])){

    $time=$_POST["time"];
    $area=$_POST["area"];
    $opation=$_POST["opation"];
    $describe=$_POST["describe"];

    include "../operate/functionPDO.php";
    $update=update($fid,$time,$describe,$opation,$area);

    if(key($update)){
      echo $update[1];
    }
    else{
      header("Refresh:1; url=../control/MyControl.php");
      echo "修改成功...";
    }
 }
  else{
      include "../operate/functionPDO.php";
      $result=ShowByFid($fid);
      //var_dump($result);
      include "../config.php";
      $Smarty->assign('result',$result);
      $Smarty->assign('user_name',$user_name);
      $Smarty->display("../view/change.html");
  }

?>
