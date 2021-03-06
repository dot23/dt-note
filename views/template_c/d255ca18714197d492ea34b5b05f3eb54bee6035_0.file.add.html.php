<?php
/* Smarty version 3.1.30, created on 2016-12-13 11:38:18
  from "D:\PHP\studyPHP\MiGoArt\views\template\admin\news\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584f6d2a034867_34874868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd255ca18714197d492ea34b5b05f3eb54bee6035' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MiGoArt\\views\\template\\admin\\news\\add.html',
      1 => 1481600295,
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
function content_584f6d2a034867_34874868 (Smarty_Internal_Template $_smarty_tpl) {
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
		<form role="form" action="index.php?p=admin&c=news&a=save" method="post">
			<div class="row row-offcanvas row-offcanvas-right">
        		<div class="col-xs-12 col-sm-9">
          		<p class="pull-right visible-xs">
           	 	<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          		</p>
          			<div class="panel panel-default">
				  	<!-- Default panel contents -->
				  		<div class="panel-heading">当前操作：文章添加</a></div>
				  		<!-- form -->
							<div class="form-group" style="margin-top:3%;">
								<label for="inputTitle">标题：</label>
								<input type="text" name="title" class="form-control" id="inputTitle" placeholder="请输入文章标题">
							</div>
							<div class="form-group">
								<label for="inputAuthor">作者：</label>
								<input type="text" name="author" class="form-control" id="inputAuthor" placeholder="请输入作者"/>
							</div>
							<div class="form-group">
								<label for="inputModule">模块：</label>
								<select name="cateid" class="form-control" id="inputModule">
	    						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cateArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
	  							<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
							</div>
							<div class="form-group">
								<label for="inputImage">图片：</label>
								<input type="text"  class="form-control" id="inputImage"/>
								<button type="button" class="btn btn-default">选择图片</button>
							</div>
							<div class="form-group">
								<label for="inputContent">内容：</label>
								<textarea name="content" class="form-control" id="inputContent" rows='25' style="width:98%;"></textarea>
							</div>
							<div class="form-group">
								<input type='submit' class="btn btn-primary" value='确认添加'/>
							</div>
						</div><!-- panel panel-default -->
					</div><!-- col-xs-12 col-sm-9 -->
				</div><!-- row row-offcanvas row-offcanvas-right -->
			</form>			
			</div><!-- col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main -->			
       	</div><!--row-->  
    <?php $_smarty_tpl->_subTemplateRender("file:admin/public/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
