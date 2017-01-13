<?php /*%%SmartyHeaderCode:176999867858790fc74b7995-46375013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f9ed6a46bd75fd0ff401c436ba41a3605d184c2' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1484327940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176999867858790fc74b7995-46375013',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58790fc75d0784_54542665',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58790fc75d0784_54542665')) {function content_58790fc75d0784_54542665($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://prestashop.local/index.php?controller=my-account" title="Zarządzaj moim kontem klienta" rel="nofollow">Moje konto</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://prestashop.local/index.php?controller=history" title="Moje zamówienia" rel="nofollow">Moje zamówienia</a></li>
						<li><a href="http://prestashop.local/index.php?controller=order-slip" title="Moje rachunki" rel="nofollow">Moje rachunki</a></li>
			<li><a href="http://prestashop.local/index.php?controller=addresses" title="Moje adresy" rel="nofollow">Moje adresy</a></li>
			<li><a href="http://prestashop.local/index.php?controller=identity" title="Zarządzaj moimi informacjami osobistymi" rel="nofollow">Moje informacje osobiste</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
