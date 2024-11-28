<?php
<<<<<<< HEAD
/* Smarty version 3.1.48, created on 2024-11-28 20:18:31
=======
/* Smarty version 3.1.48, created on 2024-11-28 21:54:08
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  from '/var/www/html/themes/classic/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
<<<<<<< HEAD
  'unifunc' => 'content_6748c207405469_13043483',
=======
  'unifunc' => 'content_6748d8709d5ef6_48492083',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b36ec750c807de74a990092244baa3a1de5909c' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/listing/category.tpl',
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
    'file:catalog/_partials/category-header.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_6748c207405469_13043483 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6748d8709d5ef6_48492083 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18345966636748c2073fca07_83825852', 'product_list_header');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11022827856748d8709d4255_13844739', 'product_list_header');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
<<<<<<< HEAD
class Block_18345966636748c2073fca07_83825852 extends Smarty_Internal_Block
=======
class Block_11022827856748d8709d4255_13844739 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'product_list_header' => 
  array (
<<<<<<< HEAD
    0 => 'Block_18345966636748c2073fca07_83825852',
=======
    0 => 'Block_11022827856748d8709d4255_13844739',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_header'} */
}
