<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AkarKuadrat;
use Illuminate\Http\Request;

class AkarKuadratController extends Controller
{
    public function hitungAkarKuadrat($number)
    {
        if ($number < 0) {
            return response()->json(['result' => 'Angka Tidak Boleh Negatif']);
        }

        $result = sqrt($number);

        AkarKuadrat::create([
            'angka' => $number,
            'hasil' => $result,
        ]);

        return response()->json(['result' => $result]);
    }
}
