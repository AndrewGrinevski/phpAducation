<?php


namespace App\Controllers;


use App\Core\BaseController;

use App\Models\Product;
use App\Models\User;

class HomeController extends BaseController
{
    public function index()
    {

        $user = User::findById(1);
        $product = Product::findById(1);
        //$product = Product::create([
       //     'product_name' => 'Product1',
        //    'category_id' => 1,
        //    'brand_id' => 1
       // ]);


        $this->render('home.main', [
            'user' => $user,
            'product' => $product
        ]);

    }
}