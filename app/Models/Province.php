<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'd_provinsi';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'd_negara_nation_code', 'nama'];

    public function getProvinces()
    {
        return $this->select('id', 'nama')->get();
    }

    public function getProvince($id)
    {
        return $this->select('id', 'nama')->where('id', $id)->first();
    }

    public function getProvinceByCountry($id)
    {
        return $this->select('id', 'nama')->where('d_negara_nation_code', $id)->get();
    }
}
