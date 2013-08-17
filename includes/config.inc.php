<?php
define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'blog');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', 'fezbio');

require_once('includes/lib/Smarty.class.php');
require_once('includes/posts.inc.php');
require_once('includes/functions.inc.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';

$theme = 'base'; 
$smarty->assign('theme',$theme); 
?>
