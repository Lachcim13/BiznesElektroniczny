<?php
/* Smarty version 3.1.48, created on 2024-12-03 12:38:16
  from '/var/www/html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674eeda808e5c1_21598141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bb2e0c71a57b4d9dfc73e20efa991854819bd9e' => 
    array (
      0 => '/var/www/html/themes/classic/templates/index.tpl',
      1 => 1733161434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674eeda808e5c1_21598141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_320306034674eeda808d527_06205800', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1183145938674eeda808d811_31571653 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1944969701674eeda808dd72_36294812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1487340838674eeda808dbd2_97358105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1944969701674eeda808dd72_36294812', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_320306034674eeda808d527_06205800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_320306034674eeda808d527_06205800',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1183145938674eeda808d811_31571653',
  ),
  'page_content' => 
  array (
    0 => 'Block_1487340838674eeda808dbd2_97358105',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1944969701674eeda808dd72_36294812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1183145938674eeda808d811_31571653', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1487340838674eeda808dbd2_97358105', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
