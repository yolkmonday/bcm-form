<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skshhk;

class CetakController extends Controller
{
    public function cetak($id)
    {
        $data = Skshhk::find($id);

        return view('skshhk.cetak', ["data" => $data]);
    }
}
