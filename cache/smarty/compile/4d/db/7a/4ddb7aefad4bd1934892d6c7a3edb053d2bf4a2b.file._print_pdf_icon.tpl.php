<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 19:56:52
         compiled from "/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154621810358768e04f1afc6-13193590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ddb7aefad4bd1934892d6c7a3edb053d2bf4a2b' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1480087984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154621810358768e04f1afc6-13193590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58768e04f2f1a7_44489881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58768e04f2f1a7_44489881')) {function content_58768e04f2f1a7_44489881($_smarty_tpl) {?>



<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo intval($_smarty_tpl->tpl_vars['order_slip']->value->id);?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>
