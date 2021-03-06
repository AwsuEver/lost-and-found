<?php
/* Smarty version 3.1.32, created on 2018-05-26 10:44:20
  from 'C:\wamp\www\201526203028  saw\view\Index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b091e646c2649_44483294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '798c0ae895618b6c6a937364feefc7ab23a3fdea' => 
    array (
      0 => 'C:\\wamp\\www\\201526203028  saw\\view\\Index.php',
      1 => 1527324257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b091e646c2649_44483294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '304925b091e6463d927_26838942';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>失物招领</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery-3.2.1.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
</head>
<body>
	<!--导航栏区域-->
	<nav class="navbar navbar-default" role="navigation">
		<!-- 当class="container"时，居中显示，当class="container-fluid"时向左对齐显示 -->
    	<div class="container"> 
    		<div class="navbar-header">
    			<!--当屏幕大小出现变化是出现响应式布局，三个横杆显示-->
        		<button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
           			<span class="sr-only">响应式导航</span>
           			<span class="icon-bar"></span>
           			<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
        		</button>
        		<!--商标logo区域-->
        		<a class="navbar-brand" href="../control/IndexControl.php" style="color: white; font-size: 18px; "><span class="glyphicon glyphicon-bullhorn"></span>&nbsp Lost And Found</a>
    		</div>
   			<div class="collapse navbar-collapse" id="example-navbar-collapse">
        		<ul class="nav navbar-nav" style="font-size: 18px;">
            		<li class="active"><a href="../control/IndexControl.php" style="color: #666666; background: white;">首页</a></li>
            		<li><a href="../control/FindControl.php" target="_self" style="color: white">捡到东西</a></li>
            		<li><a href="../control/LostControl.php" target="_self" style="color: white">丢了东西</a></li>
            		<li><a href="Thanks.html" target="_blank" style="color: white">感谢Ta</a></li>
            		<li><a href="Back.html" target="_blank" style="color: white">意见反馈</a></li>
        		</ul>
        		<ul class="nav navbar-nav navbar-right" style="font-size: 15px;">
      				<li><a href="../control/AdduserControl.php" target="_blank" style="color: white"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
      				<li><a href="../control/loginControl.php" target="_self" style="color: white"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
    			</ul>
    		</div>
    	</div>
	</nav>
	<!--显示区域-->
	<div class="container">
	    <div class="row" >
	        <div class="col-md-3" style="background-color: white; margin-right: 15px;">
	            <ul class="nav nav-pills nav-stacked" style="text-align: center">

				  <li class="active"><a href="#" id="0" style="background: #428BCA">全部</a></li>
				  <li><a href="#" id="1">书籍资料</a></li>
				  <li><a href="#" id="2">电子产品</a></li>
				  <li><a href="#" id="3">卡类证件</a></li>
				  <li><a href="#" id="4">交通工具</a></li>
				  <li><a href="#" id="5">衣物饰品</a></li>
				  <li><a href="#" id="6">其他物品</a></li>
				</ul>
	        </div>
	        <div class="col-md-8" style="background-color: white;">
	           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value[0], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
	           		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
	           			<h4><?php echo $_smarty_tpl->tpl_vars['key']->value['find_name'];
echo $_smarty_tpl->tpl_vars['key']->value['lost_find'];?>
 </h4>
	           				<img src="<?php echo $_smarty_tpl->tpl_vars['key']->value['find_img'];?>
" style="width: 300px; height: 200px;">
	           				&nbsp; &nbsp; &nbsp;
	           				<span>描述：<?php echo $_smarty_tpl->tpl_vars['key']->value['descrip'];?>
</span>
	           				<br>
	           				<span>地点：<?php echo $_smarty_tpl->tpl_vars['key']->value['find_place'];?>
</span>
	           				&nbsp; &nbsp; &nbsp; 
	           				<span>时间：<?php echo $_smarty_tpl->tpl_vars['key']->value['find_time'];?>
</span>
	           			<hr>
	           		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	        </div>
	    </div>
	</div>
	<!--footer区域-->
	<div class="container">
	        <p style="text-align: center">学号：201526203028 &nbsp&nbsp 姓名：苏澳文 &nbsp&nbsp电话：15797821338 &nbsp&nbsp 邮箱：945565237@qq.com</p>
	</div>
</body>
</html><?php }
}
