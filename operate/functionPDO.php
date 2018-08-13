<?php

//用户注册
function addUser($user,$pwd,$email,$phone){
	try {
		$pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
		$sql="insert into user(user,pwd,Email,phone) values('$user','$pwd','$email','$phone')";
		$result=$pdo->query($sql); 
		if ($result->rowCount()) {
			return(array(0=>'success'));
		}
		else{
			return(array(1=>'insert error'));
		}
	} catch (Exception $e) {
		return(array(1=>$e->getMessage()));
	}
}


//用户登录
function checkUser($user,$pwd){
	try{
        $pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
        $sql="select * from user where user=:user and pwd=:pwd ";
        $result=$pdo->prepare($sql);
        $result->execute(array(':user'=>$user,':pwd'=>$pwd));
        if($result->rowCount()){
            $row=$result->fetch();
            return (array(0=>'success'));
        }
        else {
       		return (array(1=>'not find the user'));   
     	}
  	} 
  	catch (PDOException $e){
        return (array(1=>$e->getMessage()));
    }
}

function checkAdmin($name,$pwd){
  try{
        $pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
        $sql="select * from admin where name=:name and pwd=:pwd ";
        $result=$pdo->prepare($sql);
        $result->execute(array(':name'=>$name,':pwd'=>$pwd));
        if($result->rowCount()){
            $row=$result->fetch();
            return (array(0=>'success'));
        }
        else {
          return (array(1=>'not find the user'));   
      }
    } 
    catch (PDOException $e){
        return (array(1=>$e->getMessage()));
    }
}

//捡到东西页面表单提交
function addGoods($user_name,$time,$describe,$opation,$area,$img,$lost_find){
  try {
    $pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
    $sql="insert into find(find_name,find_time,descrip,find_option,find_place,find_img,lost_find) values('$user_name','$time','$describe','$opation','$area','$img','$lost_find')";
    $result=$pdo->query($sql); 
    //var_dump($result);
    if ($result->rowCount()) {
      return(array(0=>'success'));
    }
    else{
      return(array(1=>'insert error'));
    }
  } catch (Exception $e) {
    return(array(1=>$e->getMessage()));
  }
}


//首页显示丢失和捡到东西显示
function ShowGoods(){
  try {
    $pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
    $sql="select * from find, user where user.user=find.find_name order by find_id";
    $result=$pdo->query($sql); 
    if ($result) {
      while ($row=$result->fetchAll(PDO::FETCH_ASSOC)){
        $data[]=$row;
        //var_dump($data);
        return(array(0=>$data));
      }
    }
    else{
      return(array(1=>'error'));
    }
  } catch (Exception $e) {
    return(array(1=>$e->getMessage()));
  }
}

//显示意见反馈
function ShowView(){
  try {
    $pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
    $sql="select * from viewback order by id";
    $result=$pdo->query($sql); 
    if ($result) {
      while ($row=$result->fetchAll(PDO::FETCH_ASSOC)){
        $data[]=$row;
        //var_dump($data);
        return(array(0=>$data));
      }
    }
    else{
      return(array(1=>'error'));
    }
  } catch (Exception $e) {
    return(array(1=>$e->getMessage()));
  }
}

//显示我的信息
function ShowMy($user_name){
  try {
    $pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
    $sql="select * from find where find_name='$user_name'";
    $result=$pdo->query($sql); 
    if ($result) {
      while ($row=$result->fetchAll(PDO::FETCH_ASSOC)){
        $data[]=$row;
        //var_dump($data);
        return(array(0=>$data));
      }
    }
    else{
      return(array(1=>'error'));
    }
  } catch (Exception $e) {
    return(array(1=>$e->getMessage()));
  }
}


//显示我的信息
function ShowByFid($fid){
  try {
    $pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
    $sql="select * from find where find_id='$fid'";
    $result=$pdo->query($sql); 
    if ($result) {
      while ($row=$result->fetchAll(PDO::FETCH_ASSOC)){
        $data[]=$row;
        //var_dump($data);
        return(array(0=>$data));
      }
    }
    else{
      return(array(1=>'error'));
    }
  } catch (Exception $e) {
    return(array(1=>$e->getMessage()));
  }
}



//根据分类不同显示不同信息
function ShowByselect($option){
  try {
    $pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
    $sql="select * from find, user where user.user=find.find_name and find_option='$option'";
    $result=$pdo->query($sql); 
    if ($result) {
      while ($row=$result->fetchAll(PDO::FETCH_ASSOC)){
        $data[]=$row;
        //var_dump($data);
        return(array(0=>$data));
      }
    }
    else{
      return(array(1=>'error'));
    }
  } catch (Exception $e) {
    return(array(1=>$e->getMessage()));
  }
}



//删除我点击的物品
function delByfind_id($id){
  try {
    $pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
    $sql="delete from find where find_id=:find_id";
    $result=$pdo->prepare($sql);
    $result->execute(array(':find_id'=>$id));
    if ($result->rowCount()) {
        return(array(0=>'success delete'));
      }
    else{
      return(array(1=>'error delete'));
    }
  } catch (Exception $e) {
    return(array(1=>$e->getMessage()));
  }
}


//修改我选中的信息
function update($fid,$time,$describe,$opation,$area){
  try {
    $pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
    $sql="Update find set find_time='$time', descrip='$describe', find_option='$opation', find_place='$area' where find_id=:find_id";
    $result=$pdo->prepare($sql);
    $result->execute(array(':find_id'=>$fid));
    if ($result->rowCount()) {
        return(array(0=>'success update'));
      }
    else{
      return(array(1=>'error update'));
    }
  } catch (Exception $e) {
    return(array(1=>$e->getMessage()));
  }
}


//添加反馈信息
function addBack($name,$text,$time){
  try {
    $pdo=new PDO("mysql:host=localhost;dbname=web;charset=utf8","root","");
    $sql="insert into viewback (user_name,content,date) values('$name','$text','$time')";
    $result=$pdo->query($sql); 
    //var_dump($result);
    if ($result->rowCount()) {
      return(array(0=>'success'));
    }
    else{
      return(array(1=>'insert error'));
    }
  } catch (Exception $e) {
    return(array(1=>$e->getMessage()));
  }
}

?>