<?php
/* Smarty version 3.1.48, created on 2024-12-03 04:36:50
  from '/var/www/html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674e7cd2f2b917_80559989',
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
function content_674e7cd2f2b917_80559989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2146964972674e7cd2f23410_03860472', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_377388803674e7cd2f23e72_17063289 extends Smarty_Internal_Block
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
class Block_1102289964674e7cd2f238d9_62193508 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_377388803674e7cd2f23e72_17063289', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1960725725674e7cd2f28e23_30956118 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1787488201674e7cd2f299c1_32220781 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1107151338674e7cd2f284f4_78895254 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1960725725674e7cd2f28e23_30956118', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1787488201674e7cd2f299c1_32220781', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1414895192674e7cd2f2acf4_89483719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_590857674674e7cd2f2a746_73612890 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1414895192674e7cd2f2acf4_89483719', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2146964972674e7cd2f23410_03860472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2146964972674e7cd2f23410_03860472',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1102289964674e7cd2f238d9_62193508',
  ),
  'page_title' => 
  array (
    0 => 'Block_377388803674e7cd2f23e72_17063289',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1107151338674e7cd2f284f4_78895254',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1960725725674e7cd2f28e23_30956118',
  ),
  'page_content' => 
  array (
    0 => 'Block_1787488201674e7cd2f299c1_32220781',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_590857674674e7cd2f2a746_73612890',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1414895192674e7cd2f2acf4_89483719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1102289964674e7cd2f238d9_62193508', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1107151338674e7cd2f284f4_78895254', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_590857674674e7cd2f2a746_73612890', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
