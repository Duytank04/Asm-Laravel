<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    
    public function __construct()
    {
        // Lấy các loại tin từ database và chia sẻ cho tất cả các view
        $category = DB::table('categories')->get();
        view()->share('category', $category);
    }

    public function index()
    {
        $categories = Category::with('posts')->get();
        return view('client.index', compact('categories'));
    }

    

    public function showall($category_id)
    {
        $category = DB::table('categories')->where('id', $category_id)->first();
        $categories = DB::table('categories')->get();
        $listpost = DB::table('posts')->where('category_id', $category_id)->get();
        return view('client.category.index', ['listpost' => $listpost, 'categories' => $categories,'category' => $category ]);
    }
}
