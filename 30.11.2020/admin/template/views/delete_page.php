<?php
$sql = "DELETE FROM pages WHERE id = '{$_GET['id']}'  LIMIT 1";
mysqli_query($connection, $sql);
?>

<div class="mainpanel">
    <h4 class="panel-title">Page successfully deleted</h4>
    <a href="/admin/?action=list_page">Назад</a>
</div>


