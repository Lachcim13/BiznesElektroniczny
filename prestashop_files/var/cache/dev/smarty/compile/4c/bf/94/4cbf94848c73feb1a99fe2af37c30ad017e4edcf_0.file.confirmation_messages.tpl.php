<?php
<<<<<<< HEAD
/* Smarty version 3.1.48, created on 2024-11-30 14:35:31
=======
/* Smarty version 3.1.48, created on 2024-11-30 14:27:11
>>>>>>> 1284c66d9 (improved css)
  from '/var/www/html/admin-dev/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
<<<<<<< HEAD
  'unifunc' => 'content_674b14a3e68fa0_73839986',
=======
  'unifunc' => 'content_674b12afe19502_98660468',
>>>>>>> 1284c66d9 (improved css)
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cbf94848c73feb1a99fe2af37c30ad017e4edcf' => 
    array (
      0 => '/var/www/html/admin-dev/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1732878095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_674b14a3e68fa0_73839986 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_674b12afe19502_98660468 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 1284c66d9 (improved css)
if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
