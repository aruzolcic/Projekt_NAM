<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-12 14:04:56
  from 'app:linkActionlinkActionButto' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5cb9680ac0b2_88233015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0fab54edb4f352fd370b8a0421de7d73183acec' => 
    array (
      0 => 'app:linkActionlinkActionButto',
      1 => 1598547943,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5cb9680ac0b2_88233015 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="#" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonId']->value ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value->getHoverTitle() ));?>
" class="pkp_controllers_linkAction pkp_linkaction_<?php echo $_smarty_tpl->tpl_vars['action']->value->getId();?>
 pkp_linkaction_icon_<?php echo $_smarty_tpl->tpl_vars['action']->value->getImage();?>
"><?php if ($_smarty_tpl->tpl_vars['anyhtml']->value) {
echo $_smarty_tpl->tpl_vars['action']->value->getTitle();
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value->getTitle() ));
}?></a>
<?php }
}
