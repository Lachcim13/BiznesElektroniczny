<?php
<<<<<<< HEAD
/* Smarty version 3.1.48, created on 2024-11-28 20:18:31
=======
/* Smarty version 3.1.48, created on 2024-11-28 21:54:08
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  from '/var/www/html/themes/classic/templates/_partials/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
<<<<<<< HEAD
  'unifunc' => 'content_6748c20749c031_77335670',
=======
  'unifunc' => 'content_6748d870acf0d8_17740493',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35498cde90bd44dbd1cf3c0ad2862b8545e30b03' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/notifications.tpl',
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
function content_6748c20749c031_77335670 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6748d870acf0d8_17740493 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4793494566748c207498e30_37533529', 'notifications_error');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210844606748d870aca4b7_10632227', 'notifications_error');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18233774276748c207499ce0_59347145', 'notifications_warning');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5208159206748d870acbab6_15437601', 'notifications_warning');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15740853446748c20749a8d1_73226597', 'notifications_success');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10840741036748d870accea6_44662927', 'notifications_success');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14709110616748c20749b5f8_58507705', 'notifications_info');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9746987086748d870acdf43_95464927', 'notifications_info');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

    <?php }?>
  </div>
</aside>
<?php }
}
/* {block 'notifications_error'} */
<<<<<<< HEAD
class Block_4793494566748c207498e30_37533529 extends Smarty_Internal_Block
=======
class Block_210844606748d870aca4b7_10632227 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'notifications_error' => 
  array (
<<<<<<< HEAD
    0 => 'Block_4793494566748c207498e30_37533529',
=======
    0 => 'Block_210844606748d870aca4b7_10632227',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
<<<<<<< HEAD
class Block_18233774276748c207499ce0_59347145 extends Smarty_Internal_Block
=======
class Block_5208159206748d870acbab6_15437601 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
<<<<<<< HEAD
    0 => 'Block_18233774276748c207499ce0_59347145',
=======
    0 => 'Block_5208159206748d870acbab6_15437601',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
<<<<<<< HEAD
class Block_15740853446748c20749a8d1_73226597 extends Smarty_Internal_Block
=======
class Block_10840741036748d870accea6_44662927 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'notifications_success' => 
  array (
<<<<<<< HEAD
    0 => 'Block_15740853446748c20749a8d1_73226597',
=======
    0 => 'Block_10840741036748d870accea6_44662927',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
<<<<<<< HEAD
class Block_14709110616748c20749b5f8_58507705 extends Smarty_Internal_Block
=======
class Block_9746987086748d870acdf43_95464927 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'notifications_info' => 
  array (
<<<<<<< HEAD
    0 => 'Block_14709110616748c20749b5f8_58507705',
=======
    0 => 'Block_9746987086748d870acdf43_95464927',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_info'} */
}
