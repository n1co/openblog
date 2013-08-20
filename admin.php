<?php
include('includes/config.inc.php');
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) 
{
    //header ("Location: index.php");
}

if (isset($_GET['delete']))
{
    delete_post($_GET['delete']);
}

$posts = get_posts_admin();
$smarty->assign('posts', $posts);
$smarty->display("$theme/admin.tpl");
?>
