<?php
$sql = "SELECT * from shop_activewear";
$res = mysqli_query($connection, $sql);
$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>

    <div class="mainpanel">
        <div class="contentpanel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Название товара</th>
                    <th scope="col">Действия</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pages as $page): ?>
                    <tr>
                        <td><?= $page['product_name'] ?></td>
                        <td>
                            <a href="/admin/?action=edit_product&id=<?= $page['id'] ?>">Редактировать</a>
                            <a href="/admin/?action=delete_product&id=<?= $page['id'] ?>">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
