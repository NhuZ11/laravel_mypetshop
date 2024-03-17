<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\cart;
use App\Models\Order;
use App\Models\payment; 

//for payment
require '../vendor/autoload.php';
use Cixware\Esewa\Client;
use Cixware\Esewa\Config;


class HomeController extends Controller
{
    public function index(){
        
        return view('frontend.index');
    }


    //for contact us
    public function contactus(){
        return view('frontend.contact');
    }

    //for about us
    public function aboutus(){
        return view('frontend.aboutus');
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

    public function show_cart(){
        if (Auth::id()){
        $id=Auth::user()->id;

        $cart=cart::where('user_id','=',$id)->get();
        return view('home.showcart',compact('cart'));
        }
        else{
            return redirect('login');
        }
    }


    public function remove_cart($cart_id){
        $cart=cart::where('cart_id', $cart_id);
        $cart->delete();
        return redirect()->back();

    }


    public function order_product($cart_id){
        $cart=cart::where('cart_id', $cart_id)->get();
        $orderid = null; 
        foreach($cart as $carts)
        {
            $order= new Order;
            $order->name=$carts->name;
            $order->email=$carts->email;
            $order->phone=$carts->phone;
            $order->address=$carts->address;
            $order->user_id=$carts->user_id;
            $order->product_name=$carts->product_name;
            $order->price=$carts->price;
            $order->quantity=$carts->quantity;
            $order->image=$carts->image;
            $order->product_id=$carts->product_id;
            $order->payment_status="....";
            $order->delivery_status="processing";
            $order->save();

            $orderid=$order->id;

            //deleting from cart after getting specific order
            $cartid=$carts->cart_id;
            $cart=cart::where('cart_id', $cartid);
            $cart->delete();



        }
        

         $orders=order::where('order_id', $orderid)->get();

        return view('home.order',compact('orders'));
    }

    //for eseswa payment
    public function esewa(Request $request){
        $pid=uniqid();
        $amount=$request->price;

        payment::insert([
            'order_id'=> $request->order_id,
            'name'=> $request->name,
            'email'=> $request->email,
            'user_id'=> $request->user_id,
            'product_name'=> $request->prouctname,
            'price'=> $request->price,
            'payment_status'=> 'unverified',



        ]);
       
       $successUrl = url('/success');
       $failureUrl = url('/failure');

       // Config for development.
       $config = new Config($successUrl, $failureUrl);

      // Config for production.
       $config = new Config($successUrl, $failureUrl, 'b4e...e8c753...2c6e8b');

       // Initialize eSewa client.
       $esewa = new Client($config);

       //this method accepts five parameters for payment
    //    $esewa->process($pid, $amount, 0, 0, 0);
    $esewa->process('P101W201', 100, 15, 0, 0);
     
     }

     //for payment success
     public function PaySuccess(){
           echo"success";
     }
    // for payment failure
    public function PayFailure(){
        echo"failure";
    }
}

