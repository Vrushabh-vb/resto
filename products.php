<?php
include('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- Assuming you have a database connection -->
<?php

// Query to fetch product data from the "cards" table
$sql = "SELECT * FROM cards";
$result = $conn->query($sql);

// Check if there are any products in the database
if ($result->num_rows > 0) {
    while ($product = $result->fetch_assoc()) {
?>
    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 mt-3">
        <div class="card trends" id="card">
            <img src="images/<?php echo $product['img']; ?>" class="card-img-top" alt="error" />
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p class="medium"><b><a href="#!" class="text-muted" id="tr"><?php echo $product['title']; ?></a></b></p>
                    <p class="small"><?php echo 'Rs ' . $product['price']; ?></p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <!-- "Buy Now" button dynamically generated with product link -->
                    <a href="product_details.php?id=<?php echo $product['id']; ?>" class="btn btn-dark buy-now">
                        <span>Buy Now</span>
                    </a>
                    <div class="icon">
                        <i class="fas fa-shopping-cart m-1 "><img src="./img/cart.png" alt="" style="width:1rem;"></i>
                        <i class="far fa-heart m-1"><img src="./img/heart.png" alt="" style="width:1rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
} else {
    echo "No products found in the database.";
}

// Close the database connection
$conn->close();
?>


</body>
</html>