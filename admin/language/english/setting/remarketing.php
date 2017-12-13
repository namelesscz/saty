<?php
// Heading
$_['tab_remarketing']                		= 'Remarketing Manager';

// Entry
$_['entry_google_remarketing_snippet']                    = 'Adwords Event snippet';
$_['entry_google_adwords_code']                    = 'Adwords Global site tag';
$_['entry_google_remarketing_analytics']                = 'Use google analytics for remarketing (available in all countries)';
$_['entry_remarketing_pagetype_index']                  = 'Dimension index (dynx_pagetype)';
$_['entry_remarketing_id1_index']                = 'Dimension index (dynx_itemid)';
$_['entry_remarketing_id2_index']                  = 'Dimension index (dynx_itemid2) - optional';
$_['entry_remarketing_totalvalue_index']              = 'Dimension index (dynx_totalvalue)';
$_['entry_google_remarketing_id1']                  = 'Product ID used in the product feed (Merchant & Analytics)';
$_['entry_google_remarketing_id2']       = 'Second product ID used in your product feed (Analytics only) - optional';
$_['entry_google_remarketing_random']                 = 'Use random products on category/search pages';
$_['entry_facebook_remarketing_code']                = 'Facebook pixel code';
$_['entry_facebook_remarketing_id']                = 'Product ID used in your product feed (Facebook)';
$_['entry_facebook_remarketing_advanced']                = 'Use Advanced Matching';

//text
$_['text_google_remarketing_analytics']                = 'Google Dynamic Remarketing via Analytics';
$_['text_google_remarketing_code']                = 'Google Dynamic Remarketing';
$_['text_facebook_remarketing_code']                = 'Facebook Dynamic Remarketing';

//help
$_['help_google_adwords_code']                    = 'Login to your <a href="https://adwords.google.com/" target="_blank"><u>Google Adwords</u></a> account and get your Global site tag and Event snippet from Audience manager->Audience sources->AdWords tag.';
$_['help_google_remarketing_snippet']                    = 'You can use either the AdWords event snippet, or the legacy Remarketing Tag. Login into your Adwords account and get your event snippet from Audience manager->Audience sources->AdWords tag or the legacy remarketing tag from Tag Details->Setup (classic adwords layout).';
$_['help_google_remarketing_analytics']                = 'If Google Merchant center is not available in your country select Enabled.<br>When you are creating your dynamic remarketing campaign, select as your Business Type "Other (custom option)" instead of "Retail"!<br>Google Analytics code must include ga(\'require\', \'displayfeatures\'); and remarketing must be enabled in Google Analytics.';
$_['help_remarketing_pagetype_index']                  = 'This setting is required. All dimension indexes can be found/created in Google Analytics, under Admin->Custom Definitions->Custom Dimensions.';
$_['help_remarketing_id1_index']                = 'This setting is required. All dimension indexes can be found/created in Google Analytics, under Admin->Custom Definitions->Custom Dimensions.';
$_['help_remarketing_id2_index']                  = 'This setting is optional and should be set only, if you are using a second product ID in the product feed.';
$_['help_remarketing_totalvalue_index']              = 'This setting is required. All dimension indexes can be found/created in Google Analytics, under Admin->Custom Definitions->Custom Dimensions.';
$_['help_google_remarketing_id1']                  = 'This setting is required and depends on the product feed, which you have submitted to Google.';
$_['help_google_remarketing_id2']       = 'Select empty if you are not using a second product ID. If you are not sure, leave it empty.';
$_['help_google_remarketing_random']                 = 'Will increase successful product hits, but decrease precision.';
$_['help_google_remarketing_analytics_status']                 = 'Enables dynamic remarketing for all countries via Google Analytics.';
$_['help_facebook_remarketing_code']                = 'Login to your <a href="https://www.facebook.com" target="_blank"><u>Facebook</u></a> account and after creating your custom audience pixel, copy and paste the code into this field. The audience pixel code is also used for conversion tracking.';
$_['help_facebook_remarketing_id']                = 'This setting is required and depends on the product feed, which you have submitted to Facebook.';
$_['help_facebook_remarketing_advanced']                = 'Adds the customer\'s email, first and last name to the Facebook pixel.';

//google
$_['text_google_analytics']            = 'Google Analytics';
$_['entry_google_analytics']           = 'Google Analytics Code';
$_['help_google_analytics']            = 'Login to your <a href="http://www.google.com/analytics/" target="_blank"><u>Google Analytics</u></a> account and after creating your website profile copy and paste the analytics code into this field.';
?>
