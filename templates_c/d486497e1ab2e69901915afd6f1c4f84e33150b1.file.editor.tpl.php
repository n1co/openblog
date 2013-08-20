<?php /* Smarty version Smarty-3.1.14, created on 2013-08-20 16:27:56
         compiled from "templates/base/editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211466721252137988aebe42-36473599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd486497e1ab2e69901915afd6f1c4f84e33150b1' => 
    array (
      0 => 'templates/base/editor.tpl',
      1 => 1377008873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211466721252137988aebe42-36473599',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52137988b1dcb3_65433440',
  'variables' => 
  array (
    'postId' => 0,
    'postTitle' => 0,
    'postContent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52137988b1dcb3_65433440')) {function content_52137988b1dcb3_65433440($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('base/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
<form method="POST" action="editor.php?id=<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
">
<input name="title" id="editor" type="text" class="input-block-level" value="<?php echo $_smarty_tpl->tpl_vars['postTitle']->value;?>
">
<textarea id="editor" name="content" style="width: 100%; height: 300px;">
       <?php echo $_smarty_tpl->tpl_vars['postContent']->value;?>

</textarea>
       <button class="btn btn-large btn-primary" type="submit">Save</button>
</form>
<?php echo $_smarty_tpl->getSubTemplate ('base/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>