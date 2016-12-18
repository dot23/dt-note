<?php
/* Smarty version 3.1.30, created on 2016-12-12 20:21:00
  from "D:\PHP\studyPHP\MiGoArt\views\template\home\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584e962ce39ad8_19138126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd39da1b33da3fd748dbba372d7523eaee6b88578' => 
    array (
      0 => 'D:\\PHP\\studyPHP\\MiGoArt\\views\\template\\home\\index\\index.html',
      1 => 1481535058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/public/header.html' => 1,
  ),
),false)) {
function content_584e962ce39ad8_19138126 (Smarty_Internal_Template $_smarty_tpl) {
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
  </head>
<!-- NAVBAR
================================================== -->
  <body>
  	<?php $_smarty_tpl->_subTemplateRender("file:home/public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="static/images/carousel001.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="static/images/carousel002.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
         <div class="item">
          <img class="four-slide" src="static/images/carousel003.jpg" alt="Four slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
         <div class="item">
          <img class="five-slide" src="static/images/carousel004.jpg" alt="Five slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

      <!-- START THE FEATURETTES -->
	  <div class="index-container">
    

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">米戈艺术工作室</h2>
          <h5>Mi-Go Art Studio</h5>
          <p class="lead">我工作室专注于游戏美术设计，影视动漫概念设计及相关领域的服务外包业务。
         	 工作室核心团队由经验丰富的概念设计师组成，个人从业经验均在6年以上，曾参与过多款AAA级主机游戏、
         	 手游、网游、卡牌以及影视项目的美术设计制作，商业项目经验丰富。<a href="#about">更多</a>     
          </p>
        </div>
        <div class="col-md-5">
          <a href="#about"><img class="featurette-image img-responsive center-block" src="static/images/index-img001.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

     

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">服务范围</h2>
          <p class="lead">游戏美术设计，影视动漫概念设计及相关领域的服务外包业务。</p><a href="#service">更多</a>  
        </div>
       <div class="col-md-5">
          <a href="#service"><img class="featurette-image img-responsive center-block" src="static/images/index-img002.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

    

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">米戈作品</h2>
          <p class="lead">主要经历的项目有：《神秘海域》、《最后生还者》、《血源诅咒》、《黑暗之魂3》、《化神降世》、《灵魂能力》、
          	《怪物猎人OL》、《Legend of the Cryptids》、《神秘世界》、《DOTA2》、《仙剑OL》、《一刀流》、《乐土OL》、《精灵王国》、《京城81号》等</p>
          	<a href="#product">更多</a>
        </div>
        <div class="col-md-5">
          <a href="#product"><img class="featurette-image img-responsive center-block" src="static/images/index-img003.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

    
      </div>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


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
