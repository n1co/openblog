<?php
include('includes/config.inc.php');

$article = get_post_by_id($_GET['id']);
$smarty->assign('article', $article);
      
$smarty->assign('postId', $article['id']);
$smarty->assign('postTitle', $article['title']);
$smarty->assign('postAuthor', $article['author']);
$smarty->assign('postDate', $article['created']);
$smarty->assign('postCat', $article['cat']);
$smarty->assign('postContent', $article['content']);

$smarty->display("$theme/perm.tpl");
?>
