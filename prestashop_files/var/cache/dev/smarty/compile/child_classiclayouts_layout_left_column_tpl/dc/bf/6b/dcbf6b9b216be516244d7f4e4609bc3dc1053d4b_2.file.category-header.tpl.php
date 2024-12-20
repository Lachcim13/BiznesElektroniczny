<?php
/* Smarty version 3.1.48, created on 2024-12-03 13:47:06
  from '/var/www/html/themes/classic/templates/catalog/_partials/category-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674efdca1a3515_92719338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcbf6b9b216be516244d7f4e4609bc3dc1053d4b' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/category-header.tpl',
      1 => 1733189607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674efdca1a3515_92719338 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-header">
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="block-category card card-block">
            <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
            <div class="block-category-inner">
                <div class="category-cover">
                    <picture>
                        <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                            <div id="category-description" class="text-muted"><h2><span><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</span></h2></div>
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'])) {?>
                        
                            <img id="custom-img" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" loading="lazy" width="870" height="217">
                        <?php }?>
                    </picture>
                </div>
            </div>
        </div>
    <?php }?>
</div>
<?php }
}
