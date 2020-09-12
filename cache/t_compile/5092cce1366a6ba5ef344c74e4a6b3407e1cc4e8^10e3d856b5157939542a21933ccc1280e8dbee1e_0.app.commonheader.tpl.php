<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-12 14:04:56
  from 'app:commonheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5cb96891ec02_71080214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e3d856b5157939542a21933ccc1280e8dbee1e' => 
    array (
      0 => 'app:commonheader.tpl',
      1 => 1598547861,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'core:common/header.tpl' => 1,
  ),
),false)) {
function content_5f5cb96891ec02_71080214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "appSpecificMenuItems", null);?>
	<?php if (array_intersect(array(ROLE_ID_MANAGER,ROLE_ID_SUB_EDITOR),$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
		<li><a name="catalog" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"manageCatalog"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.catalog"),$_smarty_tpl ) );?>
</a></li>
	<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("core:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('appSpecificMenuItems'=>$_smarty_tpl->tpl_vars['appSpecificMenuItems']->value), 0, false);
}
}
