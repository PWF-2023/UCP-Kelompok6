<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        //todo , title
        $categories = Category::where('user_id', auth()->user()->id)
            ->get();
        // dd($categories);

        return view('category.index', compact('categories'));
    }

    public function create(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|max:255',
        ]);
        $category = Category::create([
            'title' => ucfirst($request->title),
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('category.index')->with('success', 'Category created successfully!');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|max:255',
        ]);
        $category = Category::create([
            'title' => ucfirst($request->title),
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('category.index')->with('success', 'Category created successfully!');
    }

    public function edit(Category $category)
    {
        //
        if (auth()->user()->id = $category->user_id) {
            return view('category.edit', compact('category'));
        }
        return redirect()->route('category.index')->with('danger', 'You are not authorized to edit this Category!');
    }

    public function update(Request $request, Category $category)
    {
        //
        $request->validate([
            'title' => 'required|max:255',
        ]);
        $category->update([
            'title' => ucfirst($request->title),
        ]);
        return redirect()->route('category.index')->with('success', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
        //
        if(auth()->user()->id == $category->user_id){
            $category->delete();
            return redirect()->route('category.index')->with('success','Category deleted successfully!');
        }
        return redirect()->route('category.index')->with('danger','You are not authorized to delete this Category!');
    }
}
