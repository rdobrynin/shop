<?php /* Smarty version Smarty-3.1.19, created on 2015-01-21 21:19:35
         compiled from "/Applications/MAMP/htdocs/shop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55974929654c009d72dcbb7-00729832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b49bfe1b50d26655bfa70c28dd32d66da304d7ca' => 
    array (
      0 => '/Applications/MAMP/htdocs/shop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1420617954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55974929654c009d72dcbb7-00729832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c009d7326c03_77476454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c009d7326c03_77476454')) {function content_54c009d7326c03_77476454($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>
