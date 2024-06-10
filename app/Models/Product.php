<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        'product_id',
        'product_name',
        'product_description',
        'product_sell_price',
        'product_weight',
        'product_stock',
        'product_image',
        'category_id',
        'seller_id',
    ];


}
