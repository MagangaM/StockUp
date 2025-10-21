<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $category = "Select * from categories";
        return view ('admin.categories.index', compact('categories'));
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view ('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max: 255',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route ('categories.index')
        ->with('message', 'Category created successfully')
        ->with('icon','success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
        
    {
        $category = Category:: findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category:: findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max: 255',
        ]);

        $category = Category:: findOrFail($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route ('categories.index')
        ->with('message', 'Category created successfully')
        ->with('icon','success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category:: findOrFail($id);
        $category->delete();

        return redirect()->route ('categories.index')
        ->with('message', 'Category was deleted successfully')
        ->with('icon','success');
    }
}
