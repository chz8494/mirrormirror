<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["product_blocks_module"] = array (
  1 => 
  array (
    'type' => '2',
    'block_name' => 
    array (
      1 => 'Request quote!',
      $language_id => 'Request quote!',
    ),
    'icon' => 'catalog/request-quote.png',
    'icon_position' => 'left',
    'product_blocks_module' => '10',
    'html' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'show_on_products_from' => 'products',
    'product' => '',
    'products' => '49,41,36,34',
    'category' => '',
    'categories' => '',
    'layout_id' => '99999',
    'position' => 'product_enquiry',
    'status' => '1',
    'sort_order' => '',
  ),
  2 => 
  array (
    'type' => '1',
    'block_name' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'icon' => '',
    'icon_position' => 'left',
    'product_blocks_module' => '1',
    'html' => 
    array (
      1 => '&lt;div style=&quot;padding-top: 50px;&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/product-block-01.png&quot; alt=&quot;Product block&quot; style=&quot;display: block&quot;&gt;&lt;/a&gt;&lt;/div&gt;',
      $language_id => '&lt;div style=&quot;padding-top: 50px;&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/product-block-01.png&quot; alt=&quot;Product block&quot; style=&quot;display: block&quot;&gt;&lt;/a&gt;&lt;/div&gt;',
    ),
    'show_on_products_from' => 'all',
    'product' => '',
    'products' => '',
    'category' => '',
    'categories' => '',
    'layout_id' => '99999',
    'position' => 'product_image_bottom',
    'status' => '1',
    'sort_order' => '',
  ),
  3 => 
  array (
    'type' => '1',
    'block_name' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'icon' => '',
    'icon_position' => 'left',
    'product_blocks_module' => '1',
    'html' => 
    array (
      1 => '&lt;div style=&quot;padding-bottom: 30px&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/product-block-02.png&quot; alt=&quot;Product block&quot; style=&quot;display: block&quot;&gt;&lt;/a&gt;&lt;/div&gt;',
      $language_id => '&lt;div style=&quot;padding-bottom: 30px&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/product-block-02.png&quot; alt=&quot;Product block&quot; style=&quot;display: block&quot;&gt;&lt;/a&gt;&lt;/div&gt;',
    ),
    'show_on_products_from' => 'all',
    'product' => '',
    'products' => '',
    'category' => '',
    'categories' => '',
    'layout_id' => '99999',
    'position' => 'product_options_center',
    'status' => '1',
    'sort_order' => '',
  ),
  4 => 
  array (
    'type' => '1',
    'block_name' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'icon' => '',
    'icon_position' => 'left',
    'product_blocks_module' => '1',
    'html' => 
    array (
      1 => '&lt;div class=&quot;product-block&quot;&gt;
   &lt;div class=&quot;title-block&quot;&gt;Another block&lt;/div&gt;
   &lt;div class=&quot;block-content&quot;&gt;
      &lt;ul class=&quot;product-contact&quot;&gt;
       &lt;li&gt;&lt;img src=&quot;image/catalog/icon-mail2.png&quot; alt=&quot;Email&quot;&gt;&lt;p&gt;email.example@gmail.com&lt;/p&gt;&lt;/li&gt;
       &lt;li&gt;&lt;img src=&quot;image/catalog/icon-phone2.png&quot; alt=&quot;Phone&quot;&gt;&lt;p&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;&lt;/li&gt;
      &lt;/ul&gt;
      
      &lt;a href=&quot;index.php?route=information/contact&quot; class=&quot;button button-type-2&quot;&gt;Contact form&lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;

&lt;a href=&quot;#&quot; class=&quot;hidden-xs hidden-sm&quot;&gt;&lt;img src=&quot;image/catalog/product-block-03.png&quot; alt=&quot;Product block&quot; style=&quot;display: block;margin: 0px auto;position: relative;margin-top:-1px&quot;&gt;&lt;/a&gt;',
      $language_id => '&lt;div class=&quot;product-block&quot;&gt;
   &lt;div class=&quot;title-block&quot;&gt;Another block&lt;/div&gt;
   &lt;div class=&quot;block-content&quot;&gt;
      &lt;ul class=&quot;product-contact&quot;&gt;
       &lt;li&gt;&lt;img src=&quot;image/catalog/icon-mail2.png&quot; alt=&quot;Email&quot;&gt;&lt;p&gt;email.example@gmail.com&lt;/p&gt;&lt;/li&gt;
       &lt;li&gt;&lt;img src=&quot;image/catalog/icon-phone2.png&quot; alt=&quot;Phone&quot;&gt;&lt;p&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;&lt;/li&gt;
      &lt;/ul&gt;
      
      &lt;a href=&quot;index.php?route=information/contact&quot; class=&quot;button button-type-2&quot;&gt;Contact form&lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;

&lt;a href=&quot;#&quot; class=&quot;hidden-xs hidden-sm&quot;&gt;&lt;img src=&quot;image/catalog/product-block-03.png&quot; alt=&quot;Product block&quot; style=&quot;display: block;margin: 0px auto;position: relative;margin-top:-1px&quot;&gt;&lt;/a&gt;',
    ),
    'show_on_products_from' => 'all',
    'product' => '',
    'products' => '',
    'category' => '',
    'categories' => '',
    'layout_id' => '99999',
    'position' => 'product_custom_block',
    'status' => '1',
    'sort_order' => '',
  ),
); 

$output2 = array();
$output2["product_blocks_module"] = $this->config->get('product_blocks_module');

if(!is_array($output["product_blocks_module"])) $output["product_blocks_module"] = array();
if(!is_array($output2["product_blocks_module"])) $output2["product_blocks_module"] = array();
$output3 = array();
$output3["product_blocks_module"] = array_merge($output["product_blocks_module"], $output2["product_blocks_module"]);

$this->model_setting_setting->editSetting( "product_blocks", $output3 );	

?>