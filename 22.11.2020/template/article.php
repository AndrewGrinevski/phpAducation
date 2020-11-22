<?php
$id = $_GET['id'];
$sql = "SELECT * FROM pages where id = " . $id;

$res = mysqli_query($connection, $sql);
if (mysqli_num_rows($res) === 1):

    $article = mysqli_fetch_assoc($res);

    require_once __DIR__ . '/headers/' . $name . '_header.php';

    ?>
    <article>
        <div class="container">
            <div class="row">
                <img src="<?=$article['img']?>" alt="">
                <img src="<?='../admin/uploads/' . $article['new_img']?>" alt="">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <?= $article['content'] ?>
                </div>
            </div>
        </div>
    </article>

    <hr>
<?php
endif;