<?php
/* Smarty version 3.1.32, created on 2018-07-26 04:24:45
  from 'C:\wamp\www\201526203028  suwowen\view\Index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5930eddc14b2_59263170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5179c00809e7fe1a4bbae7aa7253b365febd8852' => 
    array (
      0 => 'C:\\wamp\\www\\201526203028  suwowen\\view\\Index.html',
      1 => 1532571883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5930eddc14b2_59263170 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
            		<li><a href="../control/MyControl.php" target="_self" style="color: white">我的</a></li>
            		<li><a href="../control/VIewbackControl.php" target="_self" style="color: white">意见反馈</a></li>
        		</ul>
        		<!--<ul class="nav navbar-nav navbar-right" style="font-size: 15px;">
      				<li><a href="../control/AdduserControl.php" target="_blank" style="color: white"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
      				<li><a href="../control/loginControl.php" target="_self" style="color: white"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
    			</ul>-->
    		</div>
    	</div>
	</nav>
	<!--显示区域-->
	<div class="container">
	    <div class="row" >
	        <div class="col-md-3" style="background-color: white; margin-right: 15px;">
	            <ul class="nav nav-pills nav-stacked" id="select" style="text-align: center">

				  <li class="active"><a href="../control/IndexControl.php" target="_self" style="background: #428BCA">全部</a></li>
				  <li><a href="../control/selectControl.php?id=书籍资料" target="_self">书籍资料</a></li>
				  <li><a href="../control/selectControl.php?id=电子产品" target="_self">电子产品</a></li>
				  <li><a href="../control/selectControl.php?id=卡类证件" target="_self">卡类证件</a></li>
				  <li><a href="../control/selectControl.php?id=交通工具" target="_self">交通工具</a></li>
				  <li><a href="../control/selectControl.php?id=衣物饰品" target="_self">衣物饰品</a></li>
				  <li><a href="../control/selectControl.php?id=其他物品" target="_self">其他物品</a></li>
				</ul>
	        </div>
	        <div class="col-md-8" id="div" style="background-color: white;">
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
	           		<a class="cShow" id="<?php echo $_smarty_tpl->tpl_vars['key']->value['find_id'];?>
" oid="<?php echo $_smarty_tpl->tpl_vars['key']->value['find_option'];?>
" style="font-family:微软雅黑; cursor: pointer; display: block;">
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
	           			</a>
	           			<div class="showMessage">
		           			<div fid="<?php echo $_smarty_tpl->tpl_vars['key']->value['find_id'];?>
" style="display: none;width:500px; font-family:微软雅黑;color:#737475;background:white;">
		           				<h4>如果你【捡到】/【丢失】该物品，可以选择联系ta：</h4>
		           			    <p>电话：<?php echo $_smarty_tpl->tpl_vars['key']->value['phone'];?>
</p>
		           			    <p>邮箱：<?php echo $_smarty_tpl->tpl_vars['key']->value['Email'];?>
</p>
		           			</div>
	           			</div>
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
	        <p style="text-align: center; font-family:微软雅黑; font-size: 14px;">学号：201526203028 &nbsp&nbsp 姓名：苏澳文 &nbsp&nbsp电话：15797821338 &nbsp&nbsp 邮箱：945565237@qq.com</p>
	</div>
</body>
</html>


<?php echo '<script'; ?>
 type="text/javascript">

//点击丢失物品显示丢失信息
	$(".cShow").click(function(){
		var id=$(this).attr('id');
		$(".showMessage  div[fid="+id+"]").toggle();
	})

//点击分类模块，显示不同分类
	/*$("#select li a").click(function(){
		var option=$(this).attr('id');
		select(option);
	});
	function select(option){
		$.ajax({
			url:"../control/selectControl.php",
			data:{option:option},
			dataType:"json",

			success:function(msg){
				//console.log(msg);
				if(msg==null){
					$(".cShow").remove();
				}
				else{
					var oid=$("#div a").attr('oid');

					for(var i=0; i<msg.length ;i++){
						//alert(msg[i].find_option);
						if(oid!==msg[i].find_option){
							$(oid).css('display','none');
						}
					}
				}
			},

			error:function(XMLHttpRequest, textStatus, errorThrown){
                alert(XMLHttpRequest.status);
                alert(XMLHttpRequest.readyState);
                alert(textStatus);
            }
		})
	}*/
<?php echo '</script'; ?>
><?php }
}
