<?php
class ControllerFeedGoogleBusinessData extends Controller {
	public function index() {
		if ($this->config->get('google_business_data_status')) {
			$output  = '"ID",ID2,Item title,Final URL,Image URL,Item subtitle,Item description,Item category,Price,Sale price,Contextual keywords,Item address,Tracking template,Custom parameter,Destination URL
';
			$this->load->model('catalog/category');
			$this->load->model('catalog/product');
			$this->load->model('feed/google_merchant_center');
			$this->load->model('tool/image');

			$lang="";
			$currency_code="";
			$file_append="";
			$file_only=$this->config->get('google_business_data_file');
			$google_business_description=$this->config->get('google_business_data_description');
			$google_business_sold_out=$this->config->get('google_business_data_sold_out');
			$google_business_description_html=$this->config->get('google_business_data_description_html');
			$google_business_data_feed_id1=$this->config->get('google_business_data_feed_id1');
			$google_business_data_feed_id2=$this->config->get('google_business_data_feed_id2');
			$google_business_data_use_taxes=$this->config->get('google_business_data_use_taxes');
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

			$use_tax=true;
			if ($google_business_data_use_taxes==2)
				$use_tax=false;

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
			if ($file_only){
				$filetitle='feeds/google_business_data'.$file_append.'.csv';
				$filename = DIR_DOWNLOAD.$filetitle;
				$dirname = dirname($filename);
				if (!is_dir($dirname))
				{
   	 				mkdir($dirname, 0755, true);
				}
				file_put_contents($filename.'.tmp', "");
			}

			//$products = $this->model_feed_google_merchant_center->getProducts($lang,$store);
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
				if ($product['quantity']==0 && $google_business_sold_out=='0' || in_array($product['product_id'],$black_product_id))
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
				$link=str_replace(" ","%20",$this->url->link('product/product', 'product_id=' . $product['product_id']));
				if (strpos($link, "index.php?") !== false)
					$link.=$product_url;
				elseif ($product_url!="")
					$link.="?".substr($product_url, 5);
        $link = htmlspecialchars_decode($this->fixEncoding($link),ENT_COMPAT);
				if ($google_business_data_feed_id1=='product_id')
					$output .= $product['product_id'] . ',';
				else
					$output .= trim(htmlspecialchars_decode(str_replace(',','',$product['model']),ENT_COMPAT)).',';
				if ($google_business_data_feed_id2=='product_id')
					$output .= $product['product_id'].',';
				elseif ($google_business_data_feed_id2=='model')
					$output .= trim(htmlspecialchars_decode(str_replace(',','',$product['model']),ENT_COMPAT)).',';
				else
					$output .= ',';
				$output .= str_replace(",", " ",trim(htmlspecialchars_decode($this->fixEncoding($product['name']),ENT_COMPAT))).','.$link.',';

				if ($product['image']) {
					$image=str_replace(" ","%20",$this->model_tool_image->resize($product['image'], $width, $height));
					if (strpos($image, 'http') === false) {
							$image=$base_url.$image;
					}
					$output .= $image.',';
				} else {
					$output .= ',';
				}
				$output .=',';

				$product_details="";
				if ($google_business_description)
					$product_details = $product['meta_description'];
				else
					$product_details = $product['description'];

				if ($google_business_description_html){
					$product_details=$this->fixEncoding($product_details);
					$product_details= str_replace("\t", " ",str_replace(",", " ",str_replace("&nbsp;", " ",str_replace("
", " ",str_replace("\n", " ", str_replace("\r", " ", str_replace("\r\n", " ", $this->strip_html_tags(htmlspecialchars_decode($product_details,ENT_COMPAT)))))))));
					$product_details=trim($product_details);

				} else {
					$product_details= str_replace(",", " ",str_replace("
", "<br/>",str_replace("\t", " ",str_replace("\n", "<br/>", str_replace("\r", "<br/>", str_replace("\r\n", "<br/>", htmlspecialchars_decode($product_details,ENT_COMPAT)))))));
						while (strpos($product_details, "<br/><br/><br/>") !== false) {
							$product_details=str_replace("<br/><br/><br/>","<br/><br/>",$product_details);
					}
					$product_details=$this->fixEncoding($product_details);
				}
				while (strpos($product_details, "  ") !== false) {
					$product_details=str_replace("  "," ",$product_details);
				}
				$product_details = htmlspecialchars_decode($product_details,ENT_COMPAT);
				$output .= substr($product_details,0,1000).',';

				$cat_string = '';
				foreach ($categories as $category) {
					$path = $this->getPath($category['category_id'],$lang,$store);

					if ($path) {
						$string = '';
						foreach (explode('_', $path) as $path_id) {
							$category_info = $this->model_feed_google_merchant_center->getCategory($path_id,$lang,$store);
							if ($category_info) {
								if (!$string) {
									$string = trim(htmlspecialchars_decode($this->fixEncoding($category_info['name']),ENT_COMPAT));
								} else {
									$string .= ' > ' . trim(htmlspecialchars_decode($this->fixEncoding($category_info['name']),ENT_COMPAT));
								}
							}
						}

						$cat_string .=  str_replace("  ", " ", str_replace(",", " ", $string)).';';
					}
				}
				$output .= trim($cat_string,';').',';

				$price=0;
				$special_price=0;
				if ($google_business_data_use_taxes==0) {
					$price = $this->tax->calculate($product['price'], $product['tax_class_id']);
					if ((float)$product['special'])
						$special_price = $this->tax->calculate($product['special'], $product['tax_class_id']);
					else
						$special_price = $this->tax->calculate($product['price'], $product['tax_class_id']);
				} else {
					$price = $this->tax->calculate($product['price'], $product['tax_class_id'],$use_tax);
					if ((float)$product['special'])
						$special_price = $this->tax->calculate($product['special'], $product['tax_class_id'],$use_tax);
					else
						$special_price = $this->tax->calculate($product['price'], $product['tax_class_id'],$use_tax);
				}
				$output .= '"'.$this->currency->format($price, $currency_code, $currency_value, false).' '.$currency_code.'",';
				$output .= '"'.$this->currency->format($special_price, $currency_code, $currency_value, false) . ' '.$currency_code.'",';


				$output .= trim(str_replace ('; ' , ';' ,str_replace (' ;' , ';' ,str_replace (',' , ';' , str_replace("\n", ";", str_replace("\r", ";", str_replace("\r\n", ";",$product['meta_keyword'] ))) ))),';').',,,
';
		}
				if ($file_only) {
					file_put_contents($filename.'.tmp', $output, FILE_APPEND | LOCK_EX);
					$output="";
				}
				$start=$start+$limit;
				$data_limit['start'] = $start;
				$products = $this->model_feed_google_merchant_center->getProducts($lang,$store,$data_limit);
			}
			if ($file_only) {
				file_put_contents($filename.'.tmp', $output, FILE_APPEND | LOCK_EX);
				rename ( $filename.'.tmp' , $filename );
				$file_location = str_replace( str_replace ("catalog/",'',DIR_APPLICATION),"",DIR_DOWNLOAD);
				$file_url = $file_location . $filetitle;
				$file_url = $base_url.$file_url;
				header('Location: ' . $file_url, true, 302);
					die();
			} else {
				$this->response->addHeader('Content-Type: text/csv');
				$this->response->addHeader('Content-disposition: attachment;filename=google_busines_data.csv');
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
		while (ControllerFeedGoogleBusinessData::startsWith($string,$remove)){
  			$string = substr($string, strlen($remove));
		}
		while (ControllerFeedGoogleBusinessData::endsWith($string,$remove)){
        		$string = substr($string, 0, strlen($string) - strlen($remove));
		}
		return $string;
	}
	public static function fixEncoding($string){
		$string=str_replace("&amp;nbsp;"," ",$string);
		$string=str_replace("&amp;acute;","´",$string);
		$string=str_replace("&amp;rsquo;","’",$string);
		$string=str_replace("&amp;#39;","'",$string);
		$string=str_replace("&amp;reg;","®",$string);
		$string=str_replace("&amp;copy;","©",$string);
		$string=str_replace("&amp;mdash;","—",$string);
		$string=str_replace("&amp;auml;","ä",$string);
		$string=str_replace("&amp;ouml;","ö",$string);
		$string=str_replace("&amp;lsquo;","‘",$string);
		$string=str_replace("&amp;ldquo;","“",$string);
		$string=str_replace("&amp;sbquo;","‚",$string);
		$string=str_replace("&amp;bdquo;","„",$string);
		$string=str_replace("&amp;rdquo;","”",$string);
		$string=str_replace("&amp;ndash;","–",$string);
		$string=str_replace("&amp;permil;","‰",$string);
		$string=str_replace("&amp;euro;","€",$string);
		$string=str_replace("&amp;lsaquo;","‹",$string);
		$string=str_replace("&amp;rsaquo;","›",$string);
		$string=str_replace("&amp;lt;","&lt;",$string);
		$string=str_replace("&amp;gt;","&gt;",$string);
		$string=str_replace("&amp;quot;","&quot;",$string);
		$string=str_replace("&amp;trade;","™",$string);
		$string=str_replace("&amp;amp;","&amp;",$string);
		return $string;
	}
}
