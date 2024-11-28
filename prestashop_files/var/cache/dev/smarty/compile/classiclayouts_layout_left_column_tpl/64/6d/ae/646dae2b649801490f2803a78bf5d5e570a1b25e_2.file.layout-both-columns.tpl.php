<?php
<<<<<<< HEAD
/* Smarty version 3.1.48, created on 2024-11-28 20:18:31
=======
/* Smarty version 3.1.48, created on 2024-11-28 21:54:08
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  from '/var/www/html/themes/classic/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
<<<<<<< HEAD
  'unifunc' => 'content_6748c20742a876_01231384',
=======
  'unifunc' => 'content_6748d870a0c1b0_05868280',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '646dae2b649801490f2803a78bf5d5e570a1b25e' => 
    array (
      0 => '/var/www/html/themes/classic/templates/layouts/layout-both-columns.tpl',
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
    'file:_partials/helpers.tpl' => 1,
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_6748c20742a876_01231384 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6748d870a0c1b0_05868280 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8363232606748c207424c90_45558206', 'head');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12747513506748d870a02aa5_11984256', 'head');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11062227366748c2074258d5_44542173', 'hook_after_body_opening_tag');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20520287876748d870a03cd0_22375750', 'hook_after_body_opening_tag');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


    <main>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14139052836748c207425db0_81016126', 'product_activation');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6760732776748d870a043e7_87199136', 'product_activation');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


      <header id="header">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11146171296748c207426221_28810960', 'header');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50157456748d870a04aa6_55791344', 'header');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

      </header>

      <section id="wrapper">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4204126966748c207426652_50372986', 'notifications');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14206806266748d870a05120_67008752', 'notifications');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16956365116748c207426d11_13988779', 'breadcrumb');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13393594106748d870a05d61_47767963', 'breadcrumb');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16924527626748c2074273f1_84476577', "left_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15914469316748d870a06570_19190959', "left_column");
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7872178146748c207428074_80010602', "content_wrapper");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19804960436748d870a07c93_14720173', "content_wrapper");
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5457624436748c207428b09_19614047', "right_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5309002406748d870a08f73_14970982', "right_column");
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer" class="js-footer">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17146186196748c2074297f8_00089833', "footer");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18252910216748d870a0a404_30249842', "footer");
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

      </footer>

    </main>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5951913026748c207429cc0_24829969', 'javascript_bottom');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13329206346748d870a0ab77_30799856', 'javascript_bottom');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5561904916748c20742a348_81422672', 'hook_before_body_closing_tag');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1934551466748d870a0b979_30205867', 'hook_before_body_closing_tag');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

  </body>

</html>
<?php }
/* {block 'head'} */
<<<<<<< HEAD
class Block_8363232606748c207424c90_45558206 extends Smarty_Internal_Block
=======
class Block_12747513506748d870a02aa5_11984256 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'head' => 
  array (
<<<<<<< HEAD
    0 => 'Block_8363232606748c207424c90_45558206',
=======
    0 => 'Block_12747513506748d870a02aa5_11984256',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
<<<<<<< HEAD
class Block_11062227366748c2074258d5_44542173 extends Smarty_Internal_Block
=======
class Block_20520287876748d870a03cd0_22375750 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
<<<<<<< HEAD
    0 => 'Block_11062227366748c2074258d5_44542173',
=======
    0 => 'Block_20520287876748d870a03cd0_22375750',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
<<<<<<< HEAD
class Block_14139052836748c207425db0_81016126 extends Smarty_Internal_Block
=======
class Block_6760732776748d870a043e7_87199136 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'product_activation' => 
  array (
<<<<<<< HEAD
    0 => 'Block_14139052836748c207425db0_81016126',
=======
    0 => 'Block_6760732776748d870a043e7_87199136',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
<<<<<<< HEAD
class Block_11146171296748c207426221_28810960 extends Smarty_Internal_Block
=======
class Block_50157456748d870a04aa6_55791344 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'header' => 
  array (
<<<<<<< HEAD
    0 => 'Block_11146171296748c207426221_28810960',
=======
    0 => 'Block_50157456748d870a04aa6_55791344',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
<<<<<<< HEAD
class Block_4204126966748c207426652_50372986 extends Smarty_Internal_Block
=======
class Block_14206806266748d870a05120_67008752 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'notifications' => 
  array (
<<<<<<< HEAD
    0 => 'Block_4204126966748c207426652_50372986',
=======
    0 => 'Block_14206806266748d870a05120_67008752',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
<<<<<<< HEAD
class Block_16956365116748c207426d11_13988779 extends Smarty_Internal_Block
=======
class Block_13393594106748d870a05d61_47767963 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
    0 => 'Block_16956365116748c207426d11_13988779',
=======
    0 => 'Block_13393594106748d870a05d61_47767963',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
<<<<<<< HEAD
class Block_16924527626748c2074273f1_84476577 extends Smarty_Internal_Block
=======
class Block_15914469316748d870a06570_19190959 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_16924527626748c2074273f1_84476577',
=======
    0 => 'Block_15914469316748d870a06570_19190959',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
<<<<<<< HEAD
class Block_9866444486748c207428488_83350652 extends Smarty_Internal_Block
=======
class Block_3461090016748d870a082b8_21758485 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
<<<<<<< HEAD
class Block_7872178146748c207428074_80010602 extends Smarty_Internal_Block
=======
class Block_19804960436748d870a07c93_14720173 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_7872178146748c207428074_80010602',
  ),
  'content' => 
  array (
    0 => 'Block_9866444486748c207428488_83350652',
=======
    0 => 'Block_19804960436748d870a07c93_14720173',
  ),
  'content' => 
  array (
    0 => 'Block_3461090016748d870a082b8_21758485',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="js-content-wrapper left-column right-column col-sm-4 col-md-6">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9866444486748c207428488_83350652', "content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3461090016748d870a082b8_21758485', "content", $this->tplIndex);
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
<<<<<<< HEAD
class Block_5457624436748c207428b09_19614047 extends Smarty_Internal_Block
=======
class Block_5309002406748d870a08f73_14970982 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_5457624436748c207428b09_19614047',
=======
    0 => 'Block_5309002406748d870a08f73_14970982',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
<<<<<<< HEAD
class Block_17146186196748c2074297f8_00089833 extends Smarty_Internal_Block
=======
class Block_18252910216748d870a0a404_30249842 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'footer' => 
  array (
<<<<<<< HEAD
    0 => 'Block_17146186196748c2074297f8_00089833',
=======
    0 => 'Block_18252910216748d870a0a404_30249842',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
<<<<<<< HEAD
class Block_5951913026748c207429cc0_24829969 extends Smarty_Internal_Block
=======
class Block_13329206346748d870a0ab77_30799856 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
<<<<<<< HEAD
    0 => 'Block_5951913026748c207429cc0_24829969',
=======
    0 => 'Block_13329206346748d870a0ab77_30799856',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
<<<<<<< HEAD
class Block_5561904916748c20742a348_81422672 extends Smarty_Internal_Block
=======
class Block_1934551466748d870a0b979_30205867 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
<<<<<<< HEAD
    0 => 'Block_5561904916748c20742a348_81422672',
=======
    0 => 'Block_1934551466748d870a0b979_30205867',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
