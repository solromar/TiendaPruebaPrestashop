<?php
/* Smarty version 4.3.1, created on 2023-10-16 15:30:20
  from '/app/prestashop_edition_basic_version_8.1.1/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652d3aecdcde16_11446669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09c8cce9c8911217b6c75ff5fc7a9332c2666710' => 
    array (
      0 => '/app/prestashop_edition_basic_version_8.1.1/themes/classic/templates/page.tpl',
      1 => 1678745894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d3aecdcde16_11446669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1236998875652d3aecdc9601_92106044', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_751973409652d3aecdc9bd8_89518948 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_18731963652d3aecdc98b7_10209366 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_751973409652d3aecdc9bd8_89518948', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_456777202652d3aecdccbb2_48879907 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1027711353652d3aecdcd095_21370384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1105844566652d3aecdcc8e0_05720804 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_456777202652d3aecdccbb2_48879907', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1027711353652d3aecdcd095_21370384', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1326507027652d3aecdcd7e1_80470753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_37418418652d3aecdcd5d1_89514838 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1326507027652d3aecdcd7e1_80470753', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1236998875652d3aecdc9601_92106044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1236998875652d3aecdc9601_92106044',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_18731963652d3aecdc98b7_10209366',
  ),
  'page_title' => 
  array (
    0 => 'Block_751973409652d3aecdc9bd8_89518948',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1105844566652d3aecdcc8e0_05720804',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_456777202652d3aecdccbb2_48879907',
  ),
  'page_content' => 
  array (
    0 => 'Block_1027711353652d3aecdcd095_21370384',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_37418418652d3aecdcd5d1_89514838',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1326507027652d3aecdcd7e1_80470753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18731963652d3aecdc98b7_10209366', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1105844566652d3aecdcc8e0_05720804', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37418418652d3aecdcd5d1_89514838', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
