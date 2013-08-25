<?php /* Smarty version Smarty-3.1.14, created on 2013-08-25 18:38:16
         compiled from "templates/base/perm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1957975024520f58fa6fe640-32555416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58e684b15ed05c846329e394d51e97b697b78c93' => 
    array (
      0 => 'templates/base/perm.tpl',
      1 => 1377448681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1957975024520f58fa6fe640-32555416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_520f58fa73ab95_01112123',
  'variables' => 
  array (
    'postId' => 0,
    'postTitle' => 0,
    'postContent' => 0,
    'postDate' => 0,
    'postAuthor' => 0,
    'catId' => 0,
    'catTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520f58fa73ab95_01112123')) {function content_520f58fa73ab95_01112123($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('base/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="article">
            <div class="article_header"><a href="perm.php?id=<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['postTitle']->value;?>
</a></div>
            <div class="article_content"><?php echo $_smarty_tpl->tpl_vars['postContent']->value;?>
</div>
            <div class="article_footer">Le <?php echo $_smarty_tpl->tpl_vars['postDate']->value;?>
 par  <a href="#"><?php echo $_smarty_tpl->tpl_vars['postAuthor']->value;?>
</a> in <a href="#cat.php?id=<?php echo $_smarty_tpl->tpl_vars['catId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['catTitle']->value;?>
</a></div>
        </div>

<?php echo $_smarty_tpl->getSubTemplate ('base/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>