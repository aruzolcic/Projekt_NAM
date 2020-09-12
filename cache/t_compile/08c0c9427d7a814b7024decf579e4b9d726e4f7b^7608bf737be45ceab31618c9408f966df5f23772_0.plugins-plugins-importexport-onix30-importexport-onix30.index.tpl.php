<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-12 14:11:24
  from 'plugins-plugins-importexport-onix30-importexport-onix30:index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5cbaeca7f749_09140925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7608bf737be45ceab31618c9408f966df5f23772' => 
    array (
      0 => 'plugins-plugins-importexport-onix30-importexport-onix30:index.tpl',
      1 => 1598547766,
      2 => 'plugins-plugins-importexport-onix30-importexport-onix30',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5f5cbaeca7f749_09140925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pageTitle', "plugins.importexport.onix30.displayName");
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="pkp_page_content">
	<?php if (!$_smarty_tpl->tpl_vars['currentContext']->value->getData('publisher') || !$_smarty_tpl->tpl_vars['currentContext']->value->getData('location') || !$_smarty_tpl->tpl_vars['currentContext']->value->getData('codeType') || !$_smarty_tpl->tpl_vars['currentContext']->value->getData('codeValue')) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.onix30.pressMissingFields"),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(function() {
				// Attach the form handler.
				$('#exportXmlForm').pkpHandler('$.pkp.controllers.form.FormHandler');
			});
		<?php echo '</script'; ?>
>
		<form id="exportXmlForm" class="pkp_form" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('path'=>"export"),$_smarty_tpl ) );?>
" method="post">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

			<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"exportForm"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"exportForm"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
					<div id="export-submissions-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
">
						<select-submissions-list-panel
							v-bind="components.exportSubmissionsListPanel"
							@set="set"
						/>
					</div>
					<?php echo '<script'; ?>
 type="text/javascript">
						pkp.registry.init('export-submissions-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'Container', <?php echo json_encode($_smarty_tpl->tpl_vars['exportSubmissionsListData']->value);?>
);
					<?php echo '</script'; ?>
>
				<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('submitText'=>"plugins.importexport.native.export",'hideCancel'=>"true"),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"exportForm"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</form>
	<?php }?>
</div>


<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
