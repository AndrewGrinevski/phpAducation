<div class="mainpanel">
    <?php
    $ids = $_GET['id'];
    $brand = $_POST['brand'];
    $size = $_POST['size'];
    $cost = $_POST['cost'];
    $name = $_POST['name'];
    $in_stock = $_POST['in_stock'];
    $category = $_POST['category'];
    if (isset($_FILES) && $_FILES['product_img']['size'] > 0) {
        $imgUrl = '/images/' . $_FILES['product_img']['name'];
        $stmt = mysqli_prepare($connection, "UPDATE shop_activewear SET  brand_id = ? , product_size = ? , cost = ?, product_name = ?, img = ?, in_stock = ?, category_id = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "dsdssddd", $brand, $size, $cost, $name, $imgUrl, $in_stock, $category, $ids);
        mysqli_stmt_execute($stmt);
    } else {
        $stmt = mysqli_prepare($connection, "UPDATE shop_activewear SET  brand_id = ? , product_size = ? , cost = ?, product_name = ?, in_stock = ?, category_id = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "dsdsddd", $brand, $size, $cost, $name, $in_stock, $category, $ids);
        mysqli_stmt_execute($stmt);
    }

    ?>


    <h4 class="panel-title">Page successfully updated</h4>
    <a href="/admin/?action=product_list_page">Назад</a>

</div>
