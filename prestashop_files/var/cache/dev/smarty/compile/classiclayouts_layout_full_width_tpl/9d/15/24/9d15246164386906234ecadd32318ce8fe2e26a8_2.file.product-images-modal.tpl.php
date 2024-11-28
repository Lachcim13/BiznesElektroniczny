<?php
<<<<<<< HEAD
/* Smarty version 3.1.48, created on 2024-11-28 21:51:14
=======
/* Smarty version 3.1.48, created on 2024-11-28 21:15:29
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  from '/var/www/html/themes/classic/templates/catalog/_partials/product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
<<<<<<< HEAD
  'unifunc' => 'content_6748d7c2dfdc39_41549466',
=======
  'unifunc' => 'content_6748cf610ea399_92251658',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d15246164386906234ecadd32318ce8fe2e26a8' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/product-images-modal.tpl',
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
function content_6748d7c2dfdc39_41549466 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6748cf610ea399_92251658 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade js-product-images-modal" id="product-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php $_smarty_tpl->_assignInScope('imagesCount', count($_smarty_tpl->tpl_vars['product']->value['images']));?>
        <figure>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
            <img
              class="js-modal-product-cover product-cover-modal img-fluid"
              width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
              src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'])) {?>
                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
              <?php } else { ?>
                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
              <?php }?>
              height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
            >
          <?php } else { ?>
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
" />
          <?php }?>
          <figcaption class="image-caption">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11350237746748d7c2dfb4c4_01832306', 'product_description_short');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20896565156748cf610e5b55_90814649', 'product_description_short');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

        </figcaption>
        </figure>
        <aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17693648956748d7c2dfbb48_05441130', 'product_images');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2909463086748cf610e65f3_90641897', 'product_images');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

          <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value > 5) {?>
            <div class="arrows js-modal-arrows">
              <i class="material-icons arrow-up js-modal-arrow-up">&#xE5C7;</i>
              <i class="material-icons arrow-down js-modal-arrow-down">&#xE5C5;</i>
            </div>
          <?php }?>
        </aside>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }
/* {block 'product_description_short'} */
<<<<<<< HEAD
class Block_11350237746748d7c2dfb4c4_01832306 extends Smarty_Internal_Block
=======
class Block_20896565156748cf610e5b55_90814649 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'product_description_short' => 
  array (
<<<<<<< HEAD
    0 => 'Block_11350237746748d7c2dfb4c4_01832306',
=======
    0 => 'Block_20896565156748cf610e5b55_90814649',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="product-description-short"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
          <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_images'} */
<<<<<<< HEAD
class Block_17693648956748d7c2dfbb48_05441130 extends Smarty_Internal_Block
=======
class Block_2909463086748cf610e65f3_90641897 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'product_images' => 
  array (
<<<<<<< HEAD
    0 => 'Block_17693648956748d7c2dfbb48_05441130',
=======
    0 => 'Block_2909463086748cf610e65f3_90641897',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="js-modal-mask mask <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value <= 5) {?> nomargin <?php }?>">
              <ul class="product-images js-modal-product-images">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                  <li class="thumb-container js-thumb-container">
                    <img
                      data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      class="thumb js-modal-thumb"
                      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
                        alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                      <?php } else { ?>
                        alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                      <?php }?>
                      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['width'], ENT_QUOTES, 'UTF-8');?>
"
                      height="148"
                    >
                  </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            </div>
          <?php
}
}
/* {/block 'product_images'} */
}
