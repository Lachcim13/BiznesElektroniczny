<?php
<<<<<<< HEAD
/* Smarty version 3.1.48, created on 2024-11-28 20:18:31
=======
/* Smarty version 3.1.48, created on 2024-11-28 21:54:08
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  from '/var/www/html/themes/classic/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
<<<<<<< HEAD
  'unifunc' => 'content_6748c20741e022_71760931',
=======
  'unifunc' => 'content_6748d8709fbe46_95092691',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7da708fa5f5b903af83e745dc179c85d7c7f5a3d' => 
    array (
      0 => '/var/www/html/themes/classic/templates/layouts/layout-left-column.tpl',
<<<<<<< HEAD
      1 => 1732817112,
=======
      1 => 1702485415,
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_6748c20741e022_71760931 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6748d8709fbe46_95092691 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11500190496748c20741d028_63091313', 'right_column');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16507086826748d8709fa9a9_07493296', 'right_column');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18101291356748c20741d4a7_86828163', 'content_wrapper');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1952106536748d8709faef2_44828097', 'content_wrapper');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
<<<<<<< HEAD
class Block_11500190496748c20741d028_63091313 extends Smarty_Internal_Block
=======
class Block_16507086826748d8709fa9a9_07493296 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_11500190496748c20741d028_63091313',
=======
    0 => 'Block_16507086826748d8709fa9a9_07493296',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_8213742906748c20741d995_38285204 extends Smarty_Internal_Block
=======
class Block_44135236748d8709fb570_85743244 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
<<<<<<< HEAD
class Block_18101291356748c20741d4a7_86828163 extends Smarty_Internal_Block
=======
class Block_1952106536748d8709faef2_44828097 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_18101291356748c20741d4a7_86828163',
  ),
  'content' => 
  array (
    0 => 'Block_8213742906748c20741d995_38285204',
=======
    0 => 'Block_1952106536748d8709faef2_44828097',
  ),
  'content' => 
  array (
    0 => 'Block_44135236748d8709fb570_85743244',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="js-content-wrapper left-column col-xs-12 col-sm-8 col-md-9">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8213742906748c20741d995_38285204', 'content', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44135236748d8709fb570_85743244', 'content', $this->tplIndex);
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
