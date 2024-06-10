<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\User;

class AddressController extends Controller
{
    protected $provinceId;
    protected $cityId;
    protected $districtId;
    protected $zipCode;

    public function index()
    {
        $response = Http::withOptions(['verify' => false])
            ->get('https://alamat.thecloudalert.com/api/provinsi/get/');

        if ($response->successful()) {
            $provinces = $response->json()['result'];
        } else {
            $provinces = [];
        }


        return view('profile/address', ['provinces' => $provinces]);
    }

    public function getCities($provinceId)
    {
        $response = Http::withOptions(['verify' => false])
            ->get('https://alamat.thecloudalert.com/api/kabkota/get/?d_provinsi_id=' . $provinceId);

        if ($response->successful()) {
            $cities = $response->json()['result'];
        } else {
            $cities = [];
        }

        return response()->json($cities);
    }

    public function getDistricts($cityId)
    {
        $response = Http::withOptions(['verify' => false])
            ->get('https://alamat.thecloudalert.com/api/kecamatan/get/?d_kabkota_id=' . $cityId);

        if ($response->successful()) {
            $districts = $response->json()['result'];
        } else {
            $districts = [];
        }

        return response()->json($districts);
    }

    public function getSubDistricts($districtId)
    {
        $response = Http::withOptions(['verify' => false])
            ->get('https://alamat.thecloudalert.com/api/kelurahan/get/?d_kecamatan_id=' . $districtId);

        if ($response->successful()) {
            $subDistricts = $response->json()['result'];
        } else {
            $subDistricts = [];
        }

        return response()->json($subDistricts);
    }

    public function getZipCode($cityId, $districtId)
    {
        $response = Http::withOptions(['verify' => false])
            ->get('https://alamat.thecloudalert.com/api/kodepos/get/?d_kabkota_id='. $cityId .'&d_kecamatan_id='. $districtId);
    
        if ($response->successful()) {
            $zipCode = $response->json()['result'];
            Log::info('API response: ', $response->json());
        } else {
            $error = $response->json()['error'] ?? 'Unknown error';
            Log::error('Error fetching zip codes: ' . $error); // Assuming you're using Laravel's logging, otherwise replace with appropriate logging mechanism
            $zipCode = [];
        }
    
        return response()->json($zipCode);
    }
}
