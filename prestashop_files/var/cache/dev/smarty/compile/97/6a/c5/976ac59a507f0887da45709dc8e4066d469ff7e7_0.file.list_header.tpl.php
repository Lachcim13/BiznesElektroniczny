<?php
/* Smarty version 3.1.48, created on 2024-12-02 15:47:09
  from '/var/www/html/admin-dev/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674dc86d83e576_88734161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '976ac59a507f0887da45709dc8e4066d469ff7e7' => 
    array (
      0 => '/var/www/html/admin-dev/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1732878095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674dc86d83e576_88734161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1913244552674dc86d83dee1_45631176', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_1913244552674dc86d83dee1_45631176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_1913244552674dc86d83dee1_45631176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
