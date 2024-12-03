<?php
/* Smarty version 3.1.48, created on 2024-12-03 04:36:50
  from '/var/www/html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674e7cd2f206d4_31888067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bb2e0c71a57b4d9dfc73e20efa991854819bd9e' => 
    array (
      0 => '/var/www/html/themes/classic/templates/index.tpl',
      1 => 1732922128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674e7cd2f206d4_31888067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_554798950674e7cd2f1f058_06221181', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_202252359674e7cd2f1f392_84279276 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_700398322674e7cd2f1fb21_55951217 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1260050539674e7cd2f1f8a1_22381946 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_700398322674e7cd2f1fb21_55951217', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_554798950674e7cd2f1f058_06221181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_554798950674e7cd2f1f058_06221181',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_202252359674e7cd2f1f392_84279276',
  ),
  'page_content' => 
  array (
    0 => 'Block_1260050539674e7cd2f1f8a1_22381946',
  ),
  'hook_home' => 
  array (
    0 => 'Block_700398322674e7cd2f1fb21_55951217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202252359674e7cd2f1f392_84279276', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1260050539674e7cd2f1f8a1_22381946', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
