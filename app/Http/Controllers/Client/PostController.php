<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::with('posts')->get();
        return view('client.index', compact('categories'));
    }

    public function show($id)
    {  
        $post = DB::table('posts')->where('id', $id)->first();
        return view('client.post.index', ['post'=> $post]);
    }
}
