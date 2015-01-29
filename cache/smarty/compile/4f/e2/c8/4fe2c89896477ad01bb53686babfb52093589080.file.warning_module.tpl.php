<?php /* Smarty version Smarty-3.1.19, created on 2015-01-29 13:31:15
         compiled from "/Applications/MAMP/htdocs/shop/admin123/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173469532454ca1a03cfe777-88569084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fe2c89896477ad01bb53686babfb52093589080' => 
    array (
      0 => '/Applications/MAMP/htdocs/shop/admin123/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1420617954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173469532454ca1a03cfe777-88569084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ca1a03d14d77_53158045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca1a03d14d77_53158045')) {function content_54ca1a03d14d77_53158045($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
