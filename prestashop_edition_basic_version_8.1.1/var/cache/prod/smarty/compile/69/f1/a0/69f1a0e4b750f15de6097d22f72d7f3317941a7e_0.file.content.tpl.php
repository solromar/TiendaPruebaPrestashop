<?php
/* Smarty version 4.3.1, created on 2023-10-16 15:31:26
  from '/app/prestashop_edition_basic_version_8.1.1/admin710ansr8k8zhfdrtx46/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652d3b2ea35ee2_49542443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69f1a0e4b750f15de6097d22f72d7f3317941a7e' => 
    array (
      0 => '/app/prestashop_edition_basic_version_8.1.1/admin710ansr8k8zhfdrtx46/themes/default/template/content.tpl',
      1 => 1695899554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d3b2ea35ee2_49542443 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
