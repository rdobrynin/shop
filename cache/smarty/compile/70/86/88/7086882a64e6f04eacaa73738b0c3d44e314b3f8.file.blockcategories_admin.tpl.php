<?php /* Smarty version Smarty-3.1.19, created on 2015-01-28 15:12:35
         compiled from "/Applications/MAMP/htdocs/shop/modules/blockcategories/views/blockcategories_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43377251654c8e04388e007-12047827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7086882a64e6f04eacaa73738b0c3d44e314b3f8' => 
    array (
      0 => '/Applications/MAMP/htdocs/shop/modules/blockcategories/views/blockcategories_admin.tpl',
      1 => 1420617992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43377251654c8e04388e007-12047827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helper' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c8e0438f5155_96361682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c8e0438f5155_96361682')) {function content_54c8e0438f5155_96361682($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'You can upload a maximum of 3 images.','mod'=>'blockcategories'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Thumbnails','mod'=>'blockcategories'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
</div>
<?php }} ?>
