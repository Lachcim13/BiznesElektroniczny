<?php
<<<<<<< HEAD
/* Smarty version 3.1.48, created on 2024-11-30 14:35:31
=======
/* Smarty version 3.1.48, created on 2024-11-30 14:27:11
>>>>>>> 1284c66d9 (improved css)
  from '/var/www/html/modules/welcome/views/templates/lost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
<<<<<<< HEAD
  'unifunc' => 'content_674b14a3e56f60_64037702',
=======
  'unifunc' => 'content_674b12afe01fc9_71383804',
>>>>>>> 1284c66d9 (improved css)
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc458509f8c85313d076b352253db6dc31390549' => 
    array (
      0 => '/var/www/html/modules/welcome/views/templates/lost.tpl',
      1 => 1732878096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_674b14a3e56f60_64037702 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_674b12afe01fc9_71383804 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 1284c66d9 (improved css)
?>
<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</p>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
    </div>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
    </div>
  </div>
</div>
<?php }
}
