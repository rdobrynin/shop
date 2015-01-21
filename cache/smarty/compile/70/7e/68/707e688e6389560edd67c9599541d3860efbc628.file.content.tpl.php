<?php /* Smarty version Smarty-3.1.19, created on 2015-01-21 22:24:11
         compiled from "/Applications/MAMP/htdocs/shop/admin3841gzd23/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165520690054c00aeba277f1-67600108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '707e688e6389560edd67c9599541d3860efbc628' => 
    array (
      0 => '/Applications/MAMP/htdocs/shop/admin3841gzd23/themes/default/template/content.tpl',
      1 => 1420617954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165520690054c00aeba277f1-67600108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c00aeba40c24_54464663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c00aeba40c24_54464663')) {function content_54c00aeba40c24_54464663($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
