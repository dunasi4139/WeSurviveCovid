<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempatVaksin;
use App\Models\Province;

class AdminVaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccines = TempatVaksin::paginate(8);
        return view('admin.vaccine.index', compact('vaccines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        return view('admin.vaccine.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'province' => 'required',
            'alamat' => ['required', 'string'],
            'jadwal' => ['required', 'string'],
            'jenis' => ['required', 'string'],
            'syarat' => ['required', 'string'],
            'image' => 'image|mimes:jpg,jpeg,png'
        ]);

        TempatVaksin::create([
            'nama' => $request->title,
            'jadwal' => $request->jadwal,
            'syarat' => $request->jadwal,
            'alamat' => $request->alamat,
            'jenis' => $request->jenis,
            'province_id' => $request->province,
            'gambar' => "/images/vaccines/default.jpg",
        ]);

        $id = TempatVaksin::latest()->first();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $nama_file = "_" . time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/vaccines/';
            $file->move($tujuan_upload, $nama_file);
            $image = $request->file('image');

            TempatVaksin::where('id', '=', $id->id)->update(array('gambar' => $tujuan_upload . $nama_file));
        }

        return redirect()->route('admin.vaccine.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vaccine = TempatVaksin::find($id);

        return view('admin.vaccine.show', compact('vaccine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vaccine = TempatVaksin::find($id);
        $provinces = Province::all();
        return view('admin.vaccine.edit', compact('vaccine', 'provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TempatVaksin::where('id', $id)->forceDelete();

        return back();
    }
}
