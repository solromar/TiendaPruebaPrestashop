<?php
/* Smarty version 4.3.1, created on 2023-10-16 15:30:20
  from '/app/prestashop_edition_basic_version_8.1.1/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652d3aecdc4e92_26242303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b08f909318c2c0524f8c48caf468b39f55ed6dd' => 
    array (
      0 => '/app/prestashop_edition_basic_version_8.1.1/themes/classic/templates/index.tpl',
      1 => 1678745894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d3aecdc4e92_26242303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_949213466652d3aecdc3689_24010691', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1425137628652d3aecdc3983_45388590 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2027563269652d3aecdc40e3_28999397 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_889764345652d3aecdc3e20_65534000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2027563269652d3aecdc40e3_28999397', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_949213466652d3aecdc3689_24010691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_949213466652d3aecdc3689_24010691',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1425137628652d3aecdc3983_45388590',
  ),
  'page_content' => 
  array (
    0 => 'Block_889764345652d3aecdc3e20_65534000',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2027563269652d3aecdc40e3_28999397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1425137628652d3aecdc3983_45388590', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_889764345652d3aecdc3e20_65534000', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
