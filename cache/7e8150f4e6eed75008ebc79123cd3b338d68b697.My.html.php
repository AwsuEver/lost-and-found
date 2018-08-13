<?php
/* Smarty version 3.1.32, created on 2018-05-28 07:16:15
  from 'C:\wamp\www\201526203028  saw\view\My.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0b909fc9f5f6_60939953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb45ff2e621f94a7d892f6c5fbd77d361fa93768' => 
    array (
      0 => 'C:\\wamp\\www\\201526203028  saw\\view\\My.html',
      1 => 1527484572,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5b0b909fc9f5f6_60939953 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>失物招领_感谢信</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
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
      				<li><a href="#" target="_self" style="color: white"><span class="glyphicon glyphicon-user"></span> 你好，abc</a></li>
    			</ul>
    		</div>
    	</div>
	</nav>
	<!-- 显示我的基本信息 -->
    <div id="my" class="col-md-offset-3 col-md-6" style="background-color: white;">
                                                       <pre class='xdebug-var-dump' dir='ltr'>
<b>array</b> <i>(size=8)</i>
  'find_id' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'3'</font> <i>(length=1)</i>
  'find_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'abc'</font> <i>(length=3)</i>
  'find_time' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'2018-4-26'</font> <i>(length=9)</i>
  'descrip' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'一部蓝色华为P20'</font> <i>(length=21)</i>
  'find_option' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'电子产品'</font> <i>(length=12)</i>
  'find_place' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'惟义楼'</font> <i>(length=9)</i>
  'find_img' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'../img/P20.jpg'</font> <i>(length=14)</i>
  'lost_find' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'捡到'</font> <i>(length=6)</i>
</pre>
                    <a href="#" class="item" style="font-family:微软雅黑">
                        <h4>abc捡到 </h4>
                            <img src="../img/P20.jpg" style="width: 300px; height: 200px;">
                            &nbsp; &nbsp; &nbsp;
                            <span>描述：一部蓝色华为P20</span>
                            <br>
                            <span>地点：惟义楼</span>
                            &nbsp; &nbsp; &nbsp; 
                            <span>时间：2018-4-26</span>
                            <br>
                            <br>
                            <a href="#">【修改】</a>&nbsp; &nbsp; &nbsp; <a href="#" id="3">【删除】</a>
                        <hr>
                        </a>
                                        <pre class='xdebug-var-dump' dir='ltr'>
<b>array</b> <i>(size=8)</i>
  'find_id' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'6'</font> <i>(length=1)</i>
  'find_name' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'abc'</font> <i>(length=3)</i>
  'find_time' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'2018-4-28'</font> <i>(length=9)</i>
  'descrip' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'一副白色的耳机'</font> <i>(length=21)</i>
  'find_option' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'电子产品'</font> <i>(length=12)</i>
  'find_place' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'风雨球场'</font> <i>(length=12)</i>
  'find_img' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'../img/ear.png'</font> <i>(length=14)</i>
  'lost_find' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'丢失'</font> <i>(length=6)</i>
</pre>
                    <a href="#" class="item" style="font-family:微软雅黑">
                        <h4>abc丢失 </h4>
                            <img src="../img/ear.png" style="width: 300px; height: 200px;">
                            &nbsp; &nbsp; &nbsp;
                            <span>描述：一副白色的耳机</span>
                            <br>
                            <span>地点：风雨球场</span>
                            &nbsp; &nbsp; &nbsp; 
                            <span>时间：2018-4-28</span>
                            <br>
                            <br>
                            <a href="#">【修改】</a>&nbsp; &nbsp; &nbsp; <a href="#" id="6">【删除】</a>
                        <hr>
                        </a>
                                                </div>
</body>
</html>

<script type="text/javascript">
    
    $("#my a:contains('删除')").click(function(){
        if(confirm('确定删除？')){
            var fid=$(this).attr('id');
            //alert(fid);
            delMy(fid);
        }
    })
    function delMy(fid){
        $.ajax({
            url:"../control/delMyfind_idControl.php",
            data:{fid:fid},
            dataType:"json",
            success:function(msg){
                console.log(msg);
                /*for(var key in msg ){
                    if(key==0){
                        $("#my a[id="+fid+"]").parents(".item").remove();
                    }
                    else{
                        alert("error");
                    }
                }*/
            }
         })
    }
</script><?php }
}
