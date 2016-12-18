<?php
class UserController extends Controller{
	function login(){
		$this->display();
	}
	//检查login.html中表单提交过来的用户名和密码是否正确
	function check(){
		$adminOb=new Admin();
		$res=$adminOb->checkUserAndPass($_POST['username'],$_POST['password']);
		if($res){
			setcookie('userid',$res,time()+3600*24,"/");
			setcookie('username',$_POST['username'],time()+3600*24,"/");
			header("Location:index.php?p=admin");
		}else{
			$this->redirect("用户名或密码错误，请重新登录","index.php?p=admin&c=user&a=login",'3');
		}
	}
	function logout(){
		setcookie('userid', '',time()-3600,'/');
		setcookie('username','',time()-3600,'/');
		header("Location:index.php?p=admin");
	}
}


