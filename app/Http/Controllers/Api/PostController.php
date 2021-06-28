<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * GET BLOGS POSTS (ARCHIVIO)
     */
    public function index(){
        $posts = Post::paginate(2);

        return response()->json($posts);
    }
}
