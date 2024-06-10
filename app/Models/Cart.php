<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity'
    ];
    protected $primaryKey = null;
    public $timestamps = false;
    public $incrementing = false;
}
