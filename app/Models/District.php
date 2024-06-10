<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'd_kecamatan';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'd_kabkota_id', 'nama'];

    public function getDistricts()
    {
        return $this->select('id', 'nama')->get();
    }

    public function getDistrict($id)
    {
        return $this->select('id', 'nama')->where('id', $id)->first();
    }

    public function getDistrictByCity($id)
    {
        return $this->select('id', 'nama')->where('d_kabkota_id', $id)->get();
    }

    public function getCity()
    {
        return $this->belongsTo(City::class, 'd_kabkota_id', 'id');
    }
}
