<!DOCTYPE html>
<html>
  <head>
    <title>{$siteName}{if isset($postTitle)} - {$postTitle}{/if}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="templates/{$template}/main.css">
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
		($('.article').size()!={$art_count})){
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
            <a class="navbar-brand" href="#">{$siteName}</a>
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
                  <li class="dropdown-header">TEST</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
          <div class="container">