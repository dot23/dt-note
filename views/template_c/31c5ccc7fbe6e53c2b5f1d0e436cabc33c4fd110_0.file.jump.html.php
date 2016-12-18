<?php
/* Smarty version 3.1.30, created on 2016-12-13 00:47:46
  from "D:\PHP\studyPHP\MiGoArt\views\template\public\jump.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584ed4b2e69896_24629121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31c5ccc7fbe6e53c2b5f1d0e436cabc33c4fd110' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MiGoArt\\views\\template\\public\\jump.html',
      1 => 1480904249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584ed4b2e69896_24629121 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
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
<div class="content">
	<h1>跳转中...</h1>
	<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
！！！<br/><b id="seconds"><?php echo $_smarty_tpl->tpl_vars['seconds']->value;?>
</b>秒后跳转...
	如果跳转失败，轻点击<a href="<?php echo $_smarty_tpl->tpl_vars['toUrl']->value;?>
">链接</a></p>
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
