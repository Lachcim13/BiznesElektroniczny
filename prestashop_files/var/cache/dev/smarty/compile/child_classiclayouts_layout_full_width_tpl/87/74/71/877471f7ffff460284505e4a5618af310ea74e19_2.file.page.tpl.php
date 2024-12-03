<?php
/* Smarty version 3.1.48, created on 2024-12-03 14:06:19
  from '/var/www/html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674f024bc8daf5_57365510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '877471f7ffff460284505e4a5618af310ea74e19' => 
    array (
      0 => '/var/www/html/themes/classic/templates/page.tpl',
      1 => 1732878096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674f024bc8daf5_57365510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_283594261674f024bc89af6_10756604', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1644964950674f024bc8a564_77417405 extends Smarty_Internal_Block
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
class Block_12480206674f024bc89fb8_31026746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1644964950674f024bc8a564_77417405', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_598985419674f024bc8bb25_37908319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2010483534674f024bc8c103_39416737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2000024142674f024bc8b736_35504947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_598985419674f024bc8bb25_37908319', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2010483534674f024bc8c103_39416737', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_8861454674f024bc8cf02_51657178 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1573671572674f024bc8cab9_20145330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8861454674f024bc8cf02_51657178', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_283594261674f024bc89af6_10756604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_283594261674f024bc89af6_10756604',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_12480206674f024bc89fb8_31026746',
  ),
  'page_title' => 
  array (
    0 => 'Block_1644964950674f024bc8a564_77417405',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2000024142674f024bc8b736_35504947',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_598985419674f024bc8bb25_37908319',
  ),
  'page_content' => 
  array (
    0 => 'Block_2010483534674f024bc8c103_39416737',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1573671572674f024bc8cab9_20145330',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8861454674f024bc8cf02_51657178',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12480206674f024bc89fb8_31026746', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2000024142674f024bc8b736_35504947', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1573671572674f024bc8cab9_20145330', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
