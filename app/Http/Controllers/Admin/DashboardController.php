<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Article;
use App\Models\Suggestion;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:isAdmin');
    }

    public function index()
    {
        $users = User::all();
        $posts = Post::all();
        $articles = Article::all();
        $suggestions = Suggestion::all();
    
        return view('admin.index', compact('users', 'posts', 'articles', 'suggestions'));
    }
}
