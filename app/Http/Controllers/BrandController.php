<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $brands = Brand::all();

        return view('admin.brand.index', compact('brands'));
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
            'brand_name' => [
                'required',
                Rule::unique('brands', 'brand_name')->where(function ($query) {
                    return $query->where('brand_status', '!=', 'deleted');
                }),
            ],
            'brand_status' => 'required|in:active,inactive',
        ]);

        // Create and save the brand
            Brand::create([
                'brand_name' => $request->brand_name,
                'brand_status' => $request->brand_status,
            ]);

         return redirect()->back()->with('toast', 'success')->with('message', 'Brand saved successfully ' );

    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand, $id)
    {
        //

            $request->validate([
            'brand_name' => 'required|string|max:255',
            'brand_status' => 'required|in:active,inactive',
          ]);

        $brand = Brand::findOrFail($id);
            $brand->update([
                'brand_name' => $request->brand_name,
                'brand_status' => $request->brand_status,
            ]);

            return redirect()->route('brand')->with('toast', 'success')->with('message', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {


        $brand =  Brand::findOrFail($id);
        $brand->delete();
         return redirect()->back()->with('toast', 'success')->with('message', 'Brand deleted successfully ' );
    }
}