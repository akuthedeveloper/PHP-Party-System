<?php
include('Function.php');
include('config.php');
echo connection_open();
?>
<html>
<head>
    <title>paypal_simple_integration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id = "main">
    <h1> Burec Party.Pay for the Membership. </h1>
    <?php
    //Select_All_Records function is used for fetching all the records from the table
    $query = Select_All_Records('tbl_product_detail');
    $query->setFetchMode(PDO::FETCH_ASSOC);
    while ($result = $query->fetch()) {
        ?>
        <div id = "login">
            <h2><?php echo $result['product_name']; ?></h2>
            <hr/>
            <form action = "process.php" method = "post">
                <input type = "hidden" value = "<?php echo $result['item_number']; ?>" name = "product_id">
<!--         <img id = "product_img" src = "--><?php ////echo $result['product_img']; ?><!--<!--<!--"/><br><br>-->
                <div id = "product_content">
                    <ul><?php $description = explode('#@#', $result['product_dec']);
                        foreach ($description as $value) { ?>
                            <li>
                                <?php echo $value; ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <input type = "submit" value = " Pay $ <?php echo $result['product_price']; ?> " name = "submit"/><br />
                <span></span>
            </form>
        </div>
    <?php } ?>
</div>
</body>
</html>

<?php
//connection_close() is used for closing the connection .
connection_close();
?>

