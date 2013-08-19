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

$smarty->assign('template', $theme);
$smarty->assign('name','Zbouby');
$smarty->assign('siteName','Zboubz\'s Blog');

open_database();
$postquery="SELECT COUNT(*) AS id FROM post";
$result = mysql_query($postquery) or die(mysql_error());
$num = mysql_fetch_array($result);
$smarty->assign('art_count', $num["id"]);
?>
