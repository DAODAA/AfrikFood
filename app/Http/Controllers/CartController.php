<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $total=0;
        $productsInCart=[];

        $productsInSession=$request->session()->get("products");

        if ($productsInSession) {
            $productsInCart=Product::findMany(array_keys($productsInSession));
            $total=Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }

        $viewData=[];
        $viewData['title']="Cart-AfrikFood";
        $viewData['subtitle']="Shopping Cart";
        $viewData['total']=$total;
        $viewData['products']=$productsInCart;
        return view('cart.index')->with('viewData', $viewData);
    }

    public function add(Request $request, $id)
    {
        $products = $request->session()->get("products");
        $products[$id]=$request->input('quantity');
        $request->session()->put('products', $products);

        return redirect()->route('cartHome');
    }

    public function delete(Request $request)
    {
        $request->session()->forget('products');
        return back();
    }
}
