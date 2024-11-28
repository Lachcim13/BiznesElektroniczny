<?php
<<<<<<< HEAD
/* Smarty version 3.1.48, created on 2024-11-28 20:18:31
=======
/* Smarty version 3.1.48, created on 2024-11-28 21:54:08
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  from '/var/www/html/themes/classic/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
<<<<<<< HEAD
  'unifunc' => 'content_6748c2074a1470_43578601',
=======
  'unifunc' => 'content_6748d870add7c7_28897839',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8399032d552fc8c30a834060e0bdb3bb0ffd31a1' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/breadcrumb.tpl',
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
function content_6748c2074a1470_43578601 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6748d870add7c7_28897839 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol>
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6205985536748c20749fc34_93587925', 'breadcrumb');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7918153776748d870adb5b4_61093749', 'breadcrumb');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

  </ol>
</nav>
<?php }
/* {block 'breadcrumb_item'} */
<<<<<<< HEAD
class Block_11420068626748c2074a02d1_07719534 extends Smarty_Internal_Block
=======
class Block_20379402696748d870adbf79_83140684 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li>
            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></a>
            <?php } else { ?>
              <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
          </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
<<<<<<< HEAD
class Block_6205985536748c20749fc34_93587925 extends Smarty_Internal_Block
=======
class Block_7918153776748d870adb5b4_61093749 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
    0 => 'Block_6205985536748c20749fc34_93587925',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_11420068626748c2074a02d1_07719534',
=======
    0 => 'Block_7918153776748d870adb5b4_61093749',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_20379402696748d870adbf79_83140684',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11420068626748c2074a02d1_07719534', 'breadcrumb_item', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20379402696748d870adbf79_83140684', 'breadcrumb_item', $this->tplIndex);
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
