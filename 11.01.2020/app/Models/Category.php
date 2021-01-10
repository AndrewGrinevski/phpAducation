<?php


namespace App\Models;


use App\Core\Model;

class Category extends Model
{
    protected static $tableName = 'shop_category';
    protected static $fillable = ['name'];
}