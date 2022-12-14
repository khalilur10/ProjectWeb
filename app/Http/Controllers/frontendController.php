<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\computer;

class frontendController extends Controller
{
    public function index(){

        $categories = Category::where('category_status',1)->get();
        $computers = computer::where('computer_status',1)->get();
        return view('FrontEnd.content.home', compact('categories','computers'));
    }
}