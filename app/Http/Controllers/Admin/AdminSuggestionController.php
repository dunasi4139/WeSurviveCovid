<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suggestion;

class AdminSuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sarans = Suggestion::all();
        return view('admin.suggestion.index', compact('sarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suggestion.create');
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
            'content' => ['required', 'string'],
            'image' => 'image|mimes:jpg,jpeg,png'
        ]);

        Suggestion::create([
            'judul' => $request->title,
            'isi' => $request->content,
            'gambar' => "/images/blog/default.jpg",
        ]);

        $id = Suggestion::latest()->first();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $nama_file = "_" . time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/suggestions/';
            $file->move($tujuan_upload, $nama_file);
            $image = $request->file('image');

            Suggestion::where('id', '=', $id->id)->update(array('gambar' => $tujuan_upload . $nama_file));
        }

        return redirect()->route('admin.suggestion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saran = Suggestion::find($id);

        return view('admin.suggestion.show', compact('saran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saran = Suggestion::find($id);
        return view('admin.suggestion.edit', compact('saran'));
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
        $this->validate($request, [
            'title' => ['required', 'string'],
            'content' => ['required', 'string'],
        ]);

        $saran = Suggestion::find($id);
        $saran->judul = $request->input('title');
        $saran->isi = $request->input('content');
        $saran->save();

        return view('admin.suggestion.show', compact('saran'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Suggestion::where('id', $id)->forceDelete();

        return back();
    }
}
