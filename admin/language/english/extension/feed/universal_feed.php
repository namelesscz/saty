<?php
// Heading
$_['heading_title']        = 'Universal Feed';

// Tab
$_['tab_fields']           = 'Feed Fields';
$_['tab_stock_statuses']   = 'Stock Statuses';
$_['tab_shipping_methods'] = 'Shipping Methods';

// Button
$_['button_add_field']     = 'Add Field';
$_['button_clear_cache']   = 'Clear Cache';
$_['button_add_shipping_method'] = 'Add Shipping Method';

// Text
$_['text_not_cached']           = 'not cached';
$_['text_view']                 = 'View';
$_['text_feeds']                = 'Product Feeds';
$_['text_standalone_product']   = 'standalone product (product_id in variant tag)';
$_['text_inner_product']        = 'inner product (in variant tag)';
$_['text_hours']                = 'hours';
$_['text_hours']                = 'hours';
$_['text_store_default']        = '- store default -';
$_['text_stock_status_setting'] = 'Stock statuses settings:';
$_['text_stock_status_alias']   = 'Stock statuses delivery aliases:';
$_['text_success']              = 'Success: You have modified Universal Feed!';
$_['text_no_selected']          = 'No feed selected!';
$_['text_price']                = 'Price';
$_['text_weight']               = 'Weight';
$_['text_feed_specs']           = 'Feed Specification';

// Column
$_['column_name']          = 'Name';
$_['column_keyword']       = 'SEO Keyword';
$_['column_date_added']    = 'Date Added';
$_['column_date_modified'] = 'Last Modified';
$_['column_status']        = 'Status';
$_['column_action']        = 'Action';
$_['column_tag']           = 'XML&nbsp;Tag';
$_['column_type']          = 'Type';
$_['column_setting']       = 'Setting';
$_['column_in_product']    = 'In&nbsp;Product';
$_['column_in_variant']    = 'In&nbsp;Variant';
$_['column_cdata']         = 'Use&nbsp;CDATA';
$_['column_description']   = 'Description';
$_['column_order_status']  = 'Order Status';
$_['column_tag_value']     = 'Delivery Alias';
$_['column_code']          = 'Code';
$_['column_count']         = 'Count';
$_['column_start']         = 'Start ( >= )';
$_['column_end']           = 'End ( < )';
$_['column_price']         = 'Price Inc. Tax';
$_['column_price_cod']     = 'COD Price Inc. Tax';

// Entry
$_['entry_reloaded']             = 'Date Cached';
$_['entry_preset_feed']          = '<span data-toggle="tooltip" title="Warning: Settings and tags will be changed to meet feed criteria!">Use Preset Feed</span>';
$_['entry_name']                 = 'Feed name';
$_['entry_keyword']              = 'SEO keyword';
$_['entry_tag_top']              = 'Top Level Tag';
$_['entry_tag_item']             = 'Product Top Tag';
$_['entry_tag_variant']          = '<span data-toggle="tooltip" title="Leave empty to disable variants creation.">Product Variant Tag</span>';
$_['entry_variant_type']         = 'Variant Type';
$_['entry_free_text_before']     = 'Free Text Before';
$_['entry_free_text_after']      = 'Free Text After';
$_['entry_cache']                = '<span data-toggle="tooltip" title="In hours. Set 0, negative or leave empty to disable cache.">Cache expiration</span>';
$_['entry_language']             = 'Feed language';
$_['entry_currency']             = 'Feed currency';
$_['entry_only_in_stock']        = '<span data-toggle="tooltip" title="quantity >= minimum">Export only products in stock</span>';
$_['entry_only_priced']          = '<span data-toggle="tooltip" title="price > 0">Export only products with price</span>';
$_['entry_filter_manufacturer']  = '<span data-toggle="tooltip" title="Select no manufacturer to disable filter.">Filter products by manufacturer</span>';
$_['entry_status']               = 'Status';
$_['entry_stock_in_stock']       = '<span data-toggle="tooltip" title="quantity >= minimum">Delivery alias for product in stock</span>';
$_['entry_stock_date_available'] = '<span data-toggle="tooltip" title="if date available is in future">Set delivery alias to date available</span>';

// Error
$_['error_warning']             = 'Warning: Please check the form carefully for errors!';
$_['error_permission']          = 'Warning: You do not have permission to modify Universal Feed!';
$_['error_name']                = 'Feed Name must be between 3 and 50 characters!';
$_['error_keyword']             = 'This SEO Keyword is already used!';
$_['error_tag_top']             = 'Top Level Tag must be between 1 and 50 characters!';
$_['error_tag_item']            = 'Product Top Tag must be between 1 and 50 characters!';

