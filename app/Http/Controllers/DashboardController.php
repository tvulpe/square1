<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display logged in user's posts
     */
    public function index(): View
    {
        $posts = Post::where('users_id', Auth::id())->orderByDesc('publication_date')->get();

        return view('dashboard', [
            'posts' => $posts
        ]);
    }
}
