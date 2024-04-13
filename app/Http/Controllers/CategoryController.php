<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
              'category_name' => [
                'required',
                Rule::unique('categories', 'category_name')->where(function ($query) {
                    return $query->where('status', '!=', 'deleted');
                }),
            ],
            'status' => 'required|in:active,inactive',
        ]);

        // Create and save the brand
            Category::create([
                'category_name' => $request->category_name,
                'status' => $request->status,
            ]);

         return redirect()->back()->with('toast', 'success')->with('message', 'Category saved successfully ' );

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category, $id)
    {
        //
         $request->validate([
            'category_name' => 'required|unique:categories|string|max:255',
            'status' => 'required|in:active,inactive',
          ]);

        $category = Category::findOrFail($id);

            $category->update([
                'category_name' => $request->category_name,
                'status' => $request->status,
            ]);

            return redirect()->route('category')->with('toast', 'success')->with('message', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

         $category =  Category::findOrFail($id);
         $category->delete();

         return redirect()->back()->with('toast', 'success')->with('message', 'Category deleted successfully ' );
    }
}