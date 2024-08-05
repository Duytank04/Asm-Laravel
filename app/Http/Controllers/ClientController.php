<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        // Lấy dữ liệu các categories từ database
        $categories = Category::all();

        // Truyền dữ liệu vào view
        return view('client.index', ['categories' => $categories]);
    }
}
