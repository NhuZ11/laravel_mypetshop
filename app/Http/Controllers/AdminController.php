<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Category;

class AdminController extends Controller
{
    public function redirect(){
      $usermail=Auth::user()->email;
      if($usermail=='admin@gmail.com'){
        return view('admin');
        

      }
      else{
        return view('frontend.index');
        
      }

    }

    // This below is for view category
    public function view_category(){
      $data=Category::all();
      return view('admin.category',compact('data'));
    }


    //This code is for adding category
    public function add_category(Request $request){
      $data = new Category;
      $data->	Category_name=$request->category_name;
      $data->save();
      return redirect()->back()->with('message','Category Added Successfully');


    }

    //this code is for delete category
    public function delete_category($id){
      $data=category::find($id);
      $data->delete();
      return redirect()->back()->with('message','Category Deleted Successfully');

    }



    //this code is for view dog products
    public function view_dog(){
      $data=Category::all();
      return view('admin.dog',compact('data'));
    }

    //this code is for view cat products
    public function view_cat(){
      $data=Category::all();
      return view('admin.cat',compact('data'));
    }

     //this code is for view aquarium products
     public function view_aquarium(){
      $data=Category::all();
      return view('admin.aquarium',compact('data'));
    }

    
     //this code is for view bird products
     public function view_bird(){
      $data=Category::all();
      return view('admin.bird',compact('data'));
    }
}
