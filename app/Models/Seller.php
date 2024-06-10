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
}
