<?php
/* Smarty version 3.1.48, created on 2024-12-03 03:45:29
  from '/var/www/html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674e70c98bac56_43127967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '877471f7ffff460284505e4a5618af310ea74e19' => 
    array (
      0 => '/var/www/html/themes/classic/templates/page.tpl',
      1 => 1732922128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674e70c98bac56_43127967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202108105674e70c98b4f09_11918675', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1756105715674e70c98b5596_30119049 extends Smarty_Internal_Block
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
class Block_1620096584674e70c98b51f8_46791339 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1756105715674e70c98b5596_30119049', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1727668329674e70c98b8e99_26463781 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_691395021674e70c98b9465_06098387 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1633819890674e70c98b8aa9_91855502 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1727668329674e70c98b8e99_26463781', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_691395021674e70c98b9465_06098387', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_497351933674e70c98ba0c3_58782684 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_782856659674e70c98b9d41_16393784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_497351933674e70c98ba0c3_58782684', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_202108105674e70c98b4f09_11918675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_202108105674e70c98b4f09_11918675',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1620096584674e70c98b51f8_46791339',
  ),
  'page_title' => 
  array (
    0 => 'Block_1756105715674e70c98b5596_30119049',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1633819890674e70c98b8aa9_91855502',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1727668329674e70c98b8e99_26463781',
  ),
  'page_content' => 
  array (
    0 => 'Block_691395021674e70c98b9465_06098387',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_782856659674e70c98b9d41_16393784',
  ),
  'page_footer' => 
  array (
    0 => 'Block_497351933674e70c98ba0c3_58782684',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1620096584674e70c98b51f8_46791339', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1633819890674e70c98b8aa9_91855502', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_782856659674e70c98b9d41_16393784', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
