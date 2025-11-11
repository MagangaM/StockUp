<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Storage;

>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view ('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view ('admin.products.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
        $request->validate([
            'code' => 'required|unique:products,code',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'purchase_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'minimum_stock' => 'required|integer',
            'maximum_stock' => 'required|integer',
            'unit_of_measurement' => 'required',
            'status' => 'required|boolean',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = new Product();

        $product->code = $request->code;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->file('image')->store('images/products','public');
        $product->purchase_price = $request->purchase_price;
        $product->sale_price = $request->sale_price;
        $product->minimum_stock = $request->minimum_stock;
        $product->maximum_stock = $request->maximum_stock;
        $product->unit_of_measurement = $request->unit_of_measurement;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        

        $product->save();

        return redirect()->route ('products.index')
        ->with('message', 'Product has been created successfully!')
        ->with('icon','success');
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(Product $product)
    {
        //
=======
    public function show($id)
    {
        $product = product:: findOrFail($id);
        return view('admin.products.show', compact('product'));
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(Product $product)
    {
        //
=======
    public function edit($id)
    {
        $product = product:: findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product','categories'));
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, Product $product)
    {
        //
=======
    public function update(Request $request, $id)
    {
         $request->validate([
            'code' => 'required|unique:products,code,'.$id,
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'purchase_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'minimum_stock' => 'required|integer',
            'maximum_stock' => 'required|integer',
            'unit_of_measurement' => 'required',
            'status' => 'required|boolean',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product:: findOrFail($id);

        $product->code = $request->code;
        $product->name = $request->name;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('images/products', 'public');
        }

        $product->purchase_price = $request->purchase_price;
        $product->sale_price = $request->sale_price;
        $product->minimum_stock = $request->minimum_stock;
        $product->maximum_stock = $request->maximum_stock;
        $product->unit_of_measurement = $request->unit_of_measurement;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        

        $product->save();

        return redirect()->route ('products.index')
        ->with('message', 'Product has been updated successfully')
        ->with('icon','success');
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(Product $product)
    {
        //
=======
    public function destroy($id)
    {
        $product = product:: findOrFail($id);
        Storage::disk('public')->delete($product->image);
        $product->delete();

        return redirect()->route ('products.index')
        ->with('message', 'The Product was deleted successfully')
        ->with('icon','success');
>>>>>>> 266a7f8076f74ebcf3f2f6276464a62f87608007
    }
}
