<?php


namespace App\Models;


use App\Core\Model;

class Product extends Model
{
    protected static $fillable = ['brand_id','product_name','category_id','sub_category_id'];

}