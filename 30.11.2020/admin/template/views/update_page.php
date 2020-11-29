<div class="mainpanel">
    <?php
    $ids = $_GET['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    if (isset($_FILES) && $_FILES['page_img']['size'] > 0) {
        $imgUrl = '/images/' . $_FILES['page_img']['name'];
        $stmt = mysqli_prepare($connection, "UPDATE pages SET title = ? , author = ? , content = ?, category = ?, img = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "sssssd", $title, $author, $content, $category, $imgUrl, $ids);
        mysqli_stmt_execute($stmt);
    } else {
        $stmt = mysqli_prepare($connection, "UPDATE pages SET title = ? , author = ? , content = ?, category = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "ssssd", $title, $author, $content, $category, $ids);
        mysqli_stmt_execute($stmt);
    }

    /*$stmt = mysqli_prepare($connection, 'SELECT * from pages WHERE id =?');
    mysqli_stmt_bind_param($stmt, "s", $ids);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_fetch($stmt);
    var_dump($res);*/
    ?>
</div>