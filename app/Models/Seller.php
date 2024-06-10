<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Ramsey\Uuid\Uuid;

class Seller extends Authenticatable
{
    
    protected $table = 'sellers';
    protected $primaryKey = 'seller_id';
    protected $fillable = [
        'seller_id',
        'user_id',
        'store_name',
        'seller_phone',
        'seller_postal_code',
        'seller_address',
        'seller_address_detail'];
    public $timestamps = false;
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->seller_id = Uuid::uuid4()->toString();
        });
    }
}