// Fields
$_['field_ID_name']                  = 'Product identificator';
$_['field_ID_desc']                  = 'Product identificator made of product_id and optionally option_id and option_value_id (for variant only).<br />Example: ITEM_ID, ITEMGROUP_ID<br />Setting: divider option_id (0 - do not show, 1 - show) option_value_id (0 - do not show, 1 - show)<br />Default: - 0 0';
$_['field_PRODUCTNAME_name']         = 'Name';
$_['field_PRODUCTNAME_desc']         = 'Product name.<br />Example: PRODUCT, PRODUCTNAME<br />Setting: [product] - product name, [name] - option name (in variant only), [value] - option value (in variant only)<br />Default: [name]';
$_['field_DESCRIPTION_name']         = 'Description (with HTML)';
$_['field_DESCRIPTION_desc']         = 'Product description with HTML.<br />Example: DESCRIPTION';
$_['field_DESCRIPTION_NO_HTML_name'] = 'Description (no HTML)';
$_['field_DESCRIPTION_NO_HTML_desc'] = 'Product description without HTML.<br />Example: DESCRIPTION<br />Setting: type length<br />type - W (words) or L (letters), length - number<br />Default: full length';
$_['field_MODEL_name']               = 'Model';
$_['field_MODEL_desc']               = 'Product model.<br />Example: MODEL';
$_['field_MANUFACTURER_name']        = 'Manufacturer';
$_['field_MANUFACTURER_desc']        = 'Product manufacturer.<br />Example: MANUFACTURER';
$_['field_SKU_name']                 = 'Sku';
$_['field_SKU_desc']                 = 'Product sku.<br />Example: SKU';
$_['field_PRICE_name']               = 'Price';
$_['field_PRICE_desc']               = 'Product price ex tax.<br />Example: PRICE, PRICE_VAT<br />Setting: tax use_special<br />tax - 0 - ex tax, 1 - inc tax<br />use_special - 0 - no, 1 - use special for default customer group if possible<br />Default 0 0';
$_['field_VAT_name']                 = 'Tax';
$_['field_VAT_desc']                 = 'Product tax.<br />Example: VAT<br />Setting: 0 - in % (17), 1 - in real number (0.17)<br />Default: 0';
$_['field_URL_name']                 = 'URL';
$_['field_URL_desc']                 = 'Product URL.<br />Example: URL<br />Setting: 1 - automatic, 0 - do not use SEO URL<br />Default: 1';
$_['field_IMGURL_name']              = 'Image';
$_['field_IMGURL_desc']              = 'URL to product image. Only if image exists.<br />Example: IMGURL<br />Setting: width height<br />Default: original size';
$_['field_CATEGORYTEXT_name']        = 'Categories';
$_['field_CATEGORYTEXT_desc']        = 'List of product categories.<br />Example: CATEGORYTEXT<br />Setting: divider<br />Default: &apos;&gt;&apos;';
$_['field_ATTRIB_name']              = 'Attributes';
$_['field_ATTRIB_desc']              = 'Product attributes.<br />Example: PARAM<br />Setting: tag_name tag_value<br />Default: PARAM_NAME VAL';
$_['field_DELIVERY_DATE_name']       = 'Delivery date';
$_['field_DELIVERY_DATE_desc']       = 'Delivery date of product.<br />Example: DELIVERY_DATE<br />Setting: see tab Stock Statuses';
$_['field_SHIPPING_METHODS_name']    = 'Shipping Methods';
$_['field_SHIPPING_METHODS_desc']    = 'List of available shipping methods.<br />Settings (tags): root,code,price,cod<br />Example: DELIVERY,DELIVERY_ID,DELIVERY_PRICE,DELIVERY_PRICE_COD';
$_['field_CUSTOM_CODE_name']         = 'Custom code';
$_['field_CUSTOM_CODE_desc']         = 'Any custom code. Caution: Requires programming skills!<br />Example: MAX_CPC<br />Settings: code (see readme.txt for options and examples)<br />Sample: return {price} > 1000 ? 20 : 10;';

// Preset Feeds
$_['text_preset_google_merchant']    = 'Google Merchant Feed';
$_['text_preset_heureka']            = 'Heureka CZ/SK';