<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData=[];
        $viewData["title"]="Home Page-AfrikFood";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData=[];
        $viewData["title"]="About us Page-AfrikFood";
        $viewData["subtitle"]="About us";
        $viewData["description"]="This is an about page...";
        $viewData["author"]="Developped by: DAODA ALBERT";
        return view('home.about')->with('viewData', $viewData);
    }
}
