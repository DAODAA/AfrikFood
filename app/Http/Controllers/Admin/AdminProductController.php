<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData=[];
        $viewData["title"]="Admin Page-Products-AfrikFood";
        $viewData['products']=Product::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
        "name"=>"required|max:250",
        "description"=>"required",
        "price"=>"required|numeric|gt:0",
        "image"=>"image"
        ]);

        $newProduct= new Product();
        $newProduct->setName($request->input('name'));
        $newProduct->setDescription($request->input('description'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setImage('peanuts.jpg');
        $newProduct->save();

        if ($request->hasFile('image')) {
            $imageName=$newProduct->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );

            $newProduct->setImage($imageName);
            $newProduct->save();
        }
        return back();
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData=[];
        $viewData['title']="Admin Page-Edit Product-AfrikFood";
        $viewData['product']=Product::findOrFail($id);
        return view('admin.product.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name"=>"required|max:255",
            "description"=>"required",
            "price"=>'required|numeric|gt:0',
            "image"=>"image"
        ]);

        $product=Product::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setDescription($request->input('description'));
        $product->setPrice($request->input('price'));

        if ($request->hasFile('image')) {
            $imageName=$product->getId().'.'.$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product->setImage($imageName);
        }
        $product->save();
        return redirect()->route('adminProductPage');
    }
}
