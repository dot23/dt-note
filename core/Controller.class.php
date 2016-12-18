<?php

class Controller{
	protected $smarty="";
	function __construct(){
		//产生Smarty对象，配置Smarty
		require ROOT."libs/smarty/Smarty.class.php";
		$s=new Smarty();
		$s->setTemplateDir(ROOT."views/template/");
		$s->setCompileDir(ROOT."views/template_c/");
		$s->left_delimiter="<{";
		$s->right_delimiter="}>";
		$this->smarty=$s;
		
		//判断这个方法是否存在
		if(method_exists($this, '_init')){
			$this->_init();
		}
	}
	function assign($vName,$v){
		$this->smarty->assign($vName,$v);
	}
	function display($path=""){
		//接收用户权限名称，admin或普通用户
		$permission=isset($_GET['p'])?$_GET['p']:'home';
		if(empty($path)){
			//产生默认模板路径
			$className=get_class($this);//得到调用此方法的子类名
			$dirName=strtolower(str_replace("Controller", "", $className));//去掉类名中的Controller
			$traceArr=debug_backtrace();
			$funName=$traceArr[1]['function'];//获取上一个方法名
			$fileName=$funName.'.'.TEMP_EXT_NAME;
			$this->smarty->display($permission.'/'.$dirName.'/'.$fileName);
		}else{
			$this->smarty->display($path);
		}
	}
	//跳转
	function redirect($message,$toUrl,$seconds=3){
		$this->assign('message', $message);
		$this->assign('toUrl', $toUrl);
		$this->assign('seconds',$seconds);
		$this->display("public/jump.html");
	}
	
	//JS跳转
	function redirectJS($message,$toUrl,$seconds=3){
		$this->assign('message', $message);
		$this->assign('toUrl', $toUrl);
		$this->assign('seconds',$seconds);
		$this->display("public/jump.html");
	}
}
