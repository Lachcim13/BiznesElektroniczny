<?php
/* Smarty version 3.1.48, created on 2024-12-03 13:47:26
  from '/var/www/html/themes/classic/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674efdde775d50_55731429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1056add6c2960230d756b3e3b3e3e80a8706c1f' => 
    array (
      0 => '/var/www/html/themes/classic/templates/layouts/layout-left-column.tpl',
      1 => 1732922128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674efdde775d50_55731429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1127952789674efdde7748b2_08057351', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_968083890674efdde774e06_41253560', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_1127952789674efdde7748b2_08057351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1127952789674efdde7748b2_08057351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_847173939674efdde775460_25629423 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_968083890674efdde774e06_41253560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_968083890674efdde774e06_41253560',
  ),
  'content' => 
  array (
    0 => 'Block_847173939674efdde775460_25629423',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="js-content-wrapper left-column col-xs-12 col-sm-8 col-md-9">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_847173939674efdde775460_25629423', 'content', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
