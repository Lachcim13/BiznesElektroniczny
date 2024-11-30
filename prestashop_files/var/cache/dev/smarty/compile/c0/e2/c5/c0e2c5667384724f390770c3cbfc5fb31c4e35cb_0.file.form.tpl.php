<?php
/* Smarty version 3.1.48, created on 2024-11-30 14:26:07
  from '/var/www/html/modules/productcomments/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674b126ff1eac9_07531438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0e2c5667384724f390770c3cbfc5fb31c4e35cb' => 
    array (
      0 => '/var/www/html/modules/productcomments/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1732878095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b126ff1eac9_07531438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_480281387674b126ff11bf9_60155944', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_480281387674b126ff11bf9_60155944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_480281387674b126ff11bf9_60155944',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'products') {?>
		<table id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
			<tr>
				<th></th>
				<th>ID</th>
				<th width="80%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Name','d'=>'Modules.Productcomments.Admin'),$_smarty_tpl ) );?>
</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
				<tr>
					<td>
						<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id_product'];?>
" 
						<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['selected'])) && $_smarty_tpl->tpl_vars['value']->value['selected'] == 1) {?> checked <?php }?> />
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id_product'];?>
</td>
					<td width="80%"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'switch' && addcslashes((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null),'\'') < '1.6') {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
			<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8' ));?>
"
					<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?>checked="checked"<?php }?>
					<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?>disabled="disabled"<?php }?> />
			<label class="t" for="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
			 <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['is_bool'])) && $_smarty_tpl->tpl_vars['input']->value['is_bool'] == true) {?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?>
					<img src="../img/admin/enabled.gif" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
" />
				<?php } else { ?>
					<img src="../img/admin/disabled.gif" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
" />
				<?php }?>
			 <?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>

			 <?php }?>
			</label>
			<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['br'])) && $_smarty_tpl->tpl_vars['input']->value['br']) {?><br /><?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['p'])) && $_smarty_tpl->tpl_vars['value']->value['p']) {?><p><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }?>

<?php
}
}
/* {/block "input"} */
}
