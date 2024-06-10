<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdistrict extends Model
{
    use HasFactory;

    protected $table = 'd_kelurahan';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'd_kecamatan_id', 'nama'];

    public function getSubdistricts()
    {
        return $this->select('id', 'nama')->get();
    }

    public function getSubdistrict($id)
    {
        return $this->select('id', 'nama')->where('id', $id)->first();
    }

    public function getSubdistrictByDistrict($id)
    {
        return $this->select('id', 'nama')->where('d_kecamatan_id', $id)->get();
    }

    public function getDistrict()
    {
        return $this->belongsTo(District::class, 'd_kecamatan_id', 'id');
    }
}
