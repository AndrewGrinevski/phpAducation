<?php
require_once __DIR__ . '/admin/' . $name . '_header.php';

    if (isset($_POST['submit']) || $_FILES) {
    move_uploaded_file($_FILES['image']['tmp_name'], "admin/uploads/" . $_FILES['image']['name']);
    }
?>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="title"/>
        <br>
        <input type="text" name="img" placeholder="img"/>
        <br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="content"></textarea>
        <br>
        <input type="text" name="author" placeholder="author"/>
        <br>
        <input type="text" name="category" placeholder="category"/>
        <br>
        <input type="file" name="image"><br>
        <br>
        <button type="submit">Save</button>
    </form>

<?php


if (!empty($_POST)) {
    $imagename=$_FILES["image"]["name"];
    $sql = "INSERT INTO `pages` (`title`, `img`, `content`, `author`, `category`, `new_img`)
    VALUES ('{$_POST['title']}', '{$_POST['img']}', '{$_POST['content']}', '{$_POST['author']}', 
    '{$_POST['category']}', '$imagename')
";
    mysqli_query($connection, $sql);
}





