<?php
/* Smarty version 3.1.48, created on 2025-01-09 17:49:23
  from '/var/www/html/admin-dev/themes/new-theme/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_677ffe13925110_02319119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79a4c7e3e0d65c5c293825381cdcd1d6a01d9477' => 
    array (
      0 => '/var/www/html/admin-dev/themes/new-theme/template/footer.tpl',
      1 => 1732922125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_677ffe13925110_02319119 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer" class="bootstrap">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

</div>
<?php }
}
