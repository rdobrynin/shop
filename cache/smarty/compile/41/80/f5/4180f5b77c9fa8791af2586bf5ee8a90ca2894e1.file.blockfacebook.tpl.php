<?php /* Smarty version Smarty-3.1.19, created on 2015-01-27 22:56:17
         compiled from "/Applications/MAMP/htdocs/shop/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127769018554c7fb71cd90a9-40472046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4180f5b77c9fa8791af2586bf5ee8a90ca2894e1' => 
    array (
      0 => '/Applications/MAMP/htdocs/shop/modules/blockfacebook/blockfacebook.tpl',
      1 => 1420618000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127769018554c7fb71cd90a9-40472046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c7fb71d23a58_69913026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c7fb71d23a58_69913026')) {function content_54c7fb71d23a58_69913026($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
