<?php
// Heading
$_['heading_title']    = 'Google Business Data (remarketing via analytics)';

// Text
$_['text_feed']        = 'Feeds';
$_['text_success']     = 'Success: You have modified Google Business Data feed!';
$_['text_edit']        = 'Edit Google Business Data';
$_['text_default']        = 'Default';

// Entry
$_['entry_status']     = 'Status';
$_['entry_file']     = 'Save to file';
$_['entry_data_feed']  = 'Data Feed Url';
$_['entry_google_business_data_description']  = 'Use meta description:';
$_['entry_google_business_data_sold_out']  = 'Include sold out products:';
$_['entry_google_business_data_description_html']  = 'Remove html tags from the description:';
$_['entry_google_business_data_feed_id1']                = 'Main product ID';
$_['entry_google_business_data_feed_id2']                = 'Second product ID';
$_['entry_google_business_data_use_taxes']                = 'Include taxes in the price:';

// Error
$_['error_permission'] = 'Warning: You do not have permission to modify Google Business Data feed!';

//Help
$_['help_file']     = 'The feed will be saved in ../system/storage/download/feeds/';
$_['help_google_business_data_feed_id1']                = 'Main product ID used on the remarketing tag (dynx_itemid).';
$_['help_google_business_data_feed_id2']                = 'Optional second product ID used on the remarketing tag (dynx_itemid2). Select empty if you are not using a second product ID.';
$_['help_google_business_data_use_taxes']                = 'Default - prices will use taxes according to your opencart tax settings. Enabled - prices will include taxes. Disabled - prices will be without taxes.';
$_['help_data_feed']  = 'You can change the link parameters to get a feeds in different languages, currencies etc.:<br />Languages: &lang={language code}<br />Currencies: &curr={currency code}<br />Multistore: &store={store id number}<br />Skip products: &exclude_product_id={product ids separated by comma} Example: &exclude_product_id=42,30,47<br />Only some categories: &category_id={category ids separated by comma} Example: &category_id=24,1';
?>
