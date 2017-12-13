<?php
class ControllerFeedFacebookCatalog extends Controller {
	public function index() {
		if ($this->config->get('facebook_catalog_status')) {

			$this->load->model('catalog/category');
			$this->load->model('catalog/product');
			$this->load->model('feed/google_merchant_center');
			$this->load->model('tool/image');

			$lang="";
			$currency_code="";
			$file_append="";
			$file_only=$this->config->get('facebook_catalog_file');
			$product_url="";
			if (isset($_GET['store'])) {
    				$store=$_GET['store'];
				$file_append.="_".$_GET['store'];
			} else {
    				$store=$this->config->get('config_store_id');
			}
			if (isset($_GET['lang'])) {
    				$lang=$this->model_feed_google_merchant_center->getLangID($_GET['lang']);
				$file_append.="_".$_GET['lang'];
				if ($_GET['lang']!=$this->config->get('config_language')){
					$product_url.="&amp;language=".$_GET['lang'];
				}
			} else {
    				$lang=$this->config->get('config_language_id');
			}
			if (isset($_GET['curr'])) {
				$currency_code=$_GET['curr'];
				$file_append.="_".$_GET['curr'];
				if ($_GET['curr']!=$this->config->get('config_currency')){
					$product_url.="&amp;currency=".$_GET['curr'];
				}
			}else{
    				$currency_code = $this->config->get('config_currency');
			}
			$currency_value = $this->currency->getValue($currency_code);

			$black_product_id=array();
			if (isset($_GET['exclude_product_id'])) {
				$black_product_id = explode (",", $_GET['exclude_product_id']);
			}
			$allowedCategories=array();
			if (isset($_GET['category_id'])) {
				$allowedCategories = explode (",", $_GET['category_id']);
			}
			$base_url="";
			if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
				$base_url = HTTP_SERVER;
			} else {
				$base_url = HTTPS_SERVER;
			}
			if ($file_only) {
				$filetitle='feeds/facebook_catalog'.$file_append.'.xml';
				$filename = DIR_DOWNLOAD.$filetitle;
				$dirname = dirname($filename);
				if (!is_dir($dirname))
				{
   	 				mkdir($dirname, 0755, true);
				}
				file_put_contents($filename.'.tmp', "");
			}

			$output  = '<?xml version="1.0" encoding="UTF-8" ?>';
			$output .= '<rss version="2.0">';
			$output .= '<channel>';
			$output .= '<title>' . $this->config->get('config_name') . '</title>';
			$output .= '<link>' . HTTP_SERVER . '</link>';

			$facebook_catalog_feed_id1=$this->config->get('facebook_catalog_feed_id1');
			$facebook_catalog_availability=$this->config->get('facebook_catalog_availability');
			$facebook_catalog_description=$this->config->get('facebook_catalog_description');
			$facebook_catalog_description_html=$this->config->get('facebook_catalog_description_html');
			//$google_merchant_center_status=$this->config->get('google_merchant_center_status');
			$facebook_catalog_use_taxes=$this->config->get('facebook_catalog_use_taxes');
			$attribute_id_type=$this->config->get('facebook_catalog_attribute_type');
			$use_tax=true;
			if ($facebook_catalog_use_taxes==2)
				$use_tax=false;
			$width = $this->config->get('config_image_popup_width');
			$height = $this->config->get('config_image_popup_height');
			if ($width<600 || $height<600) {
				$width=600;
				$height=600;
			}
			$limit=1000;
			$start=0;
			$data_limit = array(
    			"start" => $start,
    			"limit" => $limit,
			);
			$products = $this->model_feed_google_merchant_center->getProducts($lang,$store,$data_limit);
		while (count($products)>0) {
			foreach ($products as $product) {
				if ($product['quantity']==0 && $facebook_catalog_availability=="2" || in_array($product['product_id'],$black_product_id))
					continue;

				$categories = $this->model_catalog_product->getCategories($product['product_id']);
				if (empty($allowedCategories)==false){
					$inCategory=false;
					foreach ($categories as $category) {
						if (in_array ($category['category_id'] , $allowedCategories ))
							$inCategory=true;
					}
					if ($inCategory==false)
						continue;
				}
				/*if ($product['description']) {*/
				$output .= '
<item>';
				$title=$this->fixEncoding($product['name']);
				$title=trim(htmlspecialchars(htmlspecialchars_decode($title,ENT_COMPAT),ENT_COMPAT, 'UTF-8'));
				$output .= '<title>' . $title . '</title>';
				$link=str_replace(" ","%20",$this->url->link('product/product', 'product_id=' . $product['product_id']));
				if (strpos($link, "index.php?") !== false)
					$link.=$product_url;
				elseif ($product_url!="")
					$link.="?".substr($product_url, 5);
				$output .= '<link>' . $link . '</link>';
				$product_details="";
				if ($facebook_catalog_description)
					$product_details = $product['meta_description'];
				else
					$product_details = $product['description'];

				if ($facebook_catalog_description_html){
					$product_details= str_replace("
", " ",str_replace("\n", " ", str_replace("\t", " ", str_replace("\r", " ", str_replace("\r\n", " ", htmlspecialchars($this->strip_html_tags(htmlspecialchars_decode($product_details,ENT_COMPAT)),ENT_COMPAT, 'UTF-8'))))));
					while (strpos($product_details, "  ") !== false) {
						$product_details=str_replace("  "," ",$product_details);
					}
					$product_details=$this->fixEncoding($product_details);

					while($this->startsWith($product_details,"&amp;nbsp;") || $this->endsWith($product_details,"&amp;nbsp;") || $this->startsWith($product_details," ") || $this->endsWith($product_details," ")) {
						$product_details = $this->clearDescription($product_details,"&amp;nbsp;");
						$product_details = $this->clearDescription($product_details," ");
					}
					$product_details=trim($product_details);
				} else {
					$product_details = htmlspecialchars(htmlspecialchars_decode($product_details,ENT_COMPAT),ENT_COMPAT, 'UTF-8');
				}

				$output .= '<description>' .  $product_details. '</description>';
				$brand=trim(htmlspecialchars(htmlspecialchars_decode($product['manufacturer'],ENT_COMPAT), ENT_COMPAT, 'UTF-8'));
				$output .= '<brand>' . $brand . '</brand>';
				$output .= '<condition>new</condition>';
				if ($facebook_catalog_feed_id1=='model')
					$output .= '<id>' . trim(htmlspecialchars(htmlspecialchars_decode(str_replace(',','',$product['model']),ENT_COMPAT), ENT_COMPAT, 'UTF-8')) . '</id>';
				else
					$output .= '<id>' . $product['product_id'] . '</id>';

				if ($product['image']) {
					$image=htmlspecialchars($this->model_tool_image->resize($product['image'], $width, $height), ENT_COMPAT, 'UTF-8');
					if (strpos($image, 'http') === false) {
							$image=$base_url.$image;
					}
					$output .= '<image_link>' . $image . '</image_link>';
				} else {
					$output .= '<image_link></image_link>';
				}

				$gtin=$product['upc'];
				if ($gtin=='')
					$gtin=$product['ean'];
				if ($gtin=='')
					$gtin=$product['jan'];
				if ($gtin=='')
					$gtin=$product['isbn'];

				$output .= '<gtin>' . trim($gtin) . '</gtin>';

				$mpn = $product['mpn'];
				if ($mpn=='' && $gtin=='' && $brand==''){
					$mpn=trim(htmlspecialchars(htmlspecialchars_decode(str_replace(',','',$product['model']),ENT_COMPAT), ENT_COMPAT, 'UTF-8'));
				}
				$output .= '<mpn>' . trim($mpn) . '</mpn>';

				$price=0;
				$special_price=0;
				if ($facebook_catalog_use_taxes==0) {
					$price = $this->tax->calculate($product['price'], $product['tax_class_id']);
					if ((float)$product['special'])
						$special_price = $this->tax->calculate($product['special'], $product['tax_class_id']);
				} else {
					$price = $this->tax->calculate($product['price'], $product['tax_class_id'],$use_tax);
					if ((float)$product['special'])
						$special_price = $this->tax->calculate($product['special'], $product['tax_class_id'],$use_tax);
				}
				$output .= '<price>' . round($price,2). ' '. $currency_code . '</price>';
				if ((float)$product['special']) {
					$output .= '<sale_price>' . round($special_price,2). ' '.  $currency_code . '</sale_price>';
				}

				$cat_string='';
				$category_id='';
				$counter=0;
				foreach ($categories as $category) {
					$path = $this->getPath($category['category_id'],$lang,$store);
					$count=1;
					if ($path) {
						$string = '';
						foreach (explode('_', $path) as $path_id) {
							$category_info = $this->model_feed_google_merchant_center->getCategory($path_id,$lang,$store);
							$count++;
							if ($category_info) {
								if (!$string) {
									$string = trim(htmlspecialchars(htmlspecialchars_decode($category_info['name'],ENT_COMPAT), ENT_COMPAT, 'UTF-8'));
								} else {
									$string .= ' &gt; ' . trim(htmlspecialchars(htmlspecialchars_decode($category_info['name'],ENT_COMPAT), ENT_COMPAT, 'UTF-8'));
								}
							}
						}
						$cat_string = '<product_type>' . $string . '</product_type>' . $cat_string;
					}
					if ($count>$counter) {
						$counter=$count;
						$category_id=$category['category_id'];
					}
				}

				$category_id_google = $this->model_feed_google_merchant_center->getTaxonomy($category_id);
				if (isset($category_id_google['name']))
					$output .= '<google_product_category>' . trim(htmlspecialchars(htmlspecialchars_decode($category_id_google['name'],ENT_COMPAT), ENT_COMPAT, 'UTF-8')) .'</google_product_category>';

				if ($attribute_id_type=='-1') {
					$output .= $cat_string;
				} else {
					$product_type = $this->model_feed_google_merchant_center->getProductExtraType($product['product_id'],$attribute_id_type,$lang);
					if ($product_type=='')
						$output .= $cat_string;
					else
						$output .= '<product_type>' . trim(htmlspecialchars(htmlspecialchars_decode($product_type,ENT_COMPAT), ENT_COMPAT, 'UTF-8')) . '</product_type>';
				}

				if ($product['weight']!="0.00"){
					$weight = $this->weight->format($product['weight'], $product['weight_class_id']);
					if (strpos($weight, 'g') !== false || strpos($weight, 'lb') !== false || strpos($weight, 'oz') !== false)
					$output .= '<shipping_weight>' . $weight . '</shipping_weight>';
				}
				if ($facebook_catalog_availability)
					$output .= '<availability>' . ($product['quantity'] ? 'in stock' : 'available for order') . '</availability>';
				else
					$output .= '<availability>' . ($product['quantity'] ? 'in stock' : 'out of stock') . '</availability>';
				$output .= '</item>';
				}

				$start=$start+$limit;
				$data_limit['start'] = $start;
				$products = $this->model_feed_google_merchant_center->getProducts($lang,$store,$data_limit);
				if ($file_only) {
					file_put_contents($filename.'.tmp', $output, FILE_APPEND | LOCK_EX);
					$output="";
				}
			}

			$output .= '</channel>';
			$output .= '</rss>';

			if ($file_only) {
				file_put_contents($filename.'.tmp', $output, FILE_APPEND | LOCK_EX);
				rename ( $filename.'.tmp' , $filename );
				$file_location = str_replace( str_replace ("catalog/",'',DIR_APPLICATION),"",DIR_DOWNLOAD);
				$file_url = $file_location . $filetitle;
				$file_url = $base_url.$file_url;
				header('Location: ' . $file_url, true, 302);
					die();
				} else {
				header('Content-Type: application/xml; charset=UTF-8');
				$this->response->addHeader('Content-Type: application/rss+xml');
				$this->response->setOutput($output);
			}
		} else {
			$this->response->setOutput('<head><meta name="robots" content="noindex"></head><body>Disabled feed.</body>');
		}
	}

