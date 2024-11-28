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
  'unifunc' => 'content_6748d7c2db5276_37228203',
=======
  'unifunc' => 'content_6748cf61043216_39837509',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a3fbdbbaf4c17b3f3d70f925fe6312d03f2c1c' => 
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
function content_6748d7c2db5276_37228203 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6748cf61043216_39837509 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?><!-- begin /var/www/html/modules/productcomments/views/templates/hook/product-comment-item-prototype.tpl -->
<div class="product-comment-list-item row" data-product-comment-id="@COMMENT_ID@" data-product-id="@PRODUCT_ID@">
  <div class="col-sm-3 comment-infos">
    <div class="grade-stars" data-grade="@COMMENT_GRADE@"></div>
    <div class="comment-date">
      @COMMENT_DATE@
    </div>
    <div class="comment-author">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By %1$s','sprintf'=>array('@CUSTOMER_NAME@'),'d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

    </div>
  </div>

  <div class="col-sm-9 comment-content">
    <p class="h4">@COMMENT_TITLE@</p>
    <p>@COMMENT_COMMENT@</p>
    <div class="comment-buttons btn-group">
      <?php if ($_smarty_tpl->tpl_vars['usefulness_enabled']->value) {?>
        <a class="useful-review">
          <i class="material-icons thumb_up" data-icon="thumb_up"></i>
          <span class="useful-review-value">@COMMENT_USEFUL_ADVICES@</span>
        </a>
        <a class="not-useful-review">
          <i class="material-icons thumb_down" data-icon="thumb_down"></i>
          <span class="not-useful-review-value">@COMMENT_NOT_USEFUL_ADVICES@</span>
        </a>
      <?php }?>
      <a class="report-abuse" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
        <i class="material-icons flag" data-icon="flag"></i>
      </a>
    </div>
  </div>
</div>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/product-comment-item-prototype.tpl --><?php }
}
