<?php /* Smarty version Smarty-3.1.14, created on 2013-08-25 20:14:21
         compiled from "templates/base/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181700499952137473c369e0-27200321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e04b396abef8a7837941f5f252f1f189fbf644b0' => 
    array (
      0 => 'templates/base/admin.tpl',
      1 => 1377454460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181700499952137473c369e0-27200321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521374741dea65_68997071',
  'variables' => 
  array (
    'posts' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521374741dea65_68997071')) {function content_521374741dea65_68997071($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('base/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
    $(function() {
        $("#dialog-confirm").dialog({
            autoOpen: false,
            modal: true
        });
        $( ".confirmation" )
                        .button()
			.click(function(e) {
                                var url = $(this).attr("href");
                                e.preventDefault();
                                $( "#dialog-confirm" ).dialog({
                        autoOpen: false,
			resizable: false,
			height:200,
                        width:300,
			modal: true,
			buttons: {
				"Confirm": function() {
					window.location.href = url;
				},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			}
		});
				$( "#dialog-confirm" ).dialog( "open" );
			});
		
                
	});
</script>

<table id="posts_overall">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
        <tr class="arts">
            <td><a href="perm.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></td>
            <td><a href="editor.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Edit</a></td>
            <td><a href="admin.php?delete=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="confirmation">Delete</a></td>
        </tr>
    <?php } ?>
</table>
<div id="dialog-confirm" title="Remove this post ?">
	<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Confirm you want to delete this post ?</p>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('base/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>