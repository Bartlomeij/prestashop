<?php /* Smarty version Smarty-3.1.19, created on 2017-01-13 20:51:27
         compiled from "/home/vagrant/Code/prestashop/admin041a5srut/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165516509258792fbfaea075-54476741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8537efc0e47285159bf3f032a9c2a0913ec8b818' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin041a5srut/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1484327934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165516509258792fbfaea075-54476741',
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
  'unifunc' => 'content_58792fbfafdec3_71598174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58792fbfafdec3_71598174')) {function content_58792fbfafdec3_71598174($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
