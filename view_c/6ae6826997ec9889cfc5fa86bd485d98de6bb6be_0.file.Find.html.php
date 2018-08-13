<?php
/* Smarty version 3.1.32, created on 2018-06-01 08:56:12
  from 'C:\wamp\www\201526203028  suwowen\view\Find.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b10ee0c2f55b7_54606169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ae6826997ec9889cfc5fa86bd485d98de6bb6be' => 
    array (
      0 => 'C:\\wamp\\www\\201526203028  suwowen\\view\\Find.html',
      1 => 1527648859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b10ee0c2f55b7_54606169 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>失物招领_捡到东西</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery-3.2.1.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/find.js"><?php echo '</script'; ?>
>
	<style type="text/css">
		input{
			width: 300px;
			height: 40px;
			margin-bottom: 20px;
		}
		select{
			width: 150px;
			height: 40px;
			margin-bottom: 20px;
		}
		textarea{
			width: 300px;
			margin-bottom: 20px;
		}
		.sm{
			width: 100px;
			background: #428BCA;
			color: white;
			margin-left: 200px;
		}
		.file{
			width: 200px;
			height: 40px;
		}
	</style>
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
            		<li class="active"><a href="../control/FindControl.php" target="_self" style="color: #666666; background: white;">捡到东西</a></li>
            		<li><a href="../control/LostControl.php" target="_self" style="color: white">丢了东西</a></li>
            		<li><a href="../control/MyControl.php" target="_self" style="color: white">我的</a></li>
            		<li><a href="../control/VIewbackControl.php" target="_self" style="color: white">意见反馈</a></li>
        		</ul>
        		<ul class="nav navbar-nav navbar-right" style="font-size: 15px;">
      				<li><a href="#" target="_self" style="color: white"><span class="glyphicon glyphicon-user"></span> 你好，<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</a></li>
    			</ul>
    		</div>
    	</div>
	</nav>
	<div class="container">
    <div class="row" >
        <div class="col-xs-6 col-sm-7" style="background-color: white;border-radius: 10px;margin-right: 50px;">
        	<form method="post" enctype="multipart/form-data" style="margin-top: 30px;">
        		<table border="0">
        			<tr>
        				<td><label>物品照片：</label></td>
        				<td><input type="file" class="upfile" name="upfile"></td>
        			</tr>
        			<tr>
        				<td><label>拾取时间：</label></td>
        				<td><input type="text" id="time" name="time" value=""></td>
        			</tr>
        			<tr>
        				<td><label>拾取地点：</label></td>
        				<td><input type="text" name="area"></td>
        			</tr>
        			<tr>
        				<td><label>物品种类：</label></td>
        				<td>
        					<select name="opation">
			        			<option>书籍资料</option>
			        			<option>电子产品</option>
			        			<option>卡类证件</option>
			        			<option>交通工具</option>
			        			<option>衣物饰品</option>
			        			<option>其他物品</option>
        					</select>
        				</td>
        			</tr>
        			<tr>
        				<td><label>物品描述：</label></td>
        				<td><textarea rows="5"name="describe"></textarea></td>
        			</tr>
        		</table>
        		<input type="submit" class="sm" name="sm" value="提交">
        	</form>
        </div>
        <div class="col-xs-6 col-sm-4" 
        style="background-color: #428BCA; color: white;font-family:微软雅黑;font-size:16px; ">
            <h4 style="text-align: center;">请先阅读</h4>
            <p>1，物品照片>我们强烈建议您添加物品照片，图片比文字描述更直观</p>
            <p>2，物品种类>建议您填写物品的种类特征，便于我们分类查找</p>
            <p>3，物品描述>建议您尽可能详细的描述物品信息和物主线索，如：卡类证件须写出证件种类、证件号、姓名等！</p>
            <p>4，拾取地点，建议您竟可能清楚地写出拾取地点，比如：教学楼->教室编号</p>
        </div> 
    </div>
</div>
</body>
</html><?php }
}
