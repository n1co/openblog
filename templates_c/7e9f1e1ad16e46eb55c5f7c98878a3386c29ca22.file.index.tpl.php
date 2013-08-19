<?php /* Smarty version Smarty-3.1.14, created on 2013-08-19 14:56:49
         compiled from "templates/base/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146043721520e5e55abe974-60079243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e9f1e1ad16e46eb55c5f7c98878a3386c29ca22' => 
    array (
      0 => 'templates/base/index.tpl',
      1 => 1376917007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146043721520e5e55abe974-60079243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_520e5e55abf690_57018090',
  'variables' => 
  array (
    'name' => 0,
    'art_count' => 0,
    'posts' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e5e55abf690_57018090')) {function content_520e5e55abf690_57018090($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('base/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <h1>Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 !</h1><br />
    <div style="display: none; class="nb_art">
		<?php echo $_smarty_tpl->tpl_vars['art_count']->value;?>

                </div>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
        <div class="article" id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
            <div class="article_header"><a href="perm.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></div>
            <div class="article_content"><?php echo $_smarty_tpl->tpl_vars['i']->value['content'];?>
</div>
            <div class="article_footer">Le <?php echo $_smarty_tpl->tpl_vars['i']->value['created'];?>
 par  <a href="#"><?php echo $_smarty_tpl->tpl_vars['i']->value['author'];?>
</a> in <?php echo $_smarty_tpl->tpl_vars['i']->value['cat'];?>
</div>
        </div>
    <?php } ?>
<div class="loadmore">
		Loading...
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('base/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>