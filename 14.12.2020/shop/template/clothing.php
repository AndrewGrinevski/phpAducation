<?php
if (isset($_GET['page_type']) && !empty($_GET['page_type']) && isset($_GET['id'])) {
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
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 5';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_GET['id'] == 6) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 6';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_GET['id'] == 7) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 7';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_GET['id'] == 8) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 8';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }elseif ($_GET['id'] == 11) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 11';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }elseif ($_GET['id'] == 16) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 16';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_GET['id'] == 17) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 17';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_GET['id'] == 18) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 18';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_GET['id'] == 19) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 19';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }elseif ($_GET['id'] == 20) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 20';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }elseif ($_GET['id'] == 21) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 21';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_GET['id'] == 22) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 22';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_GET['id'] == 23) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 23';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_GET['id'] == 24) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 24';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }elseif ($_GET['id'] == 25) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 25';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }elseif ($_GET['id'] == 26) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 26';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_GET['id'] == 27) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 27';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_GET['id'] == 28) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 28';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_GET['id'] == 29) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 29';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }elseif ($_GET['id'] == 30) {
        $sql = 'SELECT * FROM shop_activewear WHERE sub_category_id = 30';
        $result = mysqli_query($connection, $sql);
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    $sql = 'SELECT * FROM shop_category';
    $res= mysqli_query($connection, $sql);
    $categories = mysqli_fetch_all($res, MYSQLI_ASSOC);
    $sortedCategories = [];
    foreach ($categories as $category) {
        $sortedCategories[$category['id']] = $category;
    }
    $sql = 'SELECT * FROM brand';
    $res= mysqli_query($connection, $sql);
    $brands = mysqli_fetch_all($res, MYSQLI_ASSOC);
    $sortedBrands = [];
    foreach ($brands as $brand) {
        $sortedBrands[$brand['id']] = $brand;
    }
}
?>



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
                    <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="<?= $article['img'] ?>" alt=""><a class="ps-shoe__overlay" href="/?page_type=product_detail&id=<?=$article['id'] ?>"></a>
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
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?= $article['product_name'] ?> </a>
                            <p class="ps-shoe__categories"><a href="#"><?=$sortedCategories[$article['category_id']]['name'] ?></a>,<a href="#"> <?=$sortedBrands[$article['brand_id']]['brand_name'] ?></a>,<a href="#"><?=$sortedCategories[$article['sub_category_id']]['name'] ?></a></p>

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
    <div class="ps-sidebar" data-mh="product-listing">
        <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
                <h3>Category</h3>
            </div>
            <div class="ps-widget__content">
                <ul class="ps-list--checked">
                    <li class="current"><a href="product-listing.html">Life(521)</a></li>
                    <li><a href="product-listing.html">Running(76)</a></li>
                    <li><a href="product-listing.html">Baseball(21)</a></li>
                    <li><a href="product-listing.html">Football(105)</a></li>
                    <li><a href="product-listing.html">Soccer(108)</a></li>
                    <li><a href="product-listing.html">Trainning & game(47)</a></li>
                    <li><a href="product-listing.html">More</a></li>
                </ul>
            </div>
        </aside>
        <aside class="ps-widget--sidebar ps-widget--filter">
            <div class="ps-widget__header">
                <h3>Category</h3>
            </div>
            <div class="ps-widget__content">
                <div class="ac-slider" data-default-min="300" data-default-max="2000" data-max="3450" data-step="50" data-unit="$"></div>
                <p class="ac-slider__meta">Price:<span class="ac-slider__value ac-slider__min"></span>-<span class="ac-slider__value ac-slider__max"></span></p><a class="ac-slider__filter ps-btn" href="#">Filter</a>
            </div>
        </aside>
        <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
                <h3>Shoe Brand</h3>
            </div>
            <div class="ps-widget__content">
                <ul class="ps-list--checked">
                    <li class="current"><a href="product-listing.html">Nike(521)</a></li>
                    <li><a href="product-listing.html">Adidas(76)</a></li>
                    <li><a href="product-listing.html">Baseball(69)</a></li>
                    <li><a href="product-listing.html">Gucci(36)</a></li>
                    <li><a href="product-listing.html">Dior(108)</a></li>
                    <li><a href="product-listing.html">B&G(108)</a></li>
                    <li><a href="product-listing.html">Louis Vuiton(47)</a></li>
                </ul>
            </div>
        </aside>
        <aside class="ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
                <h3>Width</h3>
            </div>
            <div class="ps-widget__content">
                <ul class="ps-list--checked">
                    <li class="current"><a href="product-listing.html">Narrow</a></li>
                    <li><a href="product-listing.html">Regular</a></li>
                    <li><a href="product-listing.html">Wide</a></li>
                    <li><a href="product-listing.html">Extra Wide</a></li>
                </ul>
            </div>
        </aside>
        <div class="ps-sticky desktop">
            <aside class="ps-widget--sidebar">
                <div class="ps-widget__header">
                    <h3>Size</h3>
                </div>
                <div class="ps-widget__content">
                    <table class="table ps-table--size">
                        <tbody>
                        <tr>
                            <td class="active">3</td>
                            <td>5.5</td>
                            <td>8</td>
                            <td>10.5</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>3.5</td>
                            <td>6</td>
                            <td>8.5</td>
                            <td>11</td>
                            <td>13.5</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>6.5</td>
                            <td>9</td>
                            <td>11.5</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>4.5</td>
                            <td>7</td>
                            <td>9.5</td>
                            <td>12</td>
                            <td>14.5</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>7.5</td>
                            <td>10</td>
                            <td>12.5</td>
                            <td>15</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </aside>
            <aside class="ps-widget--sidebar">
                <div class="ps-widget__header">
                    <h3>Color</h3>
                </div>
                <div class="ps-widget__content">
                    <ul class="ps-list--color">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </aside>
        </div>
        <!--aside.ps-widget--sidebar-->
        <!--    .ps-widget__header: h3 Ads Banner-->
        <!--    .ps-widget__content-->
        <!--        a(href='product-listing'): img(src="images/offer/sidebar.jpg" alt="")-->
        <!---->
        <!--aside.ps-widget--sidebar-->
        <!--    .ps-widget__header: h3 Best Seller-->
        <!--    .ps-widget__content-->
        <!--        - for (var i = 0; i < 3; i ++)-->
        <!--            .ps-shoe--sidebar-->
        <!--                .ps-shoe__thumbnail-->
        <!--                    a(href='#')-->
        <!--                    img(src="images/shoe/sidebar/"+(i+1)+".jpg" alt="")-->
        <!--                .ps-shoe__content-->
        <!--                    if i == 1-->
        <!--                        a(href='#').ps-shoe__title Nike Flight Bonafide-->
        <!--                    else if i == 2-->
        <!--                        a(href='#').ps-shoe__title Nike Sock Dart QS-->
        <!--                    else-->
        <!--                        a(href='#').ps-shoe__title Men's Shoe-->
        <!--                    p <del> £253.00</del> £152.00-->
        <!--                    a(href='#').ps-btn PURCHASE-->
    </div>
</div>