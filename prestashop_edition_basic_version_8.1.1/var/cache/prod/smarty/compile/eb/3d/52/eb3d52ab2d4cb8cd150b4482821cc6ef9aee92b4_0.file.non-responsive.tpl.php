<?php
/* Smarty version 4.3.1, created on 2023-10-16 15:31:35
  from '/app/prestashop_edition_basic_version_8.1.1/admin710ansr8k8zhfdrtx46/themes/new-theme/template/components/layout/non-responsive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652d3b37876753_75822504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb3d52ab2d4cb8cd150b4482821cc6ef9aee92b4' => 
    array (
      0 => '/app/prestashop_edition_basic_version_8.1.1/admin710ansr8k8zhfdrtx46/themes/new-theme/template/components/layout/non-responsive.tpl',
      1 => 1695899554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d3b37876753_75822504 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="non-responsive" class="js-non-responsive">
  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Oh no!'),$_smarty_tpl ) );?>
</h1>
  <p class="mt-3">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The mobile version of this page is not available yet.'),$_smarty_tpl ) );?>

  </p>
  <p class="mt-2">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please use a desktop computer to access this page, until is adapted to mobile.'),$_smarty_tpl ) );?>

  </p>
  <p class="mt-2">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thank you.'),$_smarty_tpl ) );?>

  </p>
  <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_tab_link']->value,'html','UTF-8' ));?>
" class="btn btn-primary py-1 mt-3">
    <i class="material-icons rtl-flip">arrow_back</i>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back','d'=>'Admin.Global'),$_smarty_tpl ) );?>

  </a>
</div>
<?php }
}
