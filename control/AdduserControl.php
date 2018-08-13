<meta charset="UTF-8">
<?php

  if(isset($_POST['sm'])){

    $user=$_POST["user"];
    $pwd=$_POST["password"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];

    include "../operate/functionPDO.php";
    $addUser=addUser($user,$pwd,$email,$phone);

    if(key($addUser)){
      echo $addUser[1];
    }
    else{
      header("Refresh:1; url=../control/loginControl.php");
            echo "注册成功请登录...";
    }
  }
  else{
    include "../view/Adduser.html";
  }

?>