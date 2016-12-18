var code;
window.onload=createCode;
function createCode(){
	code="";
	var codeLength=4;
	var checkCode=document.getElementById("checkCode");
	var random=new Array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G',
			'H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	for(var i=0;i<codeLength;i++){
		code+=random[Math.floor(Math.random()*36)];
	}
	checkCode.value=code;
}
function verifyCode(){
	var inputCode=document.getElementById("inputCode").value.toUpperCase();
	if(inputCode.length<=0){
		alert("请输入验证码");
	}else if(inputCode!=code.toUpperCase()){
		alert("验证码错误");
		createCode();
		inputCode.value='';
	}else{
		alert('正确');
	}
	
}