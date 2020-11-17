<?php
require_once __DIR__ . '/admin/' . $name . '_header.php';
?>

    <form action="" method="post">
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
        <button type="submit">Save</button>
    </form>

<?php
if (!empty($_POST)) {
    $sql = "INSERT INTO `pages` (`title`, `img`, `content`, `author`, `category`)
    VALUES ('{$_POST['title']}', '{$_POST['img']}', '{$_POST['content']}', '{$_POST['author']}', 
    '{$_POST['category']}')
";
    mysqli_query($connection, $sql);
}
