<?php /* Smarty version Smarty-3.1.19, created on 2015-01-29 13:11:35
         compiled from "/Applications/MAMP/htdocs/shop/themes/default-bootstrap/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153032541254ca1567679135-49403649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dfe3737dccf99ebf7f7198cbb1da4b5cda30772' => 
    array (
      0 => '/Applications/MAMP/htdocs/shop/themes/default-bootstrap/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1420617956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153032541254ca1567679135-49403649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ca15676ae3c8_21350656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca15676ae3c8_21350656')) {function content_54ca15676ae3c8_21350656($_smarty_tpl) {?>

<div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
