<?php
/* Smarty version 3.1.30, created on 2016-12-13 01:46:06
  from "D:\PHP\studyPHP\MiGoArt\views\template\home\info\info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584ee25e20e431_10044411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '562dcab02a74707aeb5f196d036d2b91d249170b' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MiGoArt\\views\\template\\home\\info\\info.html',
      1 => 1481564764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/public/header.html' => 1,
  ),
),false)) {
function content_584ee25e20e431_10044411 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="libs/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

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
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="static/css/carousel.css" rel="stylesheet">
    <link href="static/css/public.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
  	<?php $_smarty_tpl->_subTemplateRender("file:home/public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

     <div class="container">
		<div class="row">
  			<div class="col-md-9">
  				<div class="jumbotron">
  					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
  					<h2 class="contentTitle"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</h2>
  					<middle style="text-align:center;">作者：<?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布时间：<?php echo $_smarty_tpl->tpl_vars['v']->value['pubtime'];?>
</middle>
  					<p><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</p>
  					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</div>
			</div>
			<div class="col-md-3">
  				<div class="jumbotron">
  					<h1>Hello, world!</h1>
  					<p>...</p>
  					<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
				</div>
			</div>
		</div>

    </div> <!-- /container -->
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="libs/jquery/jquery.min.js"><\/script>')<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="libs/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="libs/bootstrap/js/carousel.js"><?php echo '</script'; ?>
>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo '<script'; ?>
 src="libs/bootstrap/js/holder.min.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="libs/bootstrap/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
