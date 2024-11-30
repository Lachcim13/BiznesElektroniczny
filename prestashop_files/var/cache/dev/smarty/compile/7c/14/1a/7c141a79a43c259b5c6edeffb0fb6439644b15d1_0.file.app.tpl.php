<?php
/* Smarty version 3.1.48, created on 2024-11-30 14:34:30
  from '/var/www/html/modules/psxmarketingwithgoogle/views/templates/admin/app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674b14664007d7_97580476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c141a79a43c259b5c6edeffb0fb6439644b15d1' => 
    array (
      0 => '/var/www/html/modules/psxmarketingwithgoogle/views/templates/admin/app.tpl',
      1 => 1732917439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b14664007d7_97580476 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://assets.prestashop3.com/ext/cloudsync-merchant-sync-consent/latest/cloudsync-cdc.js" rel=preload as=script>
<link href="https://unpkg.com/prestashop_accounts_vue_components@5" rel=preload as=script>

<div id="psxMktgWithGoogleApp"></div>
<?php echo '<script'; ?>
 src="https://assets.prestashop3.com/ext/cloudsync-merchant-sync-consent/latest/cloudsync-cdc.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://unpkg.com/prestashop_accounts_vue_components@5"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://unpkg.com/@prestashopcorp/billing-cdc/dist/bundle.js" rel=preload><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['psxMktgWithGoogleLiveMode']->value) {?>
  <?php echo '<script'; ?>
 type="module" src="http://localhost:5173/@vite/client"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="module" src="http://localhost:5173/src/main.ts"><?php echo '</script'; ?>
>
<?php } else { ?>
  <link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>
  <?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathApp']->value,'htmlall','UTF-8' ));?>
" type="module"><?php echo '</script'; ?>
>
<?php }?>
<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
