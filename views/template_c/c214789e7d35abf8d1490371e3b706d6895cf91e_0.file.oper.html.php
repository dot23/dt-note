<?php
/* Smarty version 3.1.30, created on 2016-12-13 11:56:18
  from "D:\PHP\studyPHP\MiGoArt\views\template\admin\news\oper.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584f71624c2ce9_52616189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c214789e7d35abf8d1490371e3b706d6895cf91e' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MiGoArt\\views\\template\\admin\\news\\oper.html',
      1 => 1481601366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/header.html' => 1,
    'file:../public/menu.html' => 1,
    'file:admin/public/menu.html' => 1,
  ),
),false)) {
function content_584f71624c2ce9_52616189 (Smarty_Internal_Template $_smarty_tpl) {
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
<title>Mi-Go Art 后台管理系统</title>
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
			<form action="index.php?p=admin&c=category&a=saveindex" method="post"">
				<div class="row row-offcanvas row-offcanvas-right">
					<div class="col-xs-12 col-sm-9">
						<p class="pull-right visible-xs">
						<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
						</p>
          					<div class="panel panel-default">
					  			<!-- Default panel contents -->
					  			<div class="panel-heading">当前操作：内容管理
				   					<a href="index.php?p=admin&c=news&a=add">添加</a></div>
				  					<!-- Table -->
				  					<table class="table">
										<thead>
											<tr>
												<th>文章ID</th>
												<th>标题</th>
												<th>发布时间</th>
												<th>管理</th>
											</tr>
										</thead>
										<tbody>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
												<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['pubtime']);?>
</td>
												<td><a href="index.php?p=admin&c=news&a=update&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>&nbsp;|&nbsp;
												<a href="index.php?p=admin&c=news&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a></td>
											</tr>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

											<tr>
												<td colspan='4'><?php echo $_smarty_tpl->tpl_vars['pageStr']->value;?>
</td>
											</tr>
										</tbody>
									</table>
								</div><!--panel panel-default  -->
							</div><!-- col-xs-12 col-sm-9 -->
						</div><!-- row row-offcanvas row-offcanvas-right -->
					<input type="submit" class="btn btn-primary"  value="修改排序"/>
				</form>			
			</div><!--col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main-->  
    	<?php $_smarty_tpl->_subTemplateRender("file:admin/public/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div><!--/row-->		
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
