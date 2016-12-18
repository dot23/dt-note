<?php
/* Smarty version 3.1.30, created on 2016-12-15 15:03:30
  from "D:\PHP\studyPHP\MyDimension\views\template\home\public\carousel.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58524042a54815_28599568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9145cd52f7fdbe0e03ed5a9fb611acbfadee069e' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MyDimension\\views\\template\\home\\public\\carousel.html',
      1 => 1481785409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58524042a54815_28599568 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
	<ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
       <li data-target="#myCarousel" data-slide-to="4"></li>
     </ol>
      	<div class="carousel-inner" role="listbox">
        	<div class="item active">
          		<img class="first-slide" src="static/images/carousel000.jpg" alt="First slide">
        	</div>
        	<div class="item">
          		<img class="second-slide" src="static/images/carousel001.jpg" alt="Second slide">
          	</div>
       		<div class="item">
        		<img class="third-slide" src="static/images/carousel002.jpg" alt="Third slide">
       		</div>
         	<div class="item">
          		<img class="four-slide" src="static/images/carousel003.jpg" alt="Four slide">
        	</div>
         	<div class="item">
          		<img class="five-slide" src="static/images/carousel004.jpg" alt="Five slide">
          	</div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div><!-- /.carousel --><?php }
}
