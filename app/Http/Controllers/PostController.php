<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderByDesc('created_at')->paginate(6);

        return view('pages.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.post.create');
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

        Post::create([
            'user_id' => Auth::id(),
            'judul' => $request->title,
            'isi' => $request->content,
            'gambar' => "/images/posts/dummy-01.jpeg",
            'like' => 0
        ]);

        $id = Post::latest()->first();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $nama_file = Auth::id() . "_" . time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images/posts/';
            $file->move($tujuan_upload, $nama_file);
            $image = $request->file('image');

            Post::where('id', '=', $id->id)->update(array('gambar' => $tujuan_upload . $nama_file));
        }

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find(Auth::id());
        $post = Post::find($id);
        $comments = Comment::where('post_id', $id)->orderBy('created_at')->get();

        return view('pages.post.show', compact('post', 'user', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('pages.post.edit', compact('post'));
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

        $post = Post::find($id);
        $post->judul = $request->input('title');
        $post->isi = $request->input('content');
        $post->save();

        $user = User::find(Auth::id());

        return view('pages.post.show', compact('post', 'user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->forceDelete();

        return back();
    }
}
