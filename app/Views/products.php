<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOPEE</title>
    <style>
    /* Body Styles */
       body {
           background-color: #000;
           color: #fff;
           font-family: Arial, sans-serif;
           margin: 0;
           padding: 0;
       }

       /* Header Styles */
       header {
           background-color: #FFD700; /* Gold */
           padding: 20px;
           text-align: center;
       }


       header h1 {
           color: #000; /* Black */
       }

       /* Form Styles */
       .container {
           max-width: 600px;
           margin: 0 auto;
           padding: 20px;
       }

       form label {
           color: #FFD700; /* Gold */
       }

       input[type="text"],
       input[type="number"],
       select {
           width: 100%;
           padding: 10px;
           margin-bottom: 15px;
           border: 1px solid #FFD700; /* Gold */
           background-color: #000;
           color: #fff;
       }

       input[type="submit"] {
           background-color: #FFD700; /* Gold */
           color: #000; /* Black */
           border: none;
           padding: 10px 20px;
           cursor: pointer;
       }

       /* Product Listing Styles */
       h2 {
           margin-top: 20px;
           color: #FFD700; /* Gold */
       }

       ul {
           list-style: none;
           padding: 0;
       }

       li {
           margin-bottom: 10px;
       }

       /* Button Styles */
       .btn {
           display: inline-block;
           padding: 10px 20px;
           text-decoration: none;
           color: #fff;
           border: none;
           cursor: pointer;
       }

       .btn.red {
           background-color: #FF0000; /* Red */
       }

       .btn.green {
           background-color: #008000; /* Green */
       }
       /* Button Styles */
.btn {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    color: #fff;
    border: none;
    cursor: pointer;
}

.btn.red {
    background-color: #FF0000; /* Red */
}

.btn.green {
    background-color: #008000; /* Green */
}

.btn.blue {
    background-color: #0000FF; /* Blue */
}

 </style>
</head>

<body>
    <header>
        <h1>SHOPEE</h1>
        <a href="/logout">Logout</a>
    </header>
    <div class="container">
        <form action="/save" method="post">
            <label for="productName">Product Name:</label><br>
            <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
            <input type="text" name="productName" placeholder="Enter Product Name"
                value="<?= isset($pro['productName']) ? $pro['productName'] : '' ?>"><br>

            <label for="productDescription">Product Description:</label><br>
            <input type="text" name="productDescription" placeholder="Enter Product Description"
                value="<?= isset($pro['productDescription']) ? $pro['productDescription'] : '' ?>"><br>

            <label for="productCategory">Product Category:</label><br>
            <select name="productCategory">
                <option value="">Select a category</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category ?>">
                        <?= $category ?>
                    </option>
                <?php endforeach; ?>
            </select><br>

            <label for="productQuantity">Product Quantity:</label><br>
            <input type="number" name="productQuantity" placeholder="Enter Product Quantity"
                value="<?= isset($pro['productQuantity']) ? $pro['productQuantity'] : '' ?>"><br>

            <label for="productPrice">Product Price:</label><br>
            <input type="text" name="productPrice" placeholder="Enter Product Price"
                value="<?= isset($pro['productPrice']) ? $pro['productPrice'] : '' ?>"><br>

            <input type="submit" value="Save">
        </form>
        <h2>Product List</h2>
        <?php foreach ($product as $pr): ?>
            <ul>
                <li><strong>Product Name:</strong>
                    <?= $pr['productName'] ?>
                </li>
                <li><strong>Product Description:</strong>
                    <?= $pr['productDescription'] ?>
                </li>
                <li><strong>Product Category:</strong>
                    <?= $pr['productCategory'] ?>
                </li>
                <li><strong>Product Quantity:</strong>
                    <?= $pr['productQuantity'] ?>
                </li>
                <li><strong>Product Price:</strong>
                    <?= $pr['productPrice'] ?>
                </li>
                <a href="/delete/<?= $pr['id'] ?>" class="btn red">Delete</a>
                <a href="/edit/<?= $pr['id'] ?>" class="btn green">Edit</a>
                <a href="/product/view/<?= $pr['id'] ?>" class="btn blue">View</a>


            </ul>
        <?php endforeach ?>
    </div>
</body>

</html>
