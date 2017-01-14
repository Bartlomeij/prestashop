<?php /*%%SmartyHeaderCode:1832771136587937a3aaafc5-57519610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4935d95a9ac67ddc5488009628eaf2f74b69ce2' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blockstore/blockstore.tpl',
      1 => 1484327940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1832771136587937a3aaafc5-57519610',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587937a3b08372_87948888',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587937a3b08372_87948888')) {function content_587937a3b08372_87948888($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="http://prestashop.local/index.php?controller=stores" title="Nasze sklepy">
			Nasze sklepy
		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://prestashop.local/index.php?controller=stores" title="Nasze sklepy">
				<img class="img-responsive" src="http://prestashop.local/modules/blockstore/store.jpg" alt="Nasze sklepy" />
			</a>
		</p>
				<div>
			<a 
			class="btn btn-default button button-small" 
			href="http://prestashop.local/index.php?controller=stores" 
			title="Nasze sklepy">
				<span>Odkryj nasze sklepy<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
