<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    public $timestamps = false;

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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'seller_id', 'seller_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'seller_id', 'seller_id');
    }
}
