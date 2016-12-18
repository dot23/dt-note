<?php
/* Smarty version 3.1.30, created on 2016-12-15 23:46:20
  from "D:\PHP\studyPHP\MyDimension\views\template\admin\user\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5852baccccc190_62707875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7fa2edf7f91cf5f40625c48f3a97d16d28d4e54' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MyDimension\\views\\template\\admin\\user\\login.html',
      1 => 1481816778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5852baccccc190_62707875 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang='zh'>
<head>
<meta charset="UTF-8">
<link rel='stylesheet' href='libs/bootstrap/css/bootstrap.min.css'/>
<link rel="stylesheet" href="static/admin/css/public.css"/>
<title>编辑系统登录</title>
</head>
<body>
<form class="form-horizontal" role='form' action="index.php?p=admin&c=user&a=check" method="post">
	<div class='form-group'>
		<div class="col-sm-10">
			<label for="inputUsername">账号：</label>
			<input type="text" name="username" class="form-control" id="inputUsername" placeholder="请输入账号" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10">
			<label for="inputPassword">密码：</label>
			<input type="password" name='password' class="form-control" id="inputPassword" placeholder="请输入密码"/>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10">
			<label for="inputVerity">验证码：</label>
			<input type="text" name="verity" class="form-control" id="inputCode" style="width:20%;">
			<input class="btn btn-lg btn-primary" type="button" id="checkCode" onclick="createCode()">
		</div>
	</div>
	<div class="form-group">
		<button class="btn btn-lg btn-primary btn-position" type="submit" onclick="verifyCode()">登录</button>
	</div>
</form>
<?php echo '<script'; ?>
 src="static/admin/js/verify.js"><?php echo '</script'; ?>
>
</body>
</html>







<?php }
}
