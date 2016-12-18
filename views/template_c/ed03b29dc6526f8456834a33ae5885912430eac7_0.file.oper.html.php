<?php
/* Smarty version 3.1.30, created on 2016-12-15 21:07:05
  from "D:\PHP\studyPHP\MyDimension\views\template\admin\category\oper.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58529579327c72_86985567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed03b29dc6526f8456834a33ae5885912430eac7' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MyDimension\\views\\template\\admin\\category\\oper.html',
      1 => 1481807221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/header.html' => 1,
    'file:../public/menu.html' => 1,
  ),
),false)) {
function content_58529579327c72_86985567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">
<title>MyDimension编辑系统</title>
<!-- Bootstrap core CSS -->
<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="static/admin/css/dashboard.css" rel="stylesheet">
<link href="static/admin/css/public.css" rel="stylesheet">
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><?php echo '<script'; ?>
 src="../../assets/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
<?php echo '<script'; ?>
 src="libs/bootstrap/js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:../public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="container-fluid">
      	<div class="row">
  		<?php $_smarty_tpl->_subTemplateRender("file:../public/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<div class="panel panel-default">
				<!-- Default panel contents -->
					<div class="panel-heading">当前操作：栏目列表
					  	<a href="index.php?p=admin&c=category&a=add">添加</a></div>
						<!-- Table -->
						<table class="table">
							<thead>
								<tr>
								    <th>栏目ID</th>
									<th>栏目名称</th>
									<th>类别</th>
									<th>管理</th>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
</td>
									<td><a href="index.php?p=admin&c=category&a=update&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>&nbsp;|&nbsp;
									<a href="index.php?p=admin&c=category&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a></td>
								</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tbody>
					  	</table>
					</div>
			</div><!-- col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main -->
     	</div><!-- row -->
	</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="libs/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="libs/bootstrap/js/docs.min.js"><?php echo '</script'; ?>
>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<?php echo '<script'; ?>
 src="libs/bootstrap/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
