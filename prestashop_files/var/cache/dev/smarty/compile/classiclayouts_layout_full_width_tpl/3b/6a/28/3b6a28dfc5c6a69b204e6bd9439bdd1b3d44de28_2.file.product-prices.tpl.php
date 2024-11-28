<?php
<<<<<<< HEAD
/* Smarty version 3.1.48, created on 2024-11-28 21:51:14
=======
/* Smarty version 3.1.48, created on 2024-11-28 21:15:28
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  from '/var/www/html/themes/classic/templates/catalog/_partials/product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
<<<<<<< HEAD
  'unifunc' => 'content_6748d7c2d293c5_74910076',
=======
  'unifunc' => 'content_6748cf60e97459_89066347',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b6a28dfc5c6a69b204e6bd9439bdd1b3d44de28' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/product-prices.tpl',
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
function content_6748d7c2d293c5_74910076 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6748cf60e97459_89066347 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <div class="product-prices js-product-prices">
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6673636046748d7c2d1f9b5_78875450', 'product_discount');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19015810356748cf60e818a8_32785869', 'product_discount');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17274239546748d7c2d20898_45556781', 'product_price');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10967581906748cf60e83fd6_14326077', 'product_price');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9526686016748d7c2d24010_21788414', 'product_without_taxes');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8218952736748cf60e8d1f3_07879041', 'product_without_taxes');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21127852666748d7c2d24ae3_81676272', 'product_pack_price');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6310880436748cf60e8e4b7_26135424', 'product_pack_price');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9854641106748d7c2d25378_32230056', 'product_ecotax');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17110236806748cf60e8f481_81902712', 'product_ecotax');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>


    <div class="tax-shipping-delivery-label">
      <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No tax','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      <?php } elseif ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['labels']['tax_long'], ENT_QUOTES, 'UTF-8');?>

      <?php }?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual'] == 0) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 1) {?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['delivery_information']) {?>
            <span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_information'], ENT_QUOTES, 'UTF-8');?>
</span>
          <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 2) {?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
            <span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_in_stock'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0 && $_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
            <span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_out_stock'], ENT_QUOTES, 'UTF-8');?>
</span>
          <?php }?>
        <?php }?>
      <?php }?>
    </div>
  </div>
<?php }
}
/* {block 'product_discount'} */
<<<<<<< HEAD
class Block_6673636046748d7c2d1f9b5_78875450 extends Smarty_Internal_Block
=======
class Block_19015810356748cf60e818a8_32785869 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'product_discount' => 
  array (
<<<<<<< HEAD
    0 => 'Block_6673636046748d7c2d1f9b5_78875450',
=======
    0 => 'Block_19015810356748cf60e818a8_32785869',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <div class="product-discount">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

          <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_discount'} */
/* {block 'product_unit_price'} */
<<<<<<< HEAD
class Block_1414907636748d7c2d232f3_62880636 extends Smarty_Internal_Block
=======
class Block_4593450746748cf60e8b9d4_48793699 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
            <p class="product-unit-price sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl ) );?>
</p>
          <?php }?>
        <?php
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_price'} */
<<<<<<< HEAD
class Block_17274239546748d7c2d20898_45556781 extends Smarty_Internal_Block
=======
class Block_10967581906748cf60e83fd6_14326077 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'product_price' => 
  array (
<<<<<<< HEAD
    0 => 'Block_17274239546748d7c2d20898_45556781',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_1414907636748d7c2d232f3_62880636',
=======
    0 => 'Block_10967581906748cf60e83fd6_14326077',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_4593450746748cf60e8b9d4_48793699',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div
        class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>">

        <div class="current-price">
          <span class='current-price-value' content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['rounded_display_price'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'product_sheet'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
              <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

            <?php } else { ?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
          </span>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
              <span class="discount discount-percentage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %percentage%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])),$_smarty_tpl ) );?>
</span>
            <?php } else { ?>
              <span class="discount discount-amount">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %amount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_to_display'])),$_smarty_tpl ) );?>

              </span>
            <?php }?>
          <?php }?>
        </div>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1414907636748d7c2d232f3_62880636', 'product_unit_price', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4593450746748cf60e8b9d4_48793699', 'product_unit_price', $this->tplIndex);
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

      </div>
    <?php
}
}
/* {/block 'product_price'} */
/* {block 'product_without_taxes'} */
<<<<<<< HEAD
class Block_9526686016748d7c2d24010_21788414 extends Smarty_Internal_Block
=======
class Block_8218952736748cf60e8d1f3_07879041 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'product_without_taxes' => 
  array (
<<<<<<< HEAD
    0 => 'Block_9526686016748d7c2d24010_21788414',
=======
    0 => 'Block_8218952736748cf60e8d1f3_07879041',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
        <p class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_pack_price'} */
<<<<<<< HEAD
class Block_21127852666748d7c2d24ae3_81676272 extends Smarty_Internal_Block
=======
class Block_6310880436748cf60e8e4b7_26135424 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'product_pack_price' => 
  array (
<<<<<<< HEAD
    0 => 'Block_21127852666748d7c2d24ae3_81676272',
=======
    0 => 'Block_6310880436748cf60e8e4b7_26135424',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
        <p class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></p>
      <?php }?>
    <?php
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
<<<<<<< HEAD
class Block_9854641106748d7c2d25378_32230056 extends Smarty_Internal_Block
=======
class Block_17110236806748cf60e8f481_81902712 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'product_ecotax' => 
  array (
<<<<<<< HEAD
    0 => 'Block_9854641106748d7c2d25378_32230056',
=======
    0 => 'Block_17110236806748cf60e8f481_81902712',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?>
        <p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

          <?php }?>
        </p>
      <?php }?>
    <?php
}
}
/* {/block 'product_ecotax'} */
}
