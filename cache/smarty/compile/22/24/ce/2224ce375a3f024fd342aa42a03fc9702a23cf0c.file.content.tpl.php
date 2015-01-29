<?php /* Smarty version Smarty-3.1.19, created on 2015-01-29 18:09:55
         compiled from "/Applications/MAMP/htdocs/shop/admin123/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203184974254ca5b537fb2a6-51958240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2224ce375a3f024fd342aa42a03fc9702a23cf0c' => 
    array (
      0 => '/Applications/MAMP/htdocs/shop/admin123/themes/default/template/content.tpl',
      1 => 1420617954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203184974254ca5b537fb2a6-51958240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ca5b53833cb2_31604964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca5b53833cb2_31604964')) {function content_54ca5b53833cb2_31604964($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
