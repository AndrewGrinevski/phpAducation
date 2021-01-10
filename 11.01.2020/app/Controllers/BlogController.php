<?php

namespace App\Controllers;

use App\Core\BaseController;
use App\Helpers\Debugger;
use App\Router;

class BlogController extends BaseController
{
    public function index()
    {
        echo 'Blog controller';
    }

    public function show()
    {

        $person = [
            'id' => 1,
            'name' => 'Andrew',
            'lastName' => 'Grinewski'
        ];
        $this->render('blog.category', [
            'man' => $person,
            'id' => 1
        ]);

    }

    public function showPage()
    {
        Debugger::debug(Router::getRouteArgs());
        echo "<h1>News page</h1>";
    }
}