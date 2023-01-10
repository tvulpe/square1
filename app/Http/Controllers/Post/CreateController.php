<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class CreateController extends Controller
{
    public function index(): View
    {
        return view('post/create');
    }

    public function create(Request $request): RedirectResponse
    {
        try {
            $post = Post::create([
                'users_id' => Auth::id(),
                'title' => $request->title,
                'description' => $request->description,
                'publication_date' => Carbon::now()
            ]);   
        } catch (Exception $e) {
            return $exception->getMessage();
        }

        return Redirect::route('post.view', ['id' => $post->id]);
    }
}
