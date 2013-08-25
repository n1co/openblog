<?php
include('includes/config.inc.php');
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) 
{
    redirect_to('index.php');
}

if (isset($_GET['delete']))
{
    delete_post($_GET['delete']);
    redirect_to('admin.php');
}
//WIP PLUGINS
$plugins=get_plugins();

foreach($plugins as $this_plugin)
{
   $r_check_if_installed=mysql_query("SELECT p.id FROM `plugins` p WHERE p.plugin_file='".mysql_real_escape_string($this_plugin)."' AND p.enabled='1'");
   if (mysql_num_rows($r_check_if_installed))
   {
      echo $this_plugin.' is installed.<br />';
   } 
   else 
   {
      echo $this_plugin.' not installed.<br />';
   }
}
//print_r(get_plugins());
//WIP PLUGINS
$posts = get_posts_admin();
$smarty->assign('posts', $posts);
$smarty->display("$theme/admin.tpl");
?>
