<?php
/* Smarty version 4.3.1, created on 2023-10-16 16:05:43
  from '/app/prestashop_edition_basic_version_8.1.1/admin710ansr8k8zhfdrtx46/themes/default/template/helpers/kpi/row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652d4337975402_24777486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3a44d3ef1733871c6e4f7fb1a1d481910e6e6bd' => 
    array (
      0 => '/app/prestashop_edition_basic_version_8.1.1/admin710ansr8k8zhfdrtx46/themes/default/template/helpers/kpi/row.tpl',
      1 => 1695899554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d4337975402_24777486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/prestashop_edition_basic_version_8.1.1/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="panel kpi-container">
	<?php if ($_smarty_tpl->tpl_vars['refresh']->value) {?>
		<div class="kpi-refresh"><button class="close refresh" type="button" onclick="refresh_kpis(true);"><i class="process-icon-refresh" style="font-size:1em"></i></button></div>
	<?php }?>
	<div class="row">
		<?php $_smarty_tpl->_assignInScope('col', (int)(12/smarty_modifier_count($_smarty_tpl->tpl_vars['kpis']->value)));?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kpis']->value, 'i', false, NULL, 'kpi', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_kpi']->value['iteration']++;
?>
			<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_kpi']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_kpi']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['col']->value+1) {?>
				</div>
				<div class="row">
			<?php }?>
			<div class="col-sm-6 col-lg-<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<?php }
}
