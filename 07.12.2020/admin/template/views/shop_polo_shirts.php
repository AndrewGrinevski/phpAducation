<?php
if ($_GET['id'] == 1) {
    $sql = 'SELECT * FROM shop_activewear WHERE category_id = 1';
    $result = mysqli_query($connection, $sql);
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
} elseif ($_GET['id'] == 2) {
    $sql = 'SELECT * FROM shop_activewear WHERE category_id = 2';
    $result = mysqli_query($connection, $sql);
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
} elseif ($_GET['id'] == 3) {
    $sql = 'SELECT * FROM shop_activewear WHERE category_id = 3';
    $result = mysqli_query($connection, $sql);
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
} elseif ($_GET['id'] == 4) {
    $sql = 'SELECT * FROM shop_activewear WHERE category_id = 4';
    $result = mysqli_query($connection, $sql);
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
} elseif ($_GET['id'] == 5) {
    $sql = 'SELECT * FROM shop_activewear WHERE category_id = 5';
    $result = mysqli_query($connection, $sql);
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
} elseif ($_GET['id'] == 6) {
    $sql = 'SELECT * FROM shop_activewear WHERE category_id = 6';
    $result = mysqli_query($connection, $sql);
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
} elseif ($_GET['id'] == 7) {
    $sql = 'SELECT * FROM shop_activewear WHERE category_id = 7';
    $result = mysqli_query($connection, $sql);
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
} elseif ($_GET['id'] == 8) {
    $sql = 'SELECT * FROM shop_activewear WHERE category_id = 8';
    $result = mysqli_query($connection, $sql);
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
}


$req_category = 'SELECT * FROM shop_category WHERE id = ' . $_GET['id'];
$resp_category = mysqli_query($connection, $req_category);
$categories = mysqli_fetch_all($resp_category, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7"><![endif]-->
<!--[if IE 8]>
<html class="ie ie8"><![endif]-->
<!--[if IE 9]>
<html class="ie ie9"><![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Shoe - Product Listing</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900"
          rel="stylesheet">
    <link rel="stylesheet" href="/shop_assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/shop_assets/plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="/shop_assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/shop_assets/plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="/shop_assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="/shop_assets/plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="/shop_assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/shop_assets/plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="/shop_assets/plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/shop_assets/plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="/shop_assets/plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="/shop_assets/plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="/shop_assets/css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]>
<body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]>
<body class="ie9 lt-ie10"><![endif]-->


<body class="ps-loading">
<div class="header--sidebar"></div>


<main class="ps-main">
    <div class="ps-products-wrap pt-80 pb-80">
        <div class="ps-products" data-mh="product-listing">
            <div class="ps-product-action">
                <div class="ps-product__filter">
                    <select class="ps-select selectpicker">
                        <option value="1">Shortby</option>
                        <option value="2">Name</option>
                        <option value="3">Price (Low to High)</option>
                        <option value="3">Price (High to Low)</option>
                    </select>
                </div>
                <div class="ps-pagination">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="ps-product__columns">

                <?php foreach ($articles as $article): ?>
                    <div class="ps-product__column">
                        <div class="ps-shoe mb-30">
                            <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i
                                            class="ps-icon-heart"></i></a><img src="<?= $article['img'] ?>" alt=""><a
                                        class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <select class="ps-rating ps-shoe__rating">

                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>

                                    </select>
                                    <span class="ps-shoe__price">$<?= $article['cost'] ?></span>
                                </div>
                                <div class="ps-shoe__detail">
                                    <a class="ps-shoe__name" href="#"><?= $article['product_name'] ?></a>
                                    <?php foreach ($categories

                                    as $category):
                                    $req_brand = 'SELECT * FROM brand WHERE id = ' . $article['brand_id'];
                                    $resp_brand = mysqli_query($connection, $req_brand);
                                    $brands = mysqli_fetch_all($resp_brand, MYSQLI_ASSOC);
                                    ?>
                                    <p class="ps-shoe__categories"><a href="#"><?= $category['name'] ?></a>
                                        <?php endforeach; ?>,
                                        <?php foreach ($brands as $brand): ?>

                                            <a href="#"><?= $brand['brand_name'] ?></a>
                                        <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="ps-product-action">
                <div class="ps-product__filter">
                    <select class="ps-select selectpicker">
                        <option value="1">Shortby</option>
                        <option value="2">Name</option>
                        <option value="3">Price (Low to High)</option>
                        <option value="3">Price (High to Low)</option>
                    </select>
                </div>
                <div class="ps-pagination">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</main>


<!-- JS Library-->
<script type="text/javascript" src="/shop_assets/plugins/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/gmap3.min.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/imagesloaded.pkgd.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/elevatezoom/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>
<script type="text/javascript" src="/shop_assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/shop_assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript"
        src="/shop_assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript"
        src="/shop_assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
        src="/shop_assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript"
        src="/shop_assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript"
        src="/shop_assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript"
        src="/shop_assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<!-- Custom scripts-->
<script type="text/javascript" src="/shop_assets/js/main.js"></script>
</body>
</html>