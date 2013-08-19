<?php /* Smarty version Smarty-3.1.14, created on 2013-08-19 15:07:25
         compiled from "templates/base/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1266976987520e6bb44bd565-36226527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b064cc9713db2698525354c56d85dbb7f8bc69ec' => 
    array (
      0 => 'templates/base/header.tpl',
      1 => 1376917642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1266976987520e6bb44bd565-36226527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_520e6bb44bd9c6_60491363',
  'variables' => 
  array (
    'siteName' => 0,
    'postTitle' => 0,
    'template' => 0,
    'art_count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e6bb44bd9c6_60491363')) {function content_520e6bb44bd9c6_60491363($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['postTitle']->value)){?> - <?php echo $_smarty_tpl->tpl_vars['postTitle']->value;?>
<?php }?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/main.css">
    <link href="includes/bootstrap/css/responsive.css" rel="stylesheet" media="screen">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="includes/scrolling.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
	var load = false;
	var offset = $('.article:last').offset(); 
	$(window).scroll(function(){
		if((offset.top-$(window).height() <= $(window).scrollTop()) 
		&& load==false && ($('.article').size()>=5) && 
		($('.article').size()!=<?php echo $_smarty_tpl->tpl_vars['art_count']->value;?>
)){
			load = true;
			var last_id = $('.article:last').attr('id');
			$('.loadmore').show();
			$.ajax({
				url: './ajax_article.php', type: 'get', data: 'last='+last_id,
				success: function(data) {
					$('.loadmore').fadeOut(500);
					$('.article:last').after(data);
					offset = $('.article:last').offset();
					load = false;}});}});});
</script>
  </head>
  <body>
      <div id="wrap">
          <div class="navbar navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="login.php">Login</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
          <div class="container"><?php }} ?>