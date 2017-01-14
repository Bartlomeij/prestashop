<?php /* Smarty version Smarty-3.1.19, created on 2017-01-13 21:52:10
         compiled from "/home/vagrant/Code/prestashop/admin041a5srut/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190342323558793dfa91f553-53087858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a91455eeb32e241124c083ec2e9068cfe864161' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin041a5srut/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1484327934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190342323558793dfa91f553-53087858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58793dfa9329e0_82363074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58793dfa9329e0_82363074')) {function content_58793dfa9329e0_82363074($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
