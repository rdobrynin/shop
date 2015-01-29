<?php /* Smarty version Smarty-3.1.19, created on 2015-01-29 13:31:16
         compiled from "/Applications/MAMP/htdocs/shop/admin123/themes/default/template/controllers/modules/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66886845654ca1a0431cbc3-74253178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05e1fde339de26a0d7ac1a6a107ee37106c63181' => 
    array (
      0 => '/Applications/MAMP/htdocs/shop/admin123/themes/default/template/controllers/modules/content.tpl',
      1 => 1420617954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66886845654ca1a0431cbc3-74253178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ca1a04351d94_63143038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca1a04351d94_63143038')) {function content_54ca1a04351d94_63143038($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['module_content']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['module_content']->value;?>

<?php } else { ?>
	<?php if (!isset($_GET['configure'])) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }?>
<?php }} ?>
