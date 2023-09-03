<?php

namespace App\Http\Controllers\Koordinator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MasterProvinsi;
use App\Models\MasterKabupatenKota;
use App\Models\MasterKecamatan;
use App\Models\MasterKelurahan;
use App\Models\Koordinator;

class GetDataController extends Controller
{
    public function get_data_kabupaten(Request $request)
    {
        $kabupaten = MasterKabupatenKota::where('provinsi_id', $request->id)->pluck('nama', 'id');
        return response()->json($kabupaten);
    }

    public function get_data_kecamatan(Request $request)
    {
        $kecamatan = MasterKecamatan::where('kabupaten_kota_id', $request->id)->pluck('nama', 'id');
        return response()->json($kecamatan);
    }

    public function get_data_kelurahan(Request $request)
    {
        $kelurahan = MasterKelurahan::where('kecamatan_id', $request->id)->pluck('nama', 'id');
        return response()->json($kelurahan);
    }
}
