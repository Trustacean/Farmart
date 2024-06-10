<?php

namespace App\Http\Controllers;
use App\Models\Province;
use App\Models\City;
use App\Models\District;
use App\Models\SubDistrict;
use App\Models\Zipcode;

class AddressController extends Controller
{

    public function index()
    {
        $provinces = Province::all();
        return view('profile/address', compact('provinces'));
    }

    public function getCities($provinceId)
    {
        $cities = City::where('d_provinsi_id', $provinceId)->get();
        return response()->json($cities);
    }

    public function getDistricts($cityId)
    {
        $districts = District::where('d_kabkota_id', $cityId)->get();
        return response()->json($districts);
    }

    public function getSubDistricts($districtId)
    {
        $subDistricts = SubDistrict::where('d_kecamatan_id', $districtId)->get();
        return response()->json($subDistricts);
    }

    public function getZipCode($cityId, $districtId)
    {
        $zipCodes = Zipcode::where('d_kecamatan_id', $districtId)->where('d_kabkota_id', $cityId)->get();
        return response()->json($zipCodes);
    }
}
