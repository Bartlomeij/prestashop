<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 19:57:02
         compiled from "/home/vagrant/Code/prestashop/themes/default-bootstrap/category-cms-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28754006858768e0ee32621-70828083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4748672a75c4453d0a5efa5152d3307bd6f4e5e9' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/category-cms-tree-branch.tpl',
      1 => 1480087986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28754006858768e0ee32621-70828083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'last' => 0,
    'node' => 0,
    'child' => 0,
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58768e0f09dd76_52108481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58768e0f09dd76_52108481')) {function content_58768e0f09dd76_52108481($_smarty_tpl) {?>

<li <?php if (isset($_smarty_tpl->tpl_vars['last']->value)&&$_smarty_tpl->tpl_vars['last']->value=='true') {?>class="last"<?php }?>>
	<strong><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></strong>
	<?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryCmsTreeBranch']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
			<?php if (isset($_smarty_tpl->tpl_vars['child']->value['children'])&&count($_smarty_tpl->tpl_vars['child']->value['children'])>0||isset($_smarty_tpl->tpl_vars['child']->value['cms'])&&count($_smarty_tpl->tpl_vars['child']->value['cms'])>0) {?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryCmsTreeBranch']['last']&&count($_smarty_tpl->tpl_vars['node']->value['cms'])==0) {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-cms-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-cms-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

				<?php }?>
			<?php }?>
		<?php } ?>
		<?php if (isset($_smarty_tpl->tpl_vars['node']->value['cms'])&&count($_smarty_tpl->tpl_vars['node']->value['cms'])>0) {?>
			<?php  $_smarty_tpl->tpl_vars['cms'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['cms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cms']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cms']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cms']->key => $_smarty_tpl->tpl_vars['cms']->value) {
$_smarty_tpl->tpl_vars['cms']->_loop = true;
 $_smarty_tpl->tpl_vars['cms']->iteration++;
 $_smarty_tpl->tpl_vars['cms']->last = $_smarty_tpl->tpl_vars['cms']->iteration === $_smarty_tpl->tpl_vars['cms']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cmsTreeBranch']['last'] = $_smarty_tpl->tpl_vars['cms']->last;
?>
				<li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['cmsTreeBranch']['last']) {?>class="last"<?php }?> ><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
			<?php } ?>
		<?php }?>
		</ul>
	<?php } elseif (isset($_smarty_tpl->tpl_vars['node']->value['cms'])&&count($_smarty_tpl->tpl_vars['node']->value['cms'])>0) {?>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['cms'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['cms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cms']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cms']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cms']->key => $_smarty_tpl->tpl_vars['cms']->value) {
$_smarty_tpl->tpl_vars['cms']->_loop = true;
 $_smarty_tpl->tpl_vars['cms']->iteration++;
 $_smarty_tpl->tpl_vars['cms']->last = $_smarty_tpl->tpl_vars['cms']->iteration === $_smarty_tpl->tpl_vars['cms']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cmsTreeBranch']['last'] = $_smarty_tpl->tpl_vars['cms']->last;
?>
			<li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['cmsTreeBranch']['last']) {?>class="last"<?php }?> ><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
		<?php } ?>
		</ul>
	<?php }?>
</li>
<?php }} ?>
