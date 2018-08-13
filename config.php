<?php

	include "../Smarty/Smarty.class.php";

	$Smarty=new Smarty;  //实例化Smarty类，获得对象

	$Smarty->left_delimiter="<{";  //定义Smarty标签的开始定界符
	$Smarty->right_delimiter="}>";  //定义Smarty标签的结束定界符
	$Smarty->template_dir="../view/";  //定义模板文件所在的目录路径
	$Smarty->compile_dir="../view_c/";  //定义编译文件所在的目录路径
	//$Smarty->caching=true;  //定义Smarty缓存是否开启
	//$Smarty->cache_dir="../cache/";  //定义缓存文件所在的目录路径

?>