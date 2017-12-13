<?php
// Heading
$_['heading_title']    = 'Google Merchant Center';

// Text
$_['text_feed']        = 'Product Feeds';
$_['text_success']     = 'Success: You have modified Google Merchant Center feed!';
$_['text_edit']        = 'Edit Google Merchant Center feed';
$_['text_enabled_default']        = 'Enabled (default)';

// Entry
$_['entry_status']     = 'Status:';
$_['entry_file']     = 'Save to file';
$_['entry_data_feed']  = 'Data Feed Url:';

$_['entry_google_merchant_category']     = 'Google/Facebook taxonomy category';
$_['entry_google_merchant_center_attribute']  = 'Source of the color value';
$_['entry_google_merchant_center_option']  = 'Source of the size value - options (Apparel & Shoes only)';
$_['entry_google_merchant_center_attribute_product']  = 'Set colors in products (merchant tab)';
$_['entry_google_merchant_center_availability']     = 'Sold out items in product feed';
$_['entry_google_merchant_center_shipping_flat']  = 'Shipping rate';
$_['entry_google_merchant_base']  = 'Main categories';
$_['tab_taxonomy']  = 'Google merchant center';
$_['entry_google_merchant_gender']     = 'Gender<br />(Apparel & Shoes only)';
$_['entry_google_merchant_age_group']     = 'Age group<br />(Apparel & Shoes only)';
$_['entry_google_merchant_color']     = 'Color (if not set via attributes)';
$_['entry_google_merchant_center_attribute_type']  = 'Source of the product type value';
$_['entry_google_merchant_center_attribute_product_type']  = 'Generated from categories (default)';
$_['entry_google_merchant_center_description']  = 'Use meta description:';
$_['entry_google_merchant_center_description_html']  = 'Remove html tags from the description:';
$_['entry_google_merchant_center_feed_id1']                = 'Product ID';
$_['entry_google_merchant_center_use_taxes']                = 'Include taxes in the price:';

// Help
$_['help_google_merchant_color']     = 'Set a color, or select an attribute in Extensions->Feeds->[Google Merchant Center]';
$_['help_google_merchant_center_attribute']  = "Select an attribute, or set the color in Catalog->Products[edit](Google merchant center).";
$_['help_google_merchant_center_availability']     = 'Defines how mark zero stock products in the feed.';
$_['help_google_merchant_center_shipping_flat']  = 'Shipping flat rate for the product feed (merchant center shopping)';
$_['help_google_merchant_base']  = 'Selecting your category will reduce the amount of options available in the category setup Catalog->Categories[Edit](Data).';
$_['help_google_merchant_center_option']  = 'Select an option which contains the apparel size.';
$_['help_google_merchant_center_attribute_type']  = 'Category based product type or an attribute. If selected attribute is not set, category is used instead.';
$_['help_file']     = 'The feed will be saved in ../system/storage/download/feeds/';
$_['help_google_merchant_center_feed_id1']                = 'Product ID used on the remarketing tag (ecomm_prodid)';
$_['help_google_merchant_center_use_taxes']                = 'When enabled (default) prices will include taxes. In USA, Canada and India the prices will be always without taxes.';
$_['help_google_merchant_category']     = 'You can reduce the number of categories in the google merchant center feed settings.';
$_['help_data_feed']  = 'You can change the link parameters to get a feeds in different languages, currencies etc.:<br />Languages: &lang={language code}<br />Currencies: &curr={currency code}<br />Multistore: &store={store id number}<br />Skip products: &exclude_product_id={product ids separated by comma} Example: &exclude_product_id=42,30,47<br />Only some categories: &category_id={category ids separated by comma} Example: &category_id=24,1';

// Error
$_['error_permission'] = 'Warning: You do not have permission to modify Google Merchant Center feed!';
?>
