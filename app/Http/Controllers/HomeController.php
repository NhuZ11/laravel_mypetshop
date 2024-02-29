<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\cart;

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


    public function add_cart(Request $request, $product_id){
         if (Auth::id()) {
            $user=Auth::User();
            $product=product::find($product_id);
            $cart= new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            // $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->product_name=$product->product_name;
            if($product->discount!=null){
                $cart->price=$product->discount*$request->quantity;

            }
            else{
                $cart->price=$product->price*$request->quantity;
            }
            
            $cart->image=$product->image;
            $cart->product_id=$product->product_id;
            $cart->quantity=$request->quantity;
            $cart->save();
            return redirect()->back();
         }
         else
         {
            return redirect('login');
         }

    }


}

