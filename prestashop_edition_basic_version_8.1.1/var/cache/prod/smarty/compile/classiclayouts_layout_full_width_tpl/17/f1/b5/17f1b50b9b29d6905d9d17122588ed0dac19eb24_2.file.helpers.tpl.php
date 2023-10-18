<?php
/* Smarty version 4.3.1, created on 2023-10-16 15:30:20
  from '/app/prestashop_edition_basic_version_8.1.1/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652d3aecde7b42_79196526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17f1b50b9b29d6905d9d17122588ed0dac19eb24' => 
    array (
      0 => '/app/prestashop_edition_basic_version_8.1.1/themes/classic/templates/_partials/helpers.tpl',
      1 => 1678745894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d3aecde7b42_79196526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/app/prestashop_edition_basic_version_8.1.1/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/17/f1/b5/17f1b50b9b29d6905d9d17122588ed0dac19eb24_2.file.helpers.tpl.php',
    'uid' => '17f1b50b9b29d6905d9d17122588ed0dac19eb24',
    'call_name' => 'smarty_template_function_renderLogo_719150221652d3aecde1817_01543507',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_719150221652d3aecde1817_01543507 */
if (!function_exists('smarty_template_function_renderLogo_719150221652d3aecde1817_01543507')) {
function smarty_template_function_renderLogo_719150221652d3aecde1817_01543507(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_719150221652d3aecde1817_01543507 */
}
