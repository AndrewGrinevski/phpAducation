<div class="mainpanel">

    <?php
    if (!empty($_POST)) {
        echo '<h4>Article uploaded successfully</h4>';
        if ($_FILES['product_img']['size'] > 0) {
            $imgUrl = '/images/shop images/' . $_FILES['product_img']['name'];
            move_uploaded_file($_FILES['product_img']['tmp_name'],
                BASE_PATH . '/../images/shop images/' . $_FILES['product_img']['name']);
        }
    }
    $brand = $_POST['brand'];
    $size = $_POST['size'];
    $cost = $_POST['cost'];
    $name = $_POST['name'];
    $in_stock = $_POST['in_stock'];
    $category = $_POST['category'];
    $stmt = mysqli_prepare($connection, "INSERT INTO shop_activewear (`brand_id`, `product_size`, `cost`, `product_name`, `img`, `in_stock`, `category_id`)
VALUES (?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssdssss", $brand,  $size, $cost, $name, $imgUrl, $in_stock, $category);
    mysqli_stmt_execute($stmt);
    ?>
</div>
<?php
