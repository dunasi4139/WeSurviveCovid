<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'comment' => ['required', 'string'],
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'post_id' => $id,
            'isi' => $request->comment
        ]);

        return redirect()->route('post.show', [$id]);
    }
}
