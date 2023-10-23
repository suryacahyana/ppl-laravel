<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\AkarKuadrat;

class LogController extends Controller
{
    public function index()
    {        
        $kuadrat = DB::table('akar_kuadrats')->orderBy('id', 'desc')->paginate(8);
  
        return view('main', compact('kuadrat'));
    }
     
    public function show($id)
    {
        $kuadrat = AkarKuadrat::find($id);
   
        return response()->json($kuadrat);
    }
}
