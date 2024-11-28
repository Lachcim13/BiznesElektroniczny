<?php
<<<<<<< HEAD
/* Smarty version 3.1.48, created on 2024-11-28 21:51:14
=======
/* Smarty version 3.1.48, created on 2024-11-28 21:15:29
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
<<<<<<< HEAD
  'unifunc' => 'content_6748d7c2db1158_63911419',
=======
  'unifunc' => 'content_6748cf6103a207_21091719',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03235412c82fe3af55539163b9c3686a7a1ffea4' => 
    array (
      0 => 'module:productcommentsviewstempl',
<<<<<<< HEAD
      1 => 1732817092,
=======
      1 => 1693383296,
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_6748d7c2db1158_63911419 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6748cf6103a207_21091719 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?><!-- begin /var/www/html/modules/productcomments/views/templates/hook/average-grade-stars.tpl -->
<?php if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
  <div class="comments-note">
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grade','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</span>
    <div class="grade-stars" data-grade="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grade']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
  </div>
<?php }?>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/average-grade-stars.tpl --><?php }
}