	protected function getPath($parent_id,$lang,$store, $current_path = '') {
		$category_info = $this->model_feed_google_merchant_center->getCategory($parent_id,$lang,$store);

		if ($category_info) {
			$path="";
			if (!$current_path) {
				$new_path = $category_info['category_id'];
			} else {
				$new_path = $category_info['category_id'] . '_' . $current_path;
			}
			if ($parent_id != $category_info['parent_id'])
				$path = $this->getPath($category_info['parent_id'],$lang,$store, $new_path);

			if ($path) {
				return $path;
			} else {
				return $new_path;
			}
		}
	}

	protected function strip_html_tags( $text )
	{
    	$text = preg_replace(
        array(
          // Remove invisible content
            '@<head[^>]*?>.*?</head>@siu',
            '@<style[^>]*?>.*?</style>@siu',
            '@<script[^>]*?.*?</script>@siu',
            '@<object[^>]*?.*?</object>@siu',
            '@<embed[^>]*?.*?</embed>@siu',
            '@<applet[^>]*?.*?</applet>@siu',
            '@<noframes[^>]*?.*?</noframes>@siu',
            '@<noscript[^>]*?.*?</noscript>@siu',
            '@<noembed[^>]*?.*?</noembed>@siu',
          // Add line breaks before and after blocks
            '@</?((address)|(blockquote)|(center)|(del))@iu',
            '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
            '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
            '@</?((table)|(th)|(td)|(caption))@iu',
            '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
            '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
            '@</?((frameset)|(frame)|(iframe))@iu',
        ),
        array(
            ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
            "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
            "\n\$0", "\n\$0",
        ),
        $text );
	return strip_tags( $text );
	}
	public static function startsWith($haystack, $needles)
	{
		foreach ((array) $needles as $needle)
		{
			if ($needle != '' && strpos($haystack, $needle) === 0) return true;
		}
		return false;
	}
	public static function endsWith($haystack, $needles)
	{
		foreach ((array) $needles as $needle)
		{
			if ((string) $needle === substr($haystack, -strlen($needle))) return true;
		}
		return false;
	}
	public static function clearDescription($string, $remove)
	{
		while (ControllerFeedFacebookCatalog::startsWith($string,$remove)){
  			$string = substr($string, strlen($remove));
		}
		while (ControllerFeedFacebookCatalog::endsWith($string,$remove)){
        		$string = substr($string, 0, strlen($string) - strlen($remove));
		}
		return $string;
	}
	public static function fixEncoding($string){
		$string=str_replace("&amp;lt;","&lt;",$string);
		$string=str_replace("&amp;gt;","&gt;",$string);
		$string=str_replace("&amp;quot;","&quot;",$string);
		$string=str_replace("&amp;amp;","&amp;",$string);
		return $string;
	}
}
?>
