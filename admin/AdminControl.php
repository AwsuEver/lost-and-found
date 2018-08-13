<meta charset="UTF-8">
<?php
  session_start();

  if(isset($_POST['sm'])){

    $name=$_POST['adminname'];
    $pwd=$_POST['password'];

    include "../operate/functionPDO.php";
    $admin=checkAdmin($name,$pwd);

    if(key($admin)){
      echo $admin['1'];
    }
    else{
      $_SESSION['name']=$name;
      header("Refresh:2; url=../admin/showViewControl.php");
            echo "登录成功请稍候...";
    }
  }
  else{
    include "../admin/adminLogin.html";
  }

?>