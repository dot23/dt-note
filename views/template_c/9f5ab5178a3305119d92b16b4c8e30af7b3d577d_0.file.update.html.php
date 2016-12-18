<?php
/* Smarty version 3.1.30, created on 2016-12-13 11:27:00
  from "D:\PHP\studyPHP\MiGoArt\views\template\admin\category\update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584f6a842a6ef5_68872859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f5ab5178a3305119d92b16b4c8e30af7b3d577d' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MiGoArt\\views\\template\\admin\\category\\update.html',
      1 => 1481599611,
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
function content_584f6a842a6ef5_68872859 (Smarty_Internal_Template $_smarty_tpl) {
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
		<form role="form" action="index.php?p=admin&c=category&a=updateConfirm&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" method="post">
			<div class="row row-offcanvas row-offcanvas-right">
        		<div class="col-xs-12 col-sm-9">
          		<p class="pull-right visible-xs">
            	<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          		</p>
          			<div class="panel panel-default">
				  	<!-- Default panel contents -->
				  		<div class="panel-heading">当前操作：修改栏目</a></div>
				  		<!-- form -->
							<div class="form-group" style="margin-top:3%;">
								<label for="inputCateName">栏目名称：</label>
								<input type="text" name="name" class="form-control" id="inputCateName" placeholder="请输入栏目名称" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
">
							</div>
							<div class="form-group">
								<label for="inputCategory">栏目类别：</label>
								<select name="type" class="form-control" id="inputCategory">
									<option value="企业信息" >企业信息</option>
									<option value="新闻动态" >新闻动态</option>
									<option value="产品服务" >产品服务</option>
								</select>
							</div>
							<div class="form-group">
								<label>是否显示：</label>
								<input type="radio" name='isshow' value='1' />显示
								<input type='radio' name='isshow' value='0' />不显示
							</div>
							<div class="form-group">
								<input type='submit' class="btn btn-primary" value='确认修改'/>
							</div>
						</div>
					</div>
				</div>	
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
