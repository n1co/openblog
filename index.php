<?php
include('includes/config.inc.php');

if (isset($_GET['logout']))
{
    session_destroy();
    redirect_to('index.php');
}

$posts = get_posts();
$smarty->assign('posts', $posts);
$smarty->display("$theme/index.tpl");
?>