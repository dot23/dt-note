<?php
require 'config.ini.php';
header("content-type:text/html;charset=utf-8");
//判断是管理员还是普通用户
$permission=isset($_GET['p'])?$_GET['p']:'home';

//接收控制器名
$controllerName=isset($_GET['c'])?$_GET['c']:DEFAULT_CONTROLLER;
//接收控制器中的方法名
$funName=isset($_GET['a'])?$_GET['a']:DEFAULT_ACTION;
//拼接类名
$className=ucfirst(strtolower($controllerName)).'Controller';
//如果当前控制器类不存在则访问默认页面
if(!is_file(ROOT.'controllers/'.$permission.'/'.$className.'.class.php')){
	$className=ucfirst(DEFAULT_CONTROLLER).'Controller';
	$funName=DEFAULT_ACTION;
}
//实例化控制器类
$cOb=new $className;
//判断before_当前方法是否存在，存在则调用
$beforeFunName="before_".$funName;
if(method_exists($cOb,$beforeFunName)){
	$cOb->$beforeFunName();
}
//调用控制器类的方法
$cOb->$funName();

//判断after_当前方法是否存在，存在则调用
$afterFunName="after_".$funName;
if(method_exists($cOb,$afterFunName)){
	$cOb->$afterFunname();
}
