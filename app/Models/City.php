<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'd_kabkota';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'd_provinsi_id', 'nama'];

    public function getCities()
    {
        return $this->select('id', 'nama')->get();
    }

    public function getCity($id)
    {
        return $this->select('id', 'nama')->where('id', $id)->first();
    }

    public function getCityByProvince($id)
    {
        return $this->select('id', 'nama')->where('d_provinsi_id', $id)->get();
    }

    public function getProvince()
    {
        return $this->belongsTo(Province::class, 'd_provinsi_id', 'id');
    }
}
