<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    const PATH_VIEW = 'admin.categorys.';

    const PATH_UPLOAD = 'categorys.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::query()->latest('id')->paginate();
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    public function store(Request $request)
{
    // Loại bỏ các trường không cần thiết
    $data = $request->except(['images']);

    // Kiểm tra và xử lý file ảnh (nếu có)
    if ($request->hasFile('images')) {
        if (!Storage::exists(self::PATH_UPLOAD)) {
            Storage::makeDirectory(self::PATH_UPLOAD);
        }
        $data['images'] = Storage::put(self::PATH_UPLOAD, $request->file('images'));
    }

    dd($data);
    // Lưu dữ liệu vào cơ sở dữ liệu
    Category::query()->create($data);

    return redirect()->route('admin.category.index');
}

    


    public function show(string $id)
    {
        $model = Category::query()->findOrFail($id);

        return view(self::PATH_VIEW . __FUNCTION__, compact('model') );
    }

    public function edit(string $id)
    {
        $model = Category::query()->findOrFail($id);

        return view(self::PATH_VIEW . __FUNCTION__, compact('model') );
    }

    public function update(Request $request, Category $category)
    {
        $request->validate(['name' => 'required']);
        $category->update($request->all());
        return redirect()->route('categories.createpost');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.createpost');
    }
    
}
