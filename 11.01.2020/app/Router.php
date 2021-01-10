<?php

namespace App;




use App\Controllers\Admin\CategoryController;
use App\Controllers\Admin\ProductController;
use App\Controllers\BlogController;
use App\Controllers\HomeController;

class Router
{
    // В классе Router создаем логику перехода по страницам сайта.
    // В массиве $routes в качестве ключа выступает url (он задан в качестве регулярных выражений), а в качестве значения вызываемый метод по данному url-у
    private static $routes = [
        '/' => HomeController::class. '@index',
        '/blog/(\w+)' => BlogController::class . '@show',
        '/blog/(\w+)/(\w+)' => BlogController::class . '@showPage',
        // crud
        '/admin/category' => CategoryController::class . '@index',
        '/admin/category/show/(\w+)' => CategoryController::class . '@show',
        '/admin/category/add' => CategoryController::class . '@add',
        '/admin/category/save' => CategoryController::class . '@save',
        '/admin/category/edit/(\w+)' => CategoryController::class . '@edit',
        '/admin/category/delete/(\w+)' => CategoryController::class . '@delete',

        '/admin/product' => ProductController::class . '@index',
        '/admin/product/show/(\w+)' => ProductController::class . '@show',
        '/admin/product/add' => ProductController::class . '@add',
        '/admin/product/save' => ProductController::class . '@save',
        '/admin/product/edit/(\w+)' => ProductController::class . '@edit',
        '/admin/product/delete/(\w+)' => ProductController::class . '@delete',
    ];
    // В массиве $routesArgs находятся подмаски url (пример:url blog/trata/lol в массиве будет храниться trata and lol)
    private static $routesArgs = [];
    // Функция getRoute() обрабатывает url введенный пользователем
    public function getRoute()
    {
        // Разбиваем url на состовляющие
        $url = explode('?', $_SERVER['REQUEST_URI']);
        $url = $url[0];
        $controller = null;
        // Перебераем массив $routes для проверки на совпавдения с запрашиваем url пользователя
        foreach (self::$routes as $pattern => $callback){
            $pattern = '/^' . str_replace('/', '\/', $pattern) . '$/';
            // Проверяет на совпавдения с запрашиваем url пользователя и записывает в $params
            preg_match($pattern, $url, $params);
            // если есть совпавдения с запрашиваем url пользователя выполняет метод данного url-а
            if ($params) {
                $routeParams = explode('@', $callback);
                $controller = new $routeParams[0];
                $tmp = array_shift($params);
                self::$routesArgs = $params;
                // выполнение метода
                $controller -> {$routeParams[1]}();
                break;
            }
        }
    }
    // проверка какие GET параметры пришли по url-у
    public static function getRouteArgs()
    {
        return self::$routesArgs;
    }
}