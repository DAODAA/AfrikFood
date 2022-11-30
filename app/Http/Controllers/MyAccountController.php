<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class MyAccountController extends Controller
{
    public function orders()
    {
        $viewData=[];
        $viewData["title"]="My Orders-AfrikFood";
        $viewData["subtitle"]="My Orders";

        // Here is lazy loading
        // $viewData["orders"]=Order::where('user_id', Auth::user()->getId())->get();

        /*here is the eager loading that specifies whitch reltionships should eager loaded using the 'with' method
          In this case we load the ORDERS with their correspponding ITEMS and the PRODUCTS of the related ITEMS.
        */
        $viewData["orders"]=Order::with(['items.product'])->where('user_id', Auth::user()->getId())->get();
        return view('myaccount.orders')->with("viewData", $viewData);
    }
}