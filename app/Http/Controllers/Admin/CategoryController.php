<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    const PATH_VIEW = 'admin.categories.';

    const PATH_UPLOAD = 'categories';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view(self::PATH_VIEW . __FUNCTION__, compact('categories'));
    }

    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
        }

        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    public function show(string $id)
    {
        $model = Category::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('model'));
    }

    public function edit(string $id)
    {
        $model = Category::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('model'));
    }

    public function update(Request $request, $id)
    {

        $model = Category::query()->findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
        }

        $curentImage = $model->image;

        if($request->hasFile('image') && $curentImage && Storage::exists($curentImage)){
            Storage::delete($curentImage);
        }

        $model->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Post updated successfully');
    }

    public function destroy(string $id)
    {
        $model = Category::query()->findOrFail($id);

        $model->delete();

        if($model->image && Storage::exists($model->image)){
            Storage::delete($model->image);
        }

        return back();
    }
}
