<!DOCTYPE html>
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<head>
<meta charset="UTF-8" />
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<link href="view/javascript/bootstrap/css/bootstrap.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>
<link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="all" />
<link type="text/css" href="view/stylesheet/invoices.css" rel="stylesheet" media="all" />
</head>
<body>
<div class="container">
  <?php foreach ($orders as $order) { ?>
  <div style="page-break-after: always;">
  	<div class="top invlogo"><img src="<?php echo $order['store_logo']; ?>" height="50px"/></div>
  	<h1 class="crcolor"><?php echo $text_creditinvoice; ?></h1>
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td style="width: 50%; vertical-align:top;">
            <address>
            <strong><?php echo $order['store_name']; ?></strong><br />
            <?php echo $order['store_address']; ?>
            </address>
            <?php if ($order['store_btwnr']) { ?><b><?php echo $text_btwnr; ?>:</b> <?php echo $order['store_btwnr']; ?><br /><?php } ?>
            <?php if ($order['store_kvknr']) { ?><b><?php echo $text_kvknr; ?>:</b>  <?php echo $order['store_kvknr']; ?><br /><?php } ?>
            <b><?php echo $text_telephone; ?>:</b> <?php echo $order['store_telephone']; ?><br />
            <?php if ($order['store_fax']) { ?>
            <b><?php echo $text_fax; ?></b> <?php echo $order['store_fax']; ?><br />
            <?php } ?>
            <b><?php echo $text_creditinvoice_email; ?> </b> <?php echo $order['store_email']; ?><br />
            <b><?php echo $text_creditinvoice_webshop; ?></b> <?php echo $order['store_url']; ?>
          </td>
          <td style="width: 50%; vertical-align:top;">
            <b><?php echo $text_creditinvoice_date; ?></b> <?php echo $order['date_modified']; ?><br />
            <?php if ($order['creditinvoice_no']) { ?>
            <b><?php echo $text_creditinvoice_no; ?></b> <?php echo $order['creditinvoice_no']; ?><br />
            <?php } ?>
            <?php if ($order['invoice_no']) { ?>
            <b><?php echo $text_invoice_no; ?></b> <?php echo $order['invoice_no']; ?><br />
            <?php } ?>
            <b><?php echo $text_order_id; ?></b> <?php echo $order['order_id']; ?><br /><br />
            <b><?php echo $text_payment_method; ?></b> <?php echo $order['payment_method']; ?><br />
            <?php if ($order['shipping_method']) { ?>
            <b><?php echo $text_shipping_method; ?></b> <?php echo $order['shipping_method']; ?>
            <?php } ?>
          </td>
        </tr>
      </tbody>
    </table>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td style="width: 50%;"><b><?php echo $text_creditinvoice_to; ?></b></td>
          <td style="width: 50%;"><b><?php echo $text_shipped_to; ?></b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><address>
            <?php echo $order['payment_address']; ?>
            </address></td>
          <td><address>
            <?php echo $order['shipping_address']; ?>
            </address></td>
        </tr>
      </tbody>
    </table>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td><b><?php echo $column_product; ?></b></td>
          <td><b><?php echo $column_model; ?></b></td>
          <td class="text-right"><b><?php echo $column_quantity; ?></b></td>
          <td class="text-right"><b><?php echo $column_price; ?></b></td>
          <td class="text-right"><b><?php echo $column_total; ?></b></td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($order['product'] as $product) { ?>
        <tr>
          <td><?php echo $product['name']; ?>
            <?php foreach ($product['option'] as $option) { ?>
            <br />
            &nbsp;<small> - <?php echo $option['name']; ?>: <?php echo $option['value']; ?></small>
            <?php } ?></td>
          <td><?php echo $product['model']; ?></td>
          <td class="text-right crcolor">-<?php echo $product['quantity']; ?></td>
          <td class="text-right"><?php echo $product['price']; ?></td>
          <td class="text-right crcolor"><?php echo $product['total']; ?></td>
        </tr>
        <?php } ?>
        <?php foreach ($order['voucher'] as $voucher) { ?>
        <tr>
          <td><?php echo $voucher['description']; ?></td>
          <td></td>
          <td class="text-right">1</td>
          <td class="text-right"><?php echo $voucher['amount']; ?></td>
          <td class="text-right crcolor"><?php echo $voucher['amount']; ?></td>
        </tr>
        <?php } ?>
        <?php foreach ($order['total'] as $total) { ?>
        <tr>
          <td class="text-right" colspan="4"><b><?php echo $total['title']; ?></b></td>
          <td class="text-right crcolor"><?php echo $total['text']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php if ($order['comment']) { ?>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td><b><?php echo $text_comment; ?></b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $order['comment']; ?></td>
        </tr>
      </tbody>
    </table>
    <?php } ?>
    <table id="bottom" class="table">
      <tbody>
        <tr>
          <td><?php echo $order['store_name']; ?> | <?php if ($order['store_btwnr']) { ?><?php echo $text_btwnr; ?>: <?php echo $order['store_btwnr']; ?> | <?php } ?><?php if ($order['store_kvknr']) { ?><?php echo $text_kvknr; ?>: <?php echo $order['store_kvknr']; ?> | <?php } ?><?php if ($order['store_iban']) { ?><?php echo $text_iban; ?>: <?php echo $order['store_iban']; ?> | <?php } ?><?php if ($order['store_bic']) { ?><?php echo $text_bic; ?>: <?php echo $order['store_bic']; ?><?php } ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <?php } ?>
</div>
</body>
</html>