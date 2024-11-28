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
  'unifunc' => 'content_6748d7c2de2d40_11951692',
=======
  'unifunc' => 'content_6748cf610b26d5_37559084',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab78f8c8f8f941a231f6eb727d07d151a3efcbc2' => 
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
    'module:productcomments/views/templates/hook/alert-modal.tpl' => 2,
  ),
),false)) {
<<<<<<< HEAD
function content_6748d7c2de2d40_11951692 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6748cf610b26d5_37559084 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin /var/www/html/modules/productcomments/views/templates/hook/post-comment-modal.tpl -->
<?php echo '<script'; ?>
 type="text/javascript">
  var productCommentPostErrorMessage = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, your review cannot be posted.','d'=>'Modules.Productcomments.Shop','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>

<div id="post-product-comment-modal" class="modal fade product-comment-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="h2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="post-product-comment-form" action="<?php echo $_smarty_tpl->tpl_vars['post_comment_url']->value;?>
" method="POST">
          <div class="row">
            <div class="col-sm-2">
              <?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value) {?>
                <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11987572496748d7c2dd9b67_09308454', 'product_flags');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10205559026748cf610a5330_91551829', 'product_flags');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>


                <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18480778356748d7c2ddcf55_38523745', 'product_cover');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10102379726748cf610a7598_49353835', 'product_cover');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

              <?php }?>
            </div>
            <div class="col-sm-4">
              <p class="h3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</p>
              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7396092136748d7c2dde7a9_37817866', 'product_description_short');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21415341956748cf610a9f03_97147271', 'product_description_short');
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
?>

            </div>
            <div class="col-sm-6">
              <?php if (count($_smarty_tpl->tpl_vars['criterions']->value) > 0) {?>
                <ul id="criterions_list">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['criterions']->value, 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
                    <li>
                      <div class="criterion-rating">
                        <label><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
:</label>
                        <div
                          class="grade-stars"
                          data-grade="3"
                          data-input="criterion[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion'], ENT_QUOTES, 'UTF-8');?>
]">
                        </div>
                      </div>
                    </li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              <?php }?>
            </div>
          </div>

          <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
            <div class="row">
              <div class="col-sm-8">
                <label class="form-label" for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
                <input id="comment_title" name="comment_title" type="text" value=""/>
              </div>
              <div class="col-sm-4">
                <label class="form-label" for="customer_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your name','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
                <input id="customer_name" name="customer_name" type="text" value=""/>
              </div>
            </div>
          <?php } else { ?>
            <label class="form-label" for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
            <input id="comment_title" name="comment_title" type="text" value=""/>
          <?php }?>

          <label class="form-label" for="comment_content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
          <textarea id="comment_content" name="comment_content"></textarea>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','mod'=>'psgdpr','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>


          <div class="row">
            <div class="col-sm-6">
              <p class="required"><sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required fields','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</p>
            </div>
            <div class="col-sm-6 post-comment-buttons">
              <button type="button" class="btn btn-comment-inverse btn-comment-big" data-dismiss="modal">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

              </button>
              <button type="submit" class="btn btn-comment btn-comment-big">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['moderation_active']->value) {?>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been submitted and will be available once approved by a moderator.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_assignInScope('comment_posted_message', $_prefixVariable7);
} else { ?>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been added!','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable8 = ob_get_clean();
$_smarty_tpl->_assignInScope('comment_posted_message', $_prefixVariable8);
}
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review sent','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/alert-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'product-comment-posted-modal','modal_title'=>$_prefixVariable9,'modal_message'=>$_smarty_tpl->tpl_vars['comment_posted_message']->value), 0, false);
?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your review cannot be sent','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable10 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/alert-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'product-comment-post-error','modal_title'=>$_prefixVariable10,'icon'=>'error'), 0, true);
?>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/post-comment-modal.tpl --><?php }
/* {block 'product_flags'} */
<<<<<<< HEAD
class Block_11987572496748d7c2dd9b67_09308454 extends Smarty_Internal_Block
=======
class Block_10205559026748cf610a5330_91551829 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'product_flags' => 
  array (
<<<<<<< HEAD
    0 => 'Block_11987572496748d7c2dd9b67_09308454',
=======
    0 => 'Block_10205559026748cf610a5330_91551829',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <ul class="product-flags">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                      <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
<<<<<<< HEAD
class Block_18480778356748d7c2ddcf55_38523745 extends Smarty_Internal_Block
=======
class Block_10102379726748cf610a7598_49353835 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'product_cover' => 
  array (
<<<<<<< HEAD
    0 => 'Block_18480778356748d7c2ddcf55_38523745',
=======
    0 => 'Block_10102379726748cf610a7598_49353835',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <div class="product-cover">
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                      <img class="js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
                    <?php } else { ?>
                      <img src="<?php echo $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'];?>
" style="width:100%;">
                    <?php }?>
                  </div>
                <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_description_short'} */
<<<<<<< HEAD
class Block_7396092136748d7c2dde7a9_37817866 extends Smarty_Internal_Block
=======
class Block_21415341956748cf610a9f03_97147271 extends Smarty_Internal_Block
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
{
public $subBlocks = array (
  'product_description_short' => 
  array (
<<<<<<< HEAD
    0 => 'Block_7396092136748d7c2dde7a9_37817866',
=======
    0 => 'Block_21415341956748cf610a9f03_97147271',
>>>>>>> 51cc5654c55d5f71a9528ce4585659e17452868f
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
              <?php
}
}
/* {/block 'product_description_short'} */
}
