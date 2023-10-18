<?php
/* Smarty version 4.3.1, created on 2023-10-16 15:38:00
  from '/app/prestashop_edition_basic_version_8.1.1/pdf/invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652d3cb8aea670_91607798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0c1f418ec5d321ce14fc12f3b23ef768b03aa7a' => 
    array (
      0 => '/app/prestashop_edition_basic_version_8.1.1/pdf/invoice.shipping-tab.tpl',
      1 => 1695899554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d3cb8aea670_91607798 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
