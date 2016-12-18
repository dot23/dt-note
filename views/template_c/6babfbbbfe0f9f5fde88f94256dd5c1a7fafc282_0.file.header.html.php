<?php
/* Smarty version 3.1.30, created on 2016-12-15 22:42:27
  from "D:\PHP\studyPHP\MyDimension\views\template\admin\public\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5852abd3d39d99_99625655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6babfbbbfe0f9f5fde88f94256dd5c1a7fafc282' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MyDimension\\views\\template\\admin\\public\\header.html',
      1 => 1481812940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5852abd3d39d99_99625655 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MyDimension</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">控制台</a></li>
            <li><a href="#">设置</a></li>
            <li><a href="#">帮助</a></li>
            <li><a href="index.php?p=admin&c=user&a=logout">退出</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="搜索...">
          </form>
        </div>
      </div>
    </nav>
<?php }
}
