<?php
/* Smarty version 3.1.30, created on 2016-12-12 20:24:42
  from "D:\PHP\studyPHP\MiGoArt\views\template\admin\public\menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584e970a6e6385_12951467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '806a85450b8ede9656f8e3bebde5b24ef365bed0' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MiGoArt\\views\\template\\admin\\public\\menu.html',
      1 => 1481473649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584e970a6e6385_12951467 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-3 col-md-2 sidebar">
	<ul class="nav nav-sidebar">
		<li class="active"><a href="#">概览</a></li>
	</ul>
    <ul class="nav nav-sidebar">
        <li><a href="">用户管理</a></li>
        <li><a href="">系统日志</a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="index.php?p=admin&c=category&a=oper">模块管理</a></li>
        <li><a href="index.php?p=admin&c=news&a=oper">内容管理</a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="">统计数据</a></li>
        <li><a href="">数据可视化</a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="">订单管理</a></li>
    </ul>
</div>
        
  <?php }
}
