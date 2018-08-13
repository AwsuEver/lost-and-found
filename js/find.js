//获取时间给拾取物品时间的placeholder值
window.onload=function(){
	var time=document.getElementById('time');
	var myDate=new Date();
	time.value=myDate.getFullYear()+"-"+(myDate.getMonth()+1)+"-"+myDate.getDate();
}