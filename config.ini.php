<?php
header('content-type:text/html;chaset:utf-8');
define("ROOT","D:/PHP/studyPHP/MyDimension/");
define("BASE_URL","http://localhost/studyPHP/MyDimension/");
define("DB_HOST","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","dot23");
define("DB_NAME","dimension");
define("DB_CHARSET","utf8");


//类的自动加载
set_include_path("./;".ROOT."controllers;".ROOT."core;".ROOT."models");
function __myAutoLoad($className){
	//加载smarty类
	if(preg_match("/^smarty/i",$className)){//smarty类以smarty开头
		require ROOT.'libs/smarty/sysplugins/'.strtolower($className).'.php';
	}else{
		//接收是管理员还是普通用户
		$permission=isset($_GET['p'])?$_GET['p']:'home';
		if(preg_match("/.+Controller$/i", $className)){//判断此类是否是控制器类
			require $permission.'/'.$className.'.class.php';
		}else{
			require $className.'.class.php';
		}
	}
}
//注册自动加载类的函数名
spl_autoload_register("__myAutoLoad");

//配置smarty
/*require ROOT.'libs/smarty/Smarty.class.php';
$smarty=new Smarty();
$smarty->setTemplateDir(ROOT.'views/template');
$smarty->setCompileDir(ROOT.'views/template_c');
$smarty->setCacheDir(ROOT.'views/cache');
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";*/

define("TEMP_EXT_NAME",'html');
define("DEFAULT_CONTROLLER",'index');
define("DEFAULT_ACTION",'index');














