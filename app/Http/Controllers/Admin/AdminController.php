<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $viewData=[];
        $viewData["title"]="Admin Page-Admin-AfrikFood";
        return view('admin.home.index')->with("viewData", $viewData);
    }
}
