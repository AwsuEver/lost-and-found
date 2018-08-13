<?php
/* Smarty version 3.1.32, created on 2018-06-10 05:55:57
  from 'C:\wamp\www\201526203028  suwowen\view\Viewback.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1ca14d14da05_77599665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98342318fd41fc577957132d888b17e992585272' => 
    array (
      0 => 'C:\\wamp\\www\\201526203028  suwowen\\view\\Viewback.html',
      1 => 1527650360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1ca14d14da05_77599665 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>失物招领_意见反馈</title>
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
            		<li><a href="../control/MyControl.php" target="_self" style="color: white">我的</a></li>
            		<li class="active"><a href="../control/VIewbackControl.php" target="_self" style="color: #666666; background: white;">意见反馈</a></li>
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
                <div class="col-sm-offset-3 col-sm-6" style="background-color: white;border-radius: 10px; font-family: 微软雅黑;">
                    <h4 style="color: #428BCA; margin-left: 20px; margin-top: 30px;">用户意见反馈：</h4>
                    <form method="post" enctype="multipart/form-data" style="margin-top: 30px; margin-left: 100px;">
                        <p style="font-size: 16px;">反馈描述：</p>
                        <br>
                        <textarea rows="5" name="back" style="width: 280px;"></textarea>
                        <br>
                        <br>
                        <input type="submit" name="sm" value="提交反馈" style="background: #428BCA; color: white; font-size: 16px; height: 40px;">
                    </form>
                    <br><br>
                    <div style="color: #428BCA; font-size: 14px; margin-left: 20px;">
                        <p>感谢您的反馈，您的反馈使我们前进的最大动力，我们希望：</br>
                        &nbsp &nbsp &nbsp 您可以对他人进行感谢，</br>
                        &nbsp &nbsp &nbsp 您有好的想法或者主意也可以向我们进行反馈</br>
                        &nbsp &nbsp &nbsp 您能够发表中立态度的反馈，以便我们及时更正自己的错误</p>
                        <br><br><br>
                    </div>
        </div>
    </div>
</div>
</body>
</html><?php }
}
