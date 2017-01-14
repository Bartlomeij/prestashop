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
  'unifunc' => 'content_587952ee951e45_55174464',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587952ee951e45_55174464')) {function content_587952ee951e45_55174464($_smarty_tpl) {?>
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
            	<a class="products-block-image" href="http://prestashop.local/index.php?id_product=7&amp;controller=product">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://prestashop.local/img/p/2/0/20-small_default.jpg" 
                    alt="" 
                    title="Printed Chiffon Dress" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://prestashop.local/index.php?id_product=7&amp;controller=product" title="Printed Chiffon Dress">
                            Printed Chiffon Dress
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Printed chiffon knee length dress...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    20,17 zł                            </span>
                                                                                                                                 <span class="price-percent-reduction">-20%</span>
                                                                                         <span class="old-price">
                                                                    25,22 zł                            </span>
                            
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
