<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::with('posts')->get();
        return view('client.index', compact('categories'));
    }

    public function show(Category $categories)
    {
        return view('', compact('categories'));
    }
}
