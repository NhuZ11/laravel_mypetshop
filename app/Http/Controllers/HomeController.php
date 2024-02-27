<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        
        return view('frontend.index');
    }


    public function redirectdog(){
        $product=Product::paginate(12);
        return view('home.userdog',compact('product'));
    }

    public function redirectcat(){
        $product=Product::paginate(12);
        return view('home.usercat',compact('product'));
    }

    public function redirectaquarium(){
        $product=Product::paginate(12);
        return view('home.useraquarium',compact('product'));
    }

    public function redirectbird(){
        $product=Product::paginate(12);
        return view('home.userbird',compact('product'));
    }


}

