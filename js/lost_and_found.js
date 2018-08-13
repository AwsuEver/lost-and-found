window.onload=function(){

//点击reset后提示框消失
	var reset=document.getElementById('reset');
	var error=document.getElementsByClassName('error');

	reset.onclick=function(){
		for(i=0;i<=error.length;i++){
		while(error[i].style.display=="block"){
			error[i].style.display="none";}
		}
	}

}
//点击登录框，若提示框报错，则不提交数据
function checkSm(){
	var error=document.getElementsByClassName('error');
	for(i=0;i<=error.length;i++){
			if(error[i].style.display=="block"){
				alert("表单输入有误");
				return false;
			}
			else{
				return true;
			}
		}
}


//检查注册页面中密码是否一致
function checkPwd(){
	var pwd0=document.getElementById('pwd0').value;
	var pwd1=document.getElementById('pwd1').value;
	var showPwdError=document.getElementById('showPwdError');
	if(pwd0==pwd1){
		return;
	}
	else{
		showPwdError.style.display="block";
	}
}

//检查电话是否符合格式要求
function checkPhone(){
	var phone=document.getElementById('phone').value;
    var reg= /^[0-9]{11}$/;
    var showPhoneError=document.getElementById('showPhoneError');
    if(reg.test(phone)){
    	return
    }
    else{
    	showPhoneError.style.display="block";
    }
}

//检查邮箱格式是否符合要求
function checkEmail(){
	var email=document.getElementById('email').value;
	var reg=/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
	var showEmailError=document.getElementById('showEmailError');
	if(reg.test(email)){
		return
	}
	else{
		showEmailError.style.display="block";
	}
}