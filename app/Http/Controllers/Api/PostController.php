<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['technologies', 'type'])->paginate(6);
        return response()->json([
            'success' => true,
            'results' => $posts

        ]);
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->with(['technologies', 'type'])->first();
        return response()->json([
            'success' => true,
            'post' => $post
        ]);


    }
}
