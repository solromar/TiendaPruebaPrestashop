<?php
/* Smarty version 4.3.1, created on 2023-10-16 15:31:35
  from '/app/prestashop_edition_basic_version_8.1.1/admin710ansr8k8zhfdrtx46/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652d3b377b2946_90888377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '870553315d43e21451b6367c5a2449575669e31b' => 
    array (
      0 => '/app/prestashop_edition_basic_version_8.1.1/admin710ansr8k8zhfdrtx46/themes/new-theme/template/content.tpl',
      1 => 1695899554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d3b377b2946_90888377 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
