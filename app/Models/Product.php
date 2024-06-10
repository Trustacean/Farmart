<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_id',
        'seller_id',
        'product_name',
        'product_description',
        'product_sell_price',
        'product_weight',
        'product_stock',
        'product_image',
        'category_id',
    ];

    public $timestamps = false;
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->product_id = Uuid::uuid4()->toString();
        });
    }
}
