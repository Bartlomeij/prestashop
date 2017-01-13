<?php /* Smarty version Smarty-3.1.19, created on 2017-01-13 18:35:52
         compiled from "/home/vagrant/Code/prestashop/admin041a5srut/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74957933958790ff86442c2-55752082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfa9d097d9beba687f2bcf20ba3d3016239f82ec' => 
    array (
      0 => '/home/vagrant/Code/prestashop/admin041a5srut/themes/default/template/content.tpl',
      1 => 1484327933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74957933958790ff86442c2-55752082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58790ff864fba6_10720612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58790ff864fba6_10720612')) {function content_58790ff864fba6_10720612($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
