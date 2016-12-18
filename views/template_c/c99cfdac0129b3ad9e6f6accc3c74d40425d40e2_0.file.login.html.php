<?php
/* Smarty version 3.1.30, created on 2016-12-13 00:50:02
  from "D:\PHP\studyPHP\MiGoArt\views\template\admin\user\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584ed53a91fe71_52829958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c99cfdac0129b3ad9e6f6accc3c74d40425d40e2' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MiGoArt\\views\\template\\admin\\user\\login.html',
      1 => 1481561399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584ed53a91fe71_52829958 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="UTF-8">
<link rel='stylesheet' href='libs/bootstrap/css/bootstrap.min.css'/>
<link rel="stylesheet" href="static/admin/css/public.css"/>
<title>管理员登录</title>
</head>
<body background="static/images/login-bg.jpg">


<form class="form-horizontal" role='form' action="index.php?p=admin&c=user&a=check" method="post">
	<div class='form-group'>
		<div class="col-sm-10">
			<input type="text" name="username" class="form-control" id="inputUsername" placeholder="请输入管理员账号" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10">
			<input type="password" name='password' class="form-control" id="inputPassword" placeholder="请输入密码"/>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10">
			<input type="text" name="verity" class="form-control" id="inputVerity"/>
		</div>
	</div>
	<div class="form-group">
		<button class="btn btn-lg btn-primary btn-position" type="submit">登录</button>
	</div>
</form>
</body>
</html><?php }
}
