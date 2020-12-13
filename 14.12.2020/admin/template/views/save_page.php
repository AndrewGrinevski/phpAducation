<div class="mainpanel">

    <?php
    if (!empty($_POST)) {
        echo '<h4>Article uploaded successfully</h4>';
        if ($_FILES['page_img']['size'] > 0) {
            $imgUrl = '/images/' . $_FILES['page_img']['name'];
            move_uploaded_file($_FILES['page_img']['tmp_name'],
                BASE_PATH . '/../images/' . $_FILES['page_img']['name']);
        }
    }
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $stmt = mysqli_prepare($connection, "INSERT INTO pages (`title`, `content`, `author`, `category`, `img`)
VALUES (?,?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssss", $title, $content, $author, $category, $imgUrl);
    mysqli_stmt_execute($stmt);
    ?>
</div>
