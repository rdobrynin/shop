<?php /* Smarty version Smarty-3.1.19, created on 2015-01-21 21:19:04
         compiled from "/Applications/MAMP/htdocs/shop/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32773378354c009b8bb83e6-19045555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15cb3935289baae93fd9877f89dfac6978379fb0' => 
    array (
      0 => '/Applications/MAMP/htdocs/shop/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl',
      1 => 1420617956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32773378354c009b8bb83e6-19045555',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54c009b8c8e902_74843823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c009b8c8e902_74843823')) {function content_54c009b8c8e902_74843823($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
