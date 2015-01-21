<?php /* Smarty version Smarty-3.1.19, created on 2015-01-21 21:18:47
         compiled from "/Applications/MAMP/htdocs/shop/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156988405154c009a7bba452-60347413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6896e273fb88bb54abb60bf64440ce46dbab038d' => 
    array (
      0 => '/Applications/MAMP/htdocs/shop/admin/themes/default/template/content.tpl',
      1 => 1420617954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156988405154c009a7bba452-60347413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c009a7c70b01_98867963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c009a7c70b01_98867963')) {function content_54c009a7c70b01_98867963($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
