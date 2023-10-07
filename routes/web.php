<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['namespace' => 'category'], function() {

    Route::get('category', [App\Http\Controllers\admin\CategoryController::class, 'index'])->name('category');      
    
    Route::post('/createcategories', [App\Http\Controllers\admin\CategoryController::class, 'create'])->name('createcategories');
        
    Route::get('categories', [App\Http\Controllers\admin\CategoryController::class, 'show'])->name('categories');  
    
    Route::get('/editcategories/{id}', [App\Http\Controllers\admin\CategoryController::class, 'edit'])->name('editcategories');    
    
    Route::patch('/updatecategories/{id}',[App\Http\Controllers\admin\CategoryController::class, 'update'])->name('updatecategories'); 
    
    Route::get('deletecategories/{id}',[App\Http\Controllers\admin\CategoryController::class, 'destroy']);
    
    });

    Route::group(['namespace' => 'event'], function() {

        Route::get('event', [App\Http\Controllers\admin\EventController::class, 'index'])->name('event');      
        
        Route::post('/create_event', [App\Http\Controllers\admin\EventController::class, 'create'])->name('create_event');
            
        Route::get('events', [App\Http\Controllers\admin\EventController::class, 'show'])->name('events');  
        
        Route::get('/editevent/{id}', [App\Http\Controllers\admin\EventController::class, 'edit'])->name('editevent');    
        
        Route::patch('/update_event/{id}',[App\Http\Controllers\admin\EventController::class, 'update'])->name('update_event'); 
        
        Route::get('delete_event/{id}',[App\Http\Controllers\admin\EventController::class, 'destroy']);
        
        });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});     

require __DIR__.'/auth.php';



Route::group(['namespace' => 'web'], function() {

    Route::get('/', [App\Http\Controllers\dark\HomeController::class, 'index'])->name('home-main'); 
Route::get('/home-creative', [App\Http\Controllers\dark\HomeController::class, 'creative'])->name('home-creative'); 
});
