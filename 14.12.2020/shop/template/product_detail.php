<?php
if (isset($_GET['page_type']) && !empty($_GET['page_type']) && isset($_GET['id'])) {
    $sql = 'SELECT * FROM shop_activewear WHERE id =' . $_GET['id'];
    $result = mysqli_query($connection, $sql);
    $articles = mysqli_fetch_assoc($result);

    $sql = 'SELECT * FROM shop_category WHERE id =' . $articles['sub_category_id'];
    $res = mysqli_query($connection, $sql);
    $sub_categories = mysqli_fetch_assoc($res);

    $sql = 'SELECT * FROM shop_category WHERE id =' . $articles['category_id'];
    $res = mysqli_query($connection, $sql);
    $one_category = mysqli_fetch_assoc($res);

    $sql = 'SELECT * FROM brand WHERE id =' . $articles['brand_id'];
    $res = mysqli_query($connection, $sql);
    $one_brand = mysqli_fetch_assoc($res);

    $sql = 'SELECT * FROM shop_activewear WHERE category_id =' . $articles['category_id'];
    $result = mysqli_query($connection, $sql);
    $all_articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

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


<div class="test">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
            </div>
        </div>
    </div>
</div>
<div class="ps-product--detail pt-60">
    <div class="ps-container">
        <div class="row">
            <div class="col-lg-10 col-md-12 col-lg-offset-1">
                <div class="ps-product__thumbnail">
                    <div class="ps-product__preview">
                        <div class="ps-product__variants">
                            <div class="item"><img src="<?= $articles['img'] ?>" alt=""></div>
                            <div class="item"><img src="<?= $articles['img'] ?>" alt=""></div>
                            <div class="item"><img src="<?= $articles['img'] ?>" alt=""></div>
                            <div class="item"><img src="<?= $articles['img'] ?>" alt=""></div>
                            <div class="item"><img src="<?= $articles['img'] ?>" alt=""></div>
                        </div>
                        <a class="popup-youtube ps-product__video"
                           href="http://www.youtube.com/watch?v=0O2aH4XLbto"><img src="<?= $articles['img'] ?>"
                                                                                  alt=""><i
                                    class="fa fa-play"></i></a>
                    </div>
                    <div class="ps-product__image">
                        <div class="item"><img class="zoom" src="<?= $articles['img'] ?>" alt=""
                                               data-zoom-image="<?= $articles['img'] ?>"></div>
                        <div class="item"><img class="zoom" src="<?= $articles['img'] ?>" alt=""
                                               data-zoom-image="<?= $articles['img'] ?>"></div>
                        <div class="item"><img class="zoom" src="<?= $articles['img'] ?>" alt=""
                                               data-zoom-image="<?= $articles['img'] ?>"></div>
                    </div>
                </div>
                <div class="ps-product__thumbnail--mobile">
                    <div class="ps-product__main-img"><img src="<?= $articles['img'] ?>" alt=""></div>
                    <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true"
                         data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false"
                         data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3"
                         data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on"><img
                                src="<?= $articles['img'] ?>" alt=""><img src="<?= $articles['img'] ?>" alt=""><img
                                src="<?= $articles['img'] ?>" alt=""></div>
                </div>
                <div class="ps-product__info">
                    <div class="ps-product__rating">
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                        </select><a href="#">(Read all 8 reviews)</a>
                    </div>
                    <h1><?= $articles['product_name'] ?></h1>
                    <p class="ps-product__category"><a href="#"> <?= $one_category['name'] ?></a>,<a
                                href="#"> <?= $one_brand['brand_name'] ?></a>,<a href="#">
                            <?= $sub_categories['name'] ?></a></p>
                    <h3 class="ps-product__price">$ <?= $articles['cost'] ?></h3>
                    <div class="ps-product__block ps-product__quickview">
                        <h4>QUICK REVIEW</h4>
                        <p>The Nike Free RN 2017 Men's Running Shoe weighs less than previous versions and features an
                            updated knit material…</p>
                    </div>
                    <div class="ps-product__block ps-product__style">
                        <h4>CHOOSE YOUR STYLE</h4>
                        <ul>
                            <li><a href="/?page_type=product_detail&id=<?= $articles['id'] ?>"><img
                                            src="<?= $articles['img'] ?>" alt=""></a></li>
                            <li><a href="/?page_type=product_detail&id=<?= $articles['id'] ?>"><img
                                            src="<?= $articles['img'] ?>" alt=""></a></li>
                            <li><a href="/?page_type=product_detail&id=<?= $articles['id'] ?>"><img
                                            src="<?= $articles['img'] ?>" alt=""></a></li>
                            <li><a href="/?page_type=product_detail&id=<?= $articles['id'] ?>"><img
                                            src="<?= $articles['img'] ?>" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="ps-product__block ps-product__size">
                        <h4>CHOOSE SIZE<a href="#">Size chart</a></h4>
                        <select class="ps-select selectpicker">
                            <option value="1">Select Size</option>
                            <option value="2">4</option>
                            <option value="3">4.5</option>
                            <option value="3">5</option>
                            <option value="3">6</option>
                            <option value="3">6.5</option>
                            <option value="3">7</option>
                            <option value="3">7.5</option>
                            <option value="3">8</option>
                            <option value="3">8.5</option>
                            <option value="3">9</option>
                            <option value="3">9.5</option>
                            <option value="3">10</option>
                        </select>
                        <div class="form-group">
                            <input class="form-control" type="number" value="1">
                        </div>
                    </div>
                    <div class="ps-product__shopping"><a class="ps-btn mb-10, add_cart" data-id="<?=$articles['id'] ?>" href="/?page_type=add_to_cart">Add to cart<i
                                    class="ps-icon-next"></i></a>
                        <div class="ps-product__actions"><a class="mr-10" href="whishlist.html"><i
                                        class="ps-icon-heart"></i></a><a href="compare.html"><i
                                        class="ps-icon-share"></i></a></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="ps-product__content mt-50">
                    <ul class="tab-list" role="tablist">
                        <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Overview</a>
                        </li>
                        <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Review</a></li>
                        <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">PRODUCT TAG</a></li>
                        <li><a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab">ADDITIONAL</a></li>
                    </ul>
                </div>
                <div class="tab-content mb-60">
                    <div class="tab-pane active" role="tabpanel" id="tab_01">
                        <p>Caramels tootsie roll carrot cake sugar plum. Sweet roll jelly bear claw liquorice.
                            Gingerbread lollipop dragée cake. Pie topping jelly-o. Fruitcake dragée candy canes tootsie
                            roll. Pastry jelly-o cupcake. Bonbon brownie soufflé muffin.</p>
                        <p>Sweet roll soufflé oat cake apple pie croissant. Pie gummi bears jujubes cake lemon drops
                            gummi bears croissant macaroon pie. Fruitcake tootsie roll chocolate cake Carrot cake cake
                            bear claw jujubes topping cake apple pie. Jujubes gummi bears soufflé candy canes topping
                            gummi bears cake soufflé cake. Cotton candy soufflé sugar plum pastry sweet roll..</p>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab_02">
                        <p class="mb-20">1 review for <strong>Shoes Air Jordan</strong></p>
                        <div class="ps-review">
                            <div class="ps-review__thumbnail"><img src="/shop_assets/images/user/1.jpg" alt=""></div>
                            <div class="ps-review__content">
                                <header>
                                    <select class="ps-rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <p>By<a href=""> Alena Studio</a> - November 25, 2017</p>
                                </header>
                                <p>Soufflé danish gummi bears tart. Pie wafer icing. Gummies jelly beans powder.
                                    Chocolate bar pudding macaroon candy canes chocolate apple pie chocolate cake. Sweet
                                    caramels sesame snaps halvah bear claw wafer. Sweet roll soufflé muffin topping
                                    muffin brownie. Tart bear claw cake tiramisu chocolate bar gummies dragée lemon
                                    drops brownie.</p>
                            </div>
                        </div>
                        <form class="ps-product__review" action="_action" method="post">
                            <h4>ADD YOUR REVIEW</h4>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="form-group">
                                        <label>Name:<span>*</span></label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Email:<span>*</span></label>
                                        <input class="form-control" type="email" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Your rating<span></span></label>
                                        <select class="ps-rating">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                                    <div class="form-group">
                                        <label>Your Review:</label>
                                        <textarea class="form-control" rows="6"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="ps-btn ps-btn--sm">Submit<i class="ps-icon-next"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab_03">
                        <p>Add your tag <span> *</span></p>
                        <form class="ps-product__tags" action="_action" method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="">
                                <button class="ps-btn ps-btn--sm">Add Tags</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab_04">
                        <div class="form-group">
                            <textarea class="form-control" rows="6"
                                      placeholder="Enter your addition here..."></textarea>
                        </div>
                        <div class="form-group">
                            <button class="ps-btn" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80">
    <div class="ps-container">
        <div class="ps-section__header mb-50">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <h3 class="ps-section__title" data-mask="Related item">- YOU MIGHT ALSO LIKE</h3>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <div class="ps-owl-actions"><a class="ps-prev" href="#"><i
                                    class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i
                                    class="ps-icon-arrow-left"></i></a></div>
                </div>
            </div>
        </div>
        <div class="ps-section__content">
            <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000"
                 data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1"
                 data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000"
                 data-owl-mousedrag="on">
                <?php foreach ($all_articles as $all_article): ?>
                <div class="ps-shoes--carousel">
                    <div class="ps-shoe">
                        <div class="ps-shoe__thumbnail">
                            <div class="ps-badge"><span>New</span></div>
                            <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                    src="<?=$all_article['img'] ?>" alt=""><a class="ps-shoe__overlay"
                                                                                   href="/?page_type=product_detail&id=<?=$all_article['id'] ?>"></a>
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
                                <span class="ps-shoe__price"> $ <?=$all_article['cost'] ?></span>
                            </div>
                            <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html"><?=$all_article['product_name'] ?></a>
                                <p class="ps-shoe__categories"><a href="#"><?=$sortedCategories[$all_article['category_id']]['name'] ?></a>,<a href="#"> <?=$sortedBrands[$all_article['brand_id']]['brand_name'] ?></a>,<a
                                            href="#"> <?=$sortedCategories[$all_article['sub_category_id']]['name'] ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<script>
    $( document ).ready(function() {
        $(".add_cart").on('click', function (event){
          let id = $(event.target).data('id');
          console.log(id);
        })
        $.ajax({
            url: '/?action=add_cart',         /* Куда пойдет запрос */
            method: 'post',             /* Метод передачи (post или get) */
            data: {id: id}    /* Параметры передаваемые в запросе. */
        });
    });
</script>