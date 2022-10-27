<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductConroller extends Controller
{
    // public static $products=[
    // ["id"=>"1","name"=>"Beignets","description"=>"Du beignet mais bien sucré au poulet","image"=>"beignets.jpg","price"=>"500"],
    // ["id"=>"2","name"=>"Bouillon pattes chèvres","description"=>"Du délicieux bouillon aux pattes de chèvres","image"=>"bouillon_pattes_chèvres.jpg","price"=>"1000"],
    // ["id"=>"3","name"=>"Bouillons","description"=>"Du bon bouillon plein de viqndes qux pi,ents","image"=>"bouillons.jpg","price"=>"1500"],
    // ["id"=>"4","name"=>"Frites de Chenilles","description"=>"Des chenilles pleines de proteines","image"=>"chenilles.jpg","price"=>"500"],
    // ["id"=>"5","name"=>"Frites de plantains","description"=>"Plantains bien sucrés","image"=>"plantains.jpg","price"=>"700"],
    // ["id"=>"6","name"=>"Kokki","description"=>"Du bon Koki cuit à point","image"=>"kokki.jpg","price"=>"1000"],
    // ["id"=>"7","name"=>"Mais grillé","description"=>"Du bon mais grillé","image"=>"mais.jpg","price"=>"300"],
    // ["id"=>"8","name"=>"Oeufs bouillis","description"=>"Des oeufs du village, très bon","image"=>"oeufs.jpg","price"=>"500"],
    // ["id"=>"9","name"=>"Soya de boeuf","description"=>"Du bon Soya cuit à point","image"=>"soya_boeuf.jpg","price"=>"1500"],
    // ["id"=>"10","name"=>"Plantain haricot","description"=>"Du bon haricot et du plantain mûr","image"=>"plantain_haricots.jpg","price"=>"6000"],
    // ];

    public function index()
    {
        $viewData=[];
        $viewData['title']="Products-AfrikFood";
        $viewData['subtitle']="Foods";
        // $viewData['products']=ProductConroller::$products;
        $viewData['products']=Product::all();
        return view('product.index')->with("viewData", $viewData);
    }


    public function show($id)
    {
        $viewData=[];
        $product=Product::findOrFail($id);
        // $product=ProductConroller::$products[$id-1];
        // $viewData['title']=$product["name"]."-AfrikFood";
        $viewData['title']=$product->getName()."-AfrikFood";
        $viewData['subtitle']=$product->getName()."-Product information";
        $viewData['product']=$product;
        return view('product.show')->with("viewData", $viewData);
    }
}