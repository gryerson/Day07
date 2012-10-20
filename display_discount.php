<?php 
	// Declare and instantiate variables
	$product_description = null;
	$list_price = null;
	$discount_percent = null;
	
	// Get the user data from the form
	$product_description = $_POST['product_description'];
	$list_price = $_POST['list_price'];
	$discount_percent = $_POST['discount_percent'];	

	// Calculate the discount
	$discount = $list_price * $discount_percent * .01;
	$discount_price = $list_price - $discount;

	// Apply currency formatting to the dollar amount for output
	$list_price_formatted = "$".number_format($list_price, 2);
	$discount_percent_formatted = $discount_percent."%";
	$discount_formatted = "$".number_format($discount, 2);
	$discount_price_formatted = "$".number_format($discount_price, 2);

	// Output the results
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
</head>
<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <output><?php echo $product_description; ?></output><br />

        <label>List Price:</label>
        <output><?php echo $list_price_formatted; ?></output><br />

        <label>Standard Discount:</label>
        <output><?php echo $discount_percent_formatted; ?></output><br />

        <label>Discount Amount:</label>
        <output><?php echo $discount_formatted; ?></output><br />

        <label>Discount Price:</label>
        <output><?php echo $discount_price_formatted; ?></output><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>