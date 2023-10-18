<?php
/* Smarty version 4.3.1, created on 2023-10-16 16:34:43
  from '/app/prestashop_edition_basic_version_8.1.1/themes/classic/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652d4a03c2eef9_20229496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46821479e2b79d562d8a16c4acb9425d03a5417e' => 
    array (
      0 => '/app/prestashop_edition_basic_version_8.1.1/themes/classic/templates/catalog/_partials/category-footer.tpl',
      1 => 1678745894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d4a03c2eef9_20229496 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
