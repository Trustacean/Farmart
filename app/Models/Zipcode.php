<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{
    use HasFactory;

    protected $table = 'd_kodepos';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'd_kabkota_id', 'd_kecatmatan_id', 'kodepos'];
}
