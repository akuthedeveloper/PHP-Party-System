<?php
include('Function.php');
include('config.php');
echo connection_open();
?>
<html>
<head>
    <title>Burec Paypal Transaction</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
if (!empty($_REQUEST)) {
    $product_no = $_REQUEST['item_number']; // Product ID
    $product_transaction = $_REQUEST['tx']; // Paypal transaction ID
    $product_price = $_REQUEST['amt']; // Paypal received amount value
    $product_currency = $_REQUEST['cc']; // Paypal received currency type
    $product_status = $_REQUEST['st']; // Paypal product status

    $product_no = base64_decode($product_no);
    $data = array(
        'product_id' => $product_no
    );
    $query = Select_Record_By_One_Filter($data, 'tbl_product_detail');
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $result = $query->fetch();
    echo connection_close();
}
?>
<div id="main">
    <h1>Burec Paypal Transaction</h1>

    <div id="return">
        <h2>Payment Status </h2>
        <hr/>

        <?php
        //Rechecking the product price and currency details
        if ($product_price == $result['product_price'] && $product_currency == $result['product_currency']) {
            echo "<h3 id='success'>Payment Successful</h3>";
            echo "<P>Transaction Status - " . $product_status . "</P>";
            echo "<P>Transaction Id - " . $product_transaction . "</P>";
            echo "<div class='back_btn'><a href='payments.php' id= 'btn'><< Back to Products</a></div>";
        } else {
            echo "<h3 id='fail'>Payment Failed</h3>";
            echo "<P>Transaction Status - Unompleted</P>";
            echo "<P>Transaction Id - " . $product_transaction . "</P>";
            echo "<div class='back_btn'><a href='payments.php' id= 'btn'><< Back to Products</a></div>";
        }
        ?>
    </div>

    <div id="formget">
        <a href='#'><img src="formget.jpg" alt="Online Form Builder"/></a>
    </div>
</div>
</body>
</html>

