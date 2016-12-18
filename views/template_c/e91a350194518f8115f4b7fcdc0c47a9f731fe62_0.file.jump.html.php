<?php
/* Smarty version 3.1.30, created on 2016-12-15 22:23:07
  from "D:\PHP\studyPHP\MyDimension\views\template\public\jump.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5852a74b9dc091_46911990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e91a350194518f8115f4b7fcdc0c47a9f731fe62' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MyDimension\\views\\template\\public\\jump.html',
      1 => 1481811760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5852a74b9dc091_46911990 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
<head>
<!-- Bootstrap core CSS -->
<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link rel="stylesheet" href="static/admin/css/public.css"/>
<meta charset="utf-8">
<title>页面跳转</title>
<?php echo '<script'; ?>
>
	var num=<?php echo $_smarty_tpl->tpl_vars['seconds']->value;?>
;
	function jump(){
		if(num<=0){
			location.replace('<?php echo $_smarty_tpl->tpl_vars['toUrl']->value;?>
');
		}else{
			document.getElementById('seconds').innerHTML=num;
			window.setTimeout(jump,1000);
			num--;
		}
	}
<?php echo '</script'; ?>
>
</head>
<body>
<div class="panel panel-default" style="width:50%; margin-left:400px;">
  <div class="panel-heading">
    <h3 class="panel-title"></h3>
  </div>
  <div class="panel-body">
    <h1>跳转中...</h1>
	<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
！！！<br/><b id="seconds"><?php echo $_smarty_tpl->tpl_vars['seconds']->value;?>
</b>秒后跳转...
	如果跳转失败，轻点击<a href="<?php echo $_smarty_tpl->tpl_vars['toUrl']->value;?>
">链接</a></p>
  </div>
</div>
</body>
</html>
<!--  <?php echo '<script'; ?>
>
window.setTimeout(jump,1000);
<?php echo '</script'; ?>
>  -->






<?php }
}
