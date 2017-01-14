<?php /*%%SmartyHeaderCode:783615976587937a3523428-48597254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '628cde27b2b430ca1ce6e52180184b9b45b319c0' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blockcategories/blockcategories.tpl',
      1 => 1484327940,
      2 => 'file',
    ),
    'b72342a38ddbc07b90c0b63a9132dba7e7cac43b' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blockcategories/category-tree-branch.tpl',
      1 => 1484327940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '783615976587937a3523428-48597254',
  'variables' => 
  array (
    'blockCategTree' => 0,
    'currentCategory' => 0,
    'isDhtml' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587937a35ae536_53959002',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587937a35ae536_53959002')) {function content_587937a35ae536_53959002($_smarty_tpl) {?><!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h2 class="title_block">
					Dresses
			</h2>
	<div class="block_content">
		<ul class="tree dhtml">
												
<li >
	<a 
	href="http://prestashop.local/index.php?id_category=9&amp;controller=category" title="You are looking for a dress for every day? Take a look at 
 our selection of dresses to find one that suits you.">
		Casual Dresses
	</a>
	</li>

																
<li >
	<a 
	href="http://prestashop.local/index.php?id_category=10&amp;controller=category" title="Browse our different dresses to choose the perfect dress for an unforgettable evening!">
		Evening Dresses
	</a>
	</li>

																
<li class="last">
	<a 
	href="http://prestashop.local/index.php?id_category=11&amp;controller=category" title="Short dress, long dress, silk dress, printed dress, you will find the perfect dress for summer.">
		Summer Dresses
	</a>
	</li>

									</ul>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>
