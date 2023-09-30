<!-- product_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (your HTML head content) ... -->
</head>
<body>
    <header>
        <h1>SHOPEE</h1>
    </header>
    <div class="container">
        <h2>Product Details</h2>
        <ul>
            <li><strong>Product Name:</strong> <?= $product['productName'] ?></li>
            <li><strong>Product Description:</strong> <?= $product['productDescription'] ?></li>
            <li><strong>Product Category:</strong> <?= $product['productCategory'] ?></li>
            <li><strong>Product Quantity:</strong> <?= $product['productQuantity'] ?></li>
            <li><strong>Product Price:</strong> <?= $product['productPrice'] ?></li>
        </ul>
        <a href="/product">Back to Product List</a>
    </div>
</body>
</html>
