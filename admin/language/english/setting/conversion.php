<?php
// Heading
$_['tab_conversion']                		= 'Conversion Manager';

// Entry
$_['entry_google_conversion_snippet']                = 'Conversion event snippet';
$_['entry_google_conversion_value']                = 'Dynamic google conversion value';
$_['entry_google_ecommerce_value']                = 'Use google e-commerce conversion tracking';
$_['entry_universal_conversion_code']                = 'Adaptable conversion tracking code';

$_['text_google_conversion_code']                = 'Google conversion';
$_['text_universal_conversion_code']                = 'Adaptable conversion';

$_['help_google_conversion_snippet']                = 'Login to your <a href="https://adwords.google.com/aw/conversions" target="_blank"><u>Google Adwords</u></a> account and after creating your conversion action, copy and paste the event snippet into this field. In the value section select "Use different values for each conversion", so you can use the dynamic value feature. The Adwords Global Site Tag must be set on the Remarketing manager tab!';
$_['help_universal_conversion_code']                = 'Copy and paste into this field all other conversion codes, which you want to use on your checkout success page.<br />Available dynamic codes:<br />#order_id<br />#total<br />#currency<br />Example: conversion_value=\'#total\';';

$_['help_google_conversion_value']                = 'If enabled the conversion code will contain the value of the conversion (purchase price) and its currency (in google adwords the "value" setting must be set to may vary).';
$_['help_google_ecommerce_value']                = 'If enabled, the google e-commerce script will be added, to the google analytics code of the success page.';
?>
