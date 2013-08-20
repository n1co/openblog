<?php
include('includes/config.inc.php');

$posts = get_posts();
$smarty->assign('posts', $posts);
$smarty->display("$theme/index.tpl");
?>