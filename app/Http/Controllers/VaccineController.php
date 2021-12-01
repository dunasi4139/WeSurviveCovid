<?php

namespace App\Http\Controllers;

use App\Models\TempatVaksin;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->filter;
        if($id){

            $data = DB::table('provinces')
            ->join('tempat_vaksin', 'provinces.id', '=', 'tempat_vaksin.province_id')
            ->where('tempat_vaksin.province_id', '=', $id)
            ->paginate(5);

            $provinsi = Province::all();
            return view('pages.vaccine.index', compact('data' , 'provinsi'));
            
        }else{
            $data = TempatVaksin::orderByDesc('created_at')
            ->paginate(5);
    
            $provinsi = Province::all();
            return view('pages.vaccine.index', compact('data' , 'provinsi'));
        }

    }
}
