<?php


namespace App\Controllers;


use App\Core\BaseController;
use App\Models\Product;
use App\Models\User;

class HomeController extends BaseController
{
    public function index()
    {
        //$user = User::findById(1);
        //$product = Product::findById(1);
        $product = Product::create([
            'brand_id' => 1,
            'product_name' => 'shoes',
            'category_id' => 1,
            'sub_category_id' => 2
        ]);
        $product -> save();

        //$this->render('home.main', [
        //    'user' => $user,
        //    'product' => $product
        //]);
    }
}