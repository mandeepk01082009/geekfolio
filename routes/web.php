<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Slider;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::group(['namespace' => 'admin','prefix'=>'gogo-admin', 'middleware' => ['auth', 'verified']], function() {
    Route::get('/', function () {
        $image = Slider::all();
        return view('dashboard', compact('image'));
    })->name('dashboard');

    Route::get('category', [App\Http\Controllers\admin\CategoryController::class, 'index'])->name('category');      
    
    Route::post('/createcategories', [App\Http\Controllers\admin\CategoryController::class, 'create'])->name('createcategories');
        
    Route::get('categories', [App\Http\Controllers\admin\CategoryController::class, 'show'])->name('categories');  
    
    Route::get('/editcategories/{id}', [App\Http\Controllers\admin\CategoryController::class, 'edit'])->name('editcategory');    
    
    Route::patch('/updatecategories/{id}',[App\Http\Controllers\admin\CategoryController::class, 'update'])->name('updatecategory'); 
    
    Route::delete('deletecategories/{id}',[App\Http\Controllers\admin\CategoryController::class, 'destroy'])->name('delete_category');

    Route::get('/s', [App\Http\Controllers\admin\SliderController::class, 'index'])->name('addslider'); 

    Route::post('/slider_t', [App\Http\Controllers\admin\SliderController::class, 'create'])->name('sliderstore');

    Route::get('slider', [App\Http\Controllers\admin\SliderController::class, 'show'])->name('slider'); 

    Route::get('/editslider/{id}', [App\Http\Controllers\admin\SliderController::class, 'edit'])->name('editslider');
    
    Route::patch('/updateslider/{id}',[App\Http\Controllers\admin\SliderController::class, 'update'])->name('updateslider'); 

    Route::delete('deleteslider/{id}',[App\Http\Controllers\admin\SliderController::class, 'destroy'])->name('deleteslider');  

    Route::get('event', [App\Http\Controllers\admin\EventController::class, 'index'])->name('event');      
        
    Route::post('/create_event', [App\Http\Controllers\admin\EventController::class, 'create'])->name('create_event');
        
    Route::get('events', [App\Http\Controllers\admin\EventController::class, 'show'])->name('events');  
    
    Route::get('/editevent/{id}', [App\Http\Controllers\admin\EventController::class, 'edit'])->name('editevent');    
    
    Route::patch('/update_event/{id}',[App\Http\Controllers\admin\EventController::class, 'update'])->name('update_event'); 
    
    Route::delete('delete_event/{id}',[App\Http\Controllers\admin\EventController::class, 'destroy'])->name('delete_event');

    Route::get('/a', [App\Http\Controllers\admin\AboutController::class, 'index'])->name('addabout'); 

    Route::post('/aboutstore', [App\Http\Controllers\admin\AboutController::class, 'create'])->name('aboutstore');

    Route::get('aboutus', [App\Http\Controllers\admin\AboutController::class, 'show'])->name('aboutus'); 

    Route::get('/editabout/{id}', [App\Http\Controllers\admin\AboutController::class, 'edit'])->name('editabout');
    
    Route::patch('/updateabout/{id}',[App\Http\Controllers\admin\AboutController::class, 'update'])->name('updateabout'); 

    Route::delete('deleteabout/{id}',[App\Http\Controllers\admin\AboutController::class, 'destroy'])->name('deleteabout'); 
    
    Route::get('/c', [App\Http\Controllers\admin\ClientsController::class, 'index'])->name('addclients'); 

    Route::post('/clients-store', [App\Http\Controllers\admin\ClientsController::class, 'create'])->name('clients-store');

    Route::get('clients', [App\Http\Controllers\admin\ClientsController::class, 'show'])->name('clients'); 

    Route::get('/editclients/{id}', [App\Http\Controllers\admin\ClientsController::class, 'edit'])->name('editclients');
    
    Route::patch('/updateclients/{id}',[App\Http\Controllers\admin\ClientsController::class, 'update'])->name('updateclients'); 

    Route::delete('deleteclients/{id}',[App\Http\Controllers\admin\ClientsController::class, 'destroy'])->name('deleteclients');
    
    Route::get('contact_details', [App\Http\Controllers\admin\ClientsController::class, 'view'])->name('contact_detail'); 

    Route::delete('deletecontact/{id}',[App\Http\Controllers\admin\ClientsController::class, 'delete'])->name('deletecontact');
    
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});     

require __DIR__.'/auth.php';



Route::group(['namespace' => 'web'], function() {

    Route::get('/', [App\Http\Controllers\dark\HomeController::class, 'index'])->name('home'); 
Route::get('/port', [App\Http\Controllers\dark\HomeController::class, 'port'])->name('port'); 
Route::get('contact', [App\Http\Controllers\dark\HomeController::class, 'contact'])->name('contact');
Route::post('/contactus', [App\Http\Controllers\dark\HomeController::class, 'sendEmail'])->name('contactus');
});
