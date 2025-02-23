<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::query()->paginate(10);
        return view('admin.articles.index', compact('articles'));

    }

    public function create()
    {
        $categories = Category::query()->pluck('title', 'id');
        return view('admin.articles.create',compact('categories'));

//        $categories = Category::getCategories();
//        return view('admin.articles.create',compact('categories'));
    }

    public function store(ArticleRequest $request)
    {
        $image_name= $request->image->hashName();
        $request->image->storeAs('images/articles/', $image_name,'public');

        Article::query()->create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image_name,
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id

        ]);
        return redirect()->route('articles.index')->with('success','مقاله ثبت شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::query()->findOrFail($id);
        $categories = Category::query()->pluck('title', 'id');
        return view('admin.articles.edit',compact('categories','article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::query()->findOrFail($id);
        $article->update($request->all());
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::destroy($id);
        return response()->json(['success'=>'حذف انجام شد']);
    }
}
