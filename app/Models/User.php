<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Ramsey\Uuid\Uuid;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_phone',
        'user_password',
        'user_name',
        'user_postal_code',
        'user_address',
        'user_address_detail'];
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::uuid4()->toString();
        });
    }
}