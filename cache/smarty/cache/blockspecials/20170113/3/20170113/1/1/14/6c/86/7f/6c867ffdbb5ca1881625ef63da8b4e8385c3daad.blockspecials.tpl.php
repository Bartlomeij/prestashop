<?php /*%%SmartyHeaderCode:1500384311587937a395b131-96960923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c867ffdbb5ca1881625ef63da8b4e8385c3daad' => 
    array (
      0 => '/home/vagrant/Code/prestashop/themes/default-bootstrap/modules/blockspecials/blockspecials.tpl',
      1 => 1484327940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1500384311587937a395b131-96960923',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58795177d06d07_69321003',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58795177d06d07_69321003')) {function content_58795177d06d07_69321003($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://prestashop.local/index.php?controller=prices-drop" title="Promocje">
            Promocje
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://prestashop.local/index.php?id_product=5&amp;controller=product">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://prestashop.local/img/p/1/2/12-small_default.jpg" 
                    alt="" 
                    title="Printed Summer Dress" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://prestashop.local/index.php?id_product=5&amp;controller=product" title="Printed Summer Dress">
                            Printed Summer Dress
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Long printed dress with thin...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    35,65 zł                            </span>
                                                                                                                                 <span class="price-percent-reduction">-5%</span>
                                                                                         <span class="old-price">
                                                                    37,52 zł                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://prestashop.local/index.php?controller=prices-drop" 
            title="Wszystkie promocje">
                <span>Wszystkie promocje<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
