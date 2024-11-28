<?php
<<<<<<< HEAD
/* Smarty version 3.1.48, created on 2024-11-28 20:18:31
=======
/* Smarty version 3.1.48, created on 2024-11-28 21:54:08
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  from '/var/www/html/themes/classic/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
<<<<<<< HEAD
  'unifunc' => 'content_6748c207416a16_88071112',
=======
  'unifunc' => 'content_6748d8709ee2a9_12382123',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d295b2bae10bbe2e82fd803bdc40a29130aedb' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/listing/product-list.tpl',
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
    'file:_partials/microdata/product-list-jsonld.tpl' => 1,
    'file:catalog/_partials/subcategories.tpl' => 1,
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_6748c207416a16_88071112 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6748d8709ee2a9_12382123 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13495290656748c20740baf5_63083898', 'head_microdata_special');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17735306276748d8709e67e9_22219210', 'head_microdata_special');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10888973216748c20740d611_79947151', 'content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6499469326748d8709e71f5_08839590', 'content');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_microdata_special'} */
<<<<<<< HEAD
class Block_13495290656748c20740baf5_63083898 extends Smarty_Internal_Block
=======
class Block_17735306276748d8709e67e9_22219210 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
<<<<<<< HEAD
    0 => 'Block_13495290656748c20740baf5_63083898',
=======
    0 => 'Block_17735306276748d8709e67e9_22219210',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-list-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_list_header'} */
<<<<<<< HEAD
class Block_5118763266748c20740d823_66136254 extends Smarty_Internal_Block
=======
class Block_1834682006748d8709e7467_94420418 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h1 id="js-product-list-header" class="h2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h1>
    <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'subcategory_list'} */
<<<<<<< HEAD
class Block_7077917206748c20740e253_19880747 extends Smarty_Internal_Block
=======
class Block_4265605986748d8709e7c47_92387167 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)) && count($_smarty_tpl->tpl_vars['subcategories']->value) > 0) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/subcategories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subcategories'=>$_smarty_tpl->tpl_vars['subcategories']->value), 0, false);
?>
      <?php }?>
    <?php
}
}
/* {/block 'subcategory_list'} */
/* {block 'product_list_top'} */
<<<<<<< HEAD
class Block_4430020946748c2074113f1_18920947 extends Smarty_Internal_Block
=======
class Block_7334924446748d8709e9bc9_91114449 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
        <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
<<<<<<< HEAD
class Block_5661236866748c207411b83_50012453 extends Smarty_Internal_Block
=======
class Block_9826012946748d8709ea332_30719354 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="hidden-sm-down">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
<<<<<<< HEAD
class Block_14159148826748c2074121c8_03981637 extends Smarty_Internal_Block
=======
class Block_6793573346748d8709eae59_24511898 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'productClass'=>"col-xs-12 col-sm-6 col-xl-4"), 0, false);
?>
        <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
<<<<<<< HEAD
class Block_14310610336748c207412809_40974532 extends Smarty_Internal_Block
=======
class Block_17920405176748d8709eb750_90882896 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
        <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_10888973216748c20740d611_79947151 extends Smarty_Internal_Block
=======
class Block_6499469326748d8709e71f5_08839590 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_10888973216748c20740d611_79947151',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_5118763266748c20740d823_66136254',
  ),
  'subcategory_list' => 
  array (
    0 => 'Block_7077917206748c20740e253_19880747',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_4430020946748c2074113f1_18920947',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_5661236866748c207411b83_50012453',
  ),
  'product_list' => 
  array (
    0 => 'Block_14159148826748c2074121c8_03981637',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_14310610336748c207412809_40974532',
=======
    0 => 'Block_6499469326748d8709e71f5_08839590',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_1834682006748d8709e7467_94420418',
  ),
  'subcategory_list' => 
  array (
    0 => 'Block_4265605986748d8709e7c47_92387167',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_7334924446748d8709e9bc9_91114449',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_9826012946748d8709ea332_30719354',
  ),
  'product_list' => 
  array (
    0 => 'Block_6793573346748d8709eae59_24511898',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_17920405176748d8709eb750_90882896',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5118763266748c20740d823_66136254', 'product_list_header', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1834682006748d8709e7467_94420418', 'product_list_header', $this->tplIndex);
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7077917206748c20740e253_19880747', 'subcategory_list', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4265605986748d8709e7c47_92387167', 'subcategory_list', $this->tplIndex);
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

    
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHeaderCategory"),$_smarty_tpl ) );?>


    <section id="products">
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4430020946748c2074113f1_18920947', 'product_list_top', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7334924446748d8709e9bc9_91114449', 'product_list_top', $this->tplIndex);
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5661236866748c207411b83_50012453', 'product_list_active_filters', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9826012946748d8709ea332_30719354', 'product_list_active_filters', $this->tplIndex);
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14159148826748c2074121c8_03981637', 'product_list', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6793573346748d8709eae59_24511898', 'product_list', $this->tplIndex);
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14310610336748c207412809_40974532', 'product_list_bottom', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17920405176748d8709eb750_90882896', 'product_list_bottom', $this->tplIndex);
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


      <?php } else { ?>
        <div id="js-product-list-top"></div>

        <div id="js-product-list">
          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available yet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
          <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

          <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
?>
        </div>

        <div id="js-product-list-bottom"></div>
      <?php }?>
    </section>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterCategory"),$_smarty_tpl ) );?>


  </section>
<?php
}
}
/* {/block 'content'} */
}
