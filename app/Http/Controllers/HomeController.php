<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Display all posts
     */
    public function index(): View
    {
        $posts = Post::orderByDesc('publication_date')->get();

        return view('welcome', [
            'posts' => $posts
        ]);
    }    
}
