<?php
include('Function.php');
include('config.php');
if (isset($_POST['submit'])) {
    echo connection_open();
    if (isset($_POST['product_id'])) {
        $product_id = base64_decode($_POST['product_id']);
        $data = array(
            'product_id' => $product_id
        );
        $query = Select_Record_By_One_Filter($data, 'tbl_product_detail');
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $result = $query->fetch();
//Put sandbox url for testing.
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
//Paypal url for live
        //$paypal_url = 'https://www.paypal.com/cgi-bin/webscr';
//Here we can used seller email id.
        $merchant_email = 'kevakuviza@gmail.com';
//here we can put cancle url when payment is not completed.
        $cancel_return = "http://localhost/Payments.php";
//here we can put cancle url when payment is Successful.
        $success_return = "http://localhost/Success.php";

        $product_name = $result['product_name'];
        $product_price = $result['product_price'];
        $product_currency = $result['product_currency'];
        echo connection_close();
    }
    ?>
    <div style="margin-left: 38%"><img src="ajax-loader.gif"/><img src="processing_animation.gif"/></div>
    <form name="myform" action="<?php echo $paypal_url; ?>" method="post" target="_top">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="cancel_return" value="<?php echo $cancel_return ?>">
        <input type="hidden" name="return" value="<?php echo $success_return; ?>">
        <input type="hidden" name="business" value="<?php echo $merchant_email; ?>">
        <input type="hidden" name="lc" value="C2">
        <input type="hidden" name="item_name" value="<?php echo $product_name; ?>">
        <input type="hidden" name="item_number" value="<?php echo $_POST['product_id']; ?>">
        <input type="hidden" name="amount" value="<?php echo $product_price; ?>">
        <input type="hidden" name="currency_code" value="<?php echo $product_currency; ?>">
        <input type="hidden" name="button_subtype" value="services">
        <input type="hidden" name="no_note" value="0">
    </form>
    <script type="text/javascript">
        document.myform.submit();
    </script>
<?php } ?>

