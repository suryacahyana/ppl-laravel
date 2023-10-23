<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Models\AkarKuadrat;
use Illuminate\Http\Request;

class SQLController extends Controller
{
    public function SQLAkarKuadrat($number)
    {
        if ($number < 0) {
            return response()->json(['result' => 'Angka Tidak Boleh Negatif']);
        }

        $result = DB::select("CALL kuadrat (".$number.")");

        AkarKuadrat::create([
            'angka' => $number,
            'hasil' => $result[0]->hasil,
        ]);

        return response()->json(['result' => $result[0]->hasil]);

    }
}