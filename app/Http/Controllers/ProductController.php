<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::with('productImages')->get();
        // dd($products);

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
            $categories = Category::all();
            $brands = Brand::all();
          return view('admin.product.add', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'product_name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'brand_id' => 'required',
            'quantity' => 'required|numeric',
            'color' => 'required',
            'discount' => 'required|numeric|min:0',
            'status' => 'required',
            'product_image' => 'required|mimes:jpeg,png',
            'description' => 'required'
        ],[
            'price.required' => 'Price of product is required',
            'category_id.required' => 'Product category is required',
            'brand_id.required' => 'Product brand is required',
             'discount.min' => 'Discount value must be greater than or equal to 0.',
            'quantity.numeric' => 'Quantity of product must be number',
            'product_image.required' => 'Pictures of the product is required',
        ]);

            $product = new Product();
            $product->product_name = $request->product_name;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            $product->quantity = $request->quantity;
            $product->color = $request->color;
            $product->discount = $request->discount;
            $product->status = $request->status;
            $product->description = $request->description;
            $product->save();

            if ($request->hasFile('product_image')) {
                    foreach ($request->file('product_image') as $image) {
                        $productImage = new ProductImage();
                        $productImage->product_id = $product->id;
                        $productImage->image_path = $image->store('product_image');
                        $productImage->save();
                    }
                return redirect()->route('product')->with('toast', 'success')->with('message', 'Product added successfully');

             }



    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}