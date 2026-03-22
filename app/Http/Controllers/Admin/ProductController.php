<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    private $image_path = 'uploads/product_img';
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120', // 5MB max size
            'price' => 'required|integer',
        ]);
        $request_data = $request->all();
        // Handle the image upload
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = "product_img_" . time() . '-' . preg_replace('/[^a-zA-Z0-9_.]/', '_', $file->getClientOriginalName());
            $filePath = "$this->image_path . '/' . $filename";
            $file->move(public_path($this->image_path), $filePath);
            //dd($filename);
            $request_data['image'] = $filename;
        }
        


        Product::create($request_data);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.products.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120', // 5MB max size
            'price' => 'required|integer',
        ]);

        $request_data = $request->all();
        $products = Product::findOrFail($id);
        // If a new image is uploaded, delete the old one and upload the new one
        if ($request->hasFile('image')) {
            // Delete the old image from the storage
            
            if(!empty($products->image)){
                @unlink( public_path($this->image_path) . $products->image );
            }
        
            $file = $request->file('image');
            $filename = "product_img_" . time() . '-' . preg_replace('/[^a-zA-Z0-9_.]/', '_', $file->getClientOriginalName());
            $filePath = "$this->image_path . '/' . $filename";
            $file->move(public_path($this->image_path), $filePath);
            //dd($filename);
            $request_data['image'] = $filename;
        }
        
        $products->update($request_data);
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        if(!empty($products->image)){
            @unlink( public_path($this->image_path) . $products->image );
        }
        $products->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
