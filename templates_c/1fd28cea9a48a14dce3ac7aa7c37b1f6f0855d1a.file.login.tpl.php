<?php /* Smarty version Smarty-3.1.14, created on 2013-08-21 21:45:59
         compiled from "templates/base/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1380091610520f8ec8750ba8-99755916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fd28cea9a48a14dce3ac7aa7c37b1f6f0855d1a' => 
    array (
      0 => 'templates/base/login.tpl',
      1 => 1377114338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1380091610520f8ec8750ba8-99755916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_520f8ec8770d85_38676856',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520f8ec8770d85_38676856')) {function content_520f8ec8770d85_38676856($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('base/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<form method="POST" action="login.php" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?><p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }?>
        <input name="mail" type="text" class="input-block-level" placeholder="Email address">
        <input name="password" type="password" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
</form>
<?php echo $_smarty_tpl->getSubTemplate ('base/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>