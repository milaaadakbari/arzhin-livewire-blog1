<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{

    public function index()
    {
        $categories = category::query()->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create(request $request)
    {
        $categories = Category::query()->pluck('title', 'id');
        return view('admin.categories.create', compact('categories'));
    }


    public function store(CategoryRequest $request)
    {
        category::query()->create([
            'title' =>$request -> title,
            'parent_id' => $request -> parent_id,
            'slug' => str()->slug($request->title)
        ]);

        return redirect()->route('categories.index')->with('success','دسته بندی ایجاد شد');
    }

    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $categories = Category::query()->pluck('title', 'id');
        $category = category::query()->find($id);
        return view('admin.categories.edit', compact('category', 'categories'));
    }


    public function update(CategoryRequest $request, string $id)
    {
        $category = category::query()->find($id);
        $category->update($request->all());
        return redirect()->route('categories.index')->with('success','ویرایش با موفقیت انجام شد');
    }

    public function destroy(string $id)
    {
        //
    }
}
