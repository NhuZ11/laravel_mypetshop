<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function add_product(Request $request){
        $data = new Product;
        $data->product_name=$request->product_name;
        $data->description= $request->description;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->discount=$request->discount;
        $data->Category_name=$request->Category_name;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $data->image=$imagename;
        $data->pet_type=$request->pet_type;
        $data->save();
        return redirect()->back()->with('message','Product Added Successfully');
  
  
      }
      public function delete_product($product_id){
        $product = Product::where('product_id', $product_id);
        $product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');

      }

      public function update_product($product_id){
        $product = Product::find($product_id);
        $data=Category::all();
      
        return view('admin.update_product',compact('product'),compact('data'));

      }

      public function update_product_confirm(Request $request,$product_id){
        $product = Product::find($product_id);
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount = $request->discount;
        $product->Category_name = $request->Category_name;
        $image = $request->image;
        if($image){
          $imagename=time().'.'.$image->getClientOriginalExtension();
          $request->image->move('product',$imagename);
         $product->image=$imagename;
        }
        $product->save();
        return redirect()->back()->with('message','Product Updated Successfully');

      }

      // start for dog products
      public function show_dogproduct(){
        $product=Product::all();
        return view('admin.dogproduct',compact('product'));
      }

      //end for dog products

      //start for cat products
      
      public function show_catproduct(){
        $product=Product::all();
        return view('admin.catproduct',compact('product'));
      } 

      // end for cat products

      //start for cat products
      
      public function show_aquariumproduct(){
        $product=Product::all();
        return view('admin.aquariumproduct',compact('product'));
      } 

      // end for cat products

      //start for cat products
      
      public function show_birdproduct(){
        $product=Product::all();
        return view('admin.birdproduct',compact('product'));
      } 

      // end for cat products


      // for product detail for the user side
      public function product_detail($product_id){
        $product = Product::find($product_id);
        return view('home.product_details',compact('product'));
      }
      // end of product details

}
