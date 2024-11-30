<?php
<<<<<<< HEAD
/* Smarty version 3.1.48, created on 2024-11-30 14:35:31
=======
/* Smarty version 3.1.48, created on 2024-11-30 14:27:11
>>>>>>> 1284c66d9 (improved css)
  from '/var/www/html/admin-dev/themes/new-theme/template/components/layout/warning_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
<<<<<<< HEAD
  'unifunc' => 'content_674b14a3e6b2d1_55496019',
=======
  'unifunc' => 'content_674b12afe1c0f8_37034876',
>>>>>>> 1284c66d9 (improved css)
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78eb16426b39931bc8848b2fdb9a3d5b107e55e3' => 
    array (
      0 => '/var/www/html/admin-dev/themes/new-theme/template/components/layout/warning_messages.tpl',
      1 => 1732878095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_674b14a3e6b2d1_55496019 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_674b12afe1c0f8_37034876 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 1284c66d9 (improved css)
if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
  <div class="bootstrap">
    <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['warnings']->value) > 1) {?>
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d warnings.','sprintf'=>array(count($_smarty_tpl->tpl_vars['warnings']->value)),'d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>
</h4>
      <?php }?>
      <ul class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warnings']->value, 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
