<div class="col-md-3">
    <div class="card text-center">
        <a href="<?php echo BASE_URL; ?>views/product/product.php?id=<?php echo $product["id"]; ?>" >
        <img src="<?php echo BASE_URL. $product["image_url"]; ?>" class="card-img-top mx-auto" alt="Product 1"
        style= "height:300px;width:300px">
        </a>
        <div class="card-body text-center">
            <h5 class="card-title"><?php echo $product ["product_name"]; ?></h5>
            <p class="card-text">Php<?php echo number_format ($product ["unit_price"],2); ?></p>
            <form action = "<?php echo BASE_URL;?>app/cart/add_to_cart.php" method="POST">
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $product["id"]; ?>">
            <input type="hidden" class="form-control" id="qty" name="quantity" value="1">
            <a href="<?php echo BASE_URL; ?>views/product/product.php?id=<?php echo $product["id"]; ?>" >
                    Add to cart
        </a>
        </div>

    </div>
</div>