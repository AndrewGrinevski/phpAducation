<?php
$action = $_GET['page_type'] ?? 'main';

define('BASE_PATH', __DIR__);

$fullPath = BASE_PATH.'/shop/template/'.$action.'.php';
require_once './core/db.php';
require_once './shop/template/layout.php';

if (isset($_GET['action'])) {
    require_once './actions/'.$_GET['action']. '.php';
}



