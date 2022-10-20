<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skshhk;

class CetakController extends Controller
{
    public function cetak($id)
    {
        $data = Skshhk::with(['petugas', 'vendor', 'hh'])->find($id);
        $v_dok = $data->dok_panjang * $data->dok_lebar * (($data->dok_tinggi_1 + $data->dok_tinggi_2 + $data->dok_tinggi_3) / 3);
        $v_lp = $data->lp_panjang * $data->lp_lebar * (($data->lp_tinggi_1 + $data->lp_tinggi_2 + $data->lp_tinggi_3) / 3);
        return view('skshhk.cetak', ["data" => $data, "v_dok" => $v_dok, "v_lp" => $v_lp]);
    }
}
