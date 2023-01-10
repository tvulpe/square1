<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(Request $request): View
    {
        $post = Post::find($request->id);

        return view('post/view', [
            'post' => $post
        ]);
    }
}
