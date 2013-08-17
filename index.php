<?php
$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$starttime = $mtime; 

include('includes/config.inc.php');

$posts = get_posts();
$smarty->assign('posts', $posts);



   $mtime = microtime(); 
   $mtime = explode(" ",$mtime); 
   $mtime = $mtime[1] + $mtime[0]; 
   $endtime = $mtime; 
   $totaltime = ($endtime - $starttime); 
   
   $smarty->assign('execTime', round($totaltime));
$smarty->display("$theme/index.tpl");
?>