<?php /* Smarty version Smarty-3.1.19, created on 2017-01-13 18:35:31
         compiled from "/home/vagrant/Code/prestashop/admin041a5srut/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102871698758790fe3f3b738-34401352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa38646f40b4acdefdc25cfaac7d984a9dc0ef74' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin041a5srut/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1484327934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102871698758790fe3f3b738-34401352',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58790fe4002687_50714164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58790fe4002687_50714164')) {function content_58790fe4002687_50714164($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
