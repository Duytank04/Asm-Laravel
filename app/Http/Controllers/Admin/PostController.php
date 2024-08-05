<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    const PATH_VIEW = 'admin.posts.';

    const PATH_UPLOAD = 'posts';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Post::query()->with('catgory')->latest('id')->get();
        $posts = Post::all();
        return view(self::PATH_VIEW . __FUNCTION__, compact('posts'));
    }

    public function create()
    {
        $categories = Category::query()->pluck('name', 'id')->all();
        return view(self::PATH_VIEW . __FUNCTION__, compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'string|max:255',
            'body' => 'string|max:255',
            'image' => 'nullable|image',
            'category_id' => 'required|exists:categories,id',
        ]);

        $dataPost = $request->all();

        if ($request->hasFile('image')) {
            $dataPost['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
        }

        Post::create($dataPost);

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    public function show(string $id)
    {
        $model = Post::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('model'));
    }

    public function edit(string $id)
    {
        $model = Post::query()->findOrFail($id);
        $categories = Category::query()->pluck('name', 'id')->all();
        return view(self::PATH_VIEW . __FUNCTION__, compact('model', 'categories'));
    }

    public function update(Request $request, $id)
{
    $post = Post::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'nullable|string|max:255',
        'body' => 'nullable|string',
        'image' => 'nullable|image',
        'category_id' => 'required|exists:categories,id',
    ]);

    $data = $request->except('image');

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('public/images');
        if ($post->image && Storage::exists($post->image)) {
            Storage::delete($post->image);
        }
    }

    $post->update($data);

    return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully');
}



    public function destroy(string $id)
    {
        $model = Post::query()->findOrFail($id);

        $model->delete();

        if ($model->image && Storage::exists($model->image)) {
            Storage::delete($model->image);
        }

        return back();
    }
}
