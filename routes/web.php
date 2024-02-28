<?php
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect(RouteServiceProvider::HOME);
        // return view('admin');
    })->name('dashboard');
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('/redirect', [AdminController::class, 'admin'])->name('admin');
// });

//for login and register
Route::get('/index',function(){
    return view('frontend.index');
});

// this one below is for the redirecting to the respective user depending upon the email
Route::get('/redirect',[AdminController::class,'redirect']);


                     //start of admin side
// route for catergory
Route::get('/view_category',[AdminController::class,'view_category']);

Route::post('/add_category',[AdminController::class,'add_category']);

Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
// end for category route



// common route for all pet products(crud)
Route::post('/add_product',[ProductController::class,'add_product']);

Route::get('/delete_product/{product_id}',[ProductController::class,'delete_product']);

Route::get('/update_product/{product_id}',[ProductController::class,'update_product']);

Route::post('/update_product_confirm/{product_id}',[ProductController::class,'update_product_confirm']);

//end of crud


// route for dog products
Route::get('/view_dog',[AdminController::class,'view_dog']);

Route::get('/show_dogproduct',[ProductController::class,'show_dogproduct']);

//end of routing for dog products


// start of route for cat products
Route::get('/view_cat',[AdminController::class,'view_cat']);

Route::get('/show_catproduct',[ProductController::class,'show_catproduct']);

// end of routing for cat products


//start of route of aquarium products
Route::get('/view_aquarium',[AdminController::class,'view_aquarium']);

Route::get('/show_aquariumproduct',[ProductController::class,'show_aquariumproduct']);

// end of routing for aquarium products

//start of route of bird products
Route::get('/view_bird',[AdminController::class,'view_bird']);

Route::get('/show_birdproduct',[ProductController::class,'show_birdproduct']);

// end of routing for bird products
                    
                       //end of admin side

                       // user side

// for select product
Route::get('/dog',[HomeController::class,'redirectdog']);

Route::get('/cat',[HomeController::class,'redirectcat']);

Route::get('/aquarium',[HomeController::class,'redirectaquarium']);

Route::get('/bird',[HomeController::class,'redirectbird']);

// end for select product

// for product detail
Route::get('/product_details/{product_id}',[ProductController::class,'product_detail']);

// end of product detail

// for add to cart
Route::post('/add_cart/{product_id}',[HomeController::class,'add_cart']);