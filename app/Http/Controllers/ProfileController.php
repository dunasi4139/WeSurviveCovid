<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());

        if($user->role_id == 2) {
            $contents = Article::where('dokter_id', Auth::id())->orderByDesc('created_at')->paginate(6);
        } else {
            $contents = Post::where('user_id', Auth::id())->orderByDesc('created_at')->paginate(6);
        }

        return view('pages.profile.index', compact('user', 'contents'));
    }
}
