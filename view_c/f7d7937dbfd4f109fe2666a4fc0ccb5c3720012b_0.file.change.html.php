<?php
/* Smarty version 3.1.32, created on 2018-06-01 06:01:42
  from 'C:\wamp\www\201526203028  saw\view\change.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b10c526702e86_33092590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d7937dbfd4f109fe2666a4fc0ccb5c3720012b' => 
    array (
      0 => 'C:\\wamp\\www\\201526203028  saw\\view\\change.html',
      1 => 1527825699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b10c526702e86_33092590 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>失物招领_我的</title>
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
            		<li><a href="../control/IndexControl.php" style="color: white">首页</a></li>
            		<li><a href="../control/FindControl.php" target="_self" style="color: white">捡到东西</a></li>
            		<li><a href="../control/LostControl.php" target="_self" style="color: white">丢了东西</a></li>
            		<li class="active"><a href="../control/MyControl.php" target="_self" style="color: #666666; background: white;">我的</a></li>
            		<li><a href="Back.html" target="_blank" style="color: white">意见反馈</a></li>
        		</ul>
        		<ul class="nav navbar-nav navbar-right" style="font-size: 15px;">
      				<li><a href="#" target="_self" style="color: white"><span class="glyphicon glyphicon-user"></span> 你好，<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</a></li>
    			</ul>
    		</div>
    	</div>
	</nav>
	<!-- 显示我的基本信息 -->
    <div id="my" class="col-md-offset-3 col-md-6" style="background-color: white;  border-radius: 20px;">
        <form class="form-horizontal" role="form" method="post" style="margin-top: 50px;">
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
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">时间：</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="time" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['find_time'];?>
">
            </div>
          </div>
          <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">地点：</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="area" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['find_place'];?>
">
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">物品分类：</label>
            <div class="col-sm-4">
                <select class="form-control" name="opation">
                    <option>书籍资料</option>
                    <option>电子产品</option>
                    <option>卡类证件</option>
                    <option>交通工具</option>
                    <option>衣物饰品</option>
                    <option>其他物品</option>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">描述：</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="5" name="describe"><?php echo $_smarty_tpl->tpl_vars['key']->value['descrip'];?>
</textarea>
            </div>
          </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-default" name="sm">确认修改</button>
            </div>
          </div>
        </form>
    </div>
</body>
</html><?php }
}
