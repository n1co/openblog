<?php
include('includes/config.inc.php');

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) 
{
    redirect_to('index.php');
}

$article = get_post_by_id($_GET['id']);
$smarty->assign('article', $article);
      
$smarty->assign('postId', $article['id']);
$smarty->assign('postTitle', $article['title']);
$smarty->assign('postAuthor', $article['author']);
$smarty->assign('postDate', $article['created']);
$smarty->assign('postCat', $article['cat']);
$smarty->assign('postContent', $article['content']);

if (isset($_POST['content']))
{
    update_post($_POST['title'], $_POST['content'], $_GET['id']);
    redirect_to('admin.php');
}

$smarty->display("$theme/editor.tpl");
?>
