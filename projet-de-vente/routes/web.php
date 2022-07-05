<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
Route::middleware('auth')->group(function(){
    Route::resource('/users', UserController::class);
    Route::get('/users/status/{user_id}/{status_code}',[UserController::class,'updatestatus'])->name('users.status.update');
   
Route::resource('/services', ServiceController::class);
Route::resource('/products', ProductController::class);

Route::resource('/commande', CommandeController::class); });
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('redirects','App\Http\Controllers\HomeController@index');

Route::get('/alarmes', 'App\Http\Controllers\ProductsController@product')->name('alarmes');
Route::get('/videossurvaillances', 'App\Http\Controllers\ProductsController@cam')->name('cameras');
Route::get('/informatiques', 'App\Http\Controllers\ProductsController@index')->name('accessoires');
Route::get('/listeservices', 'App\Http\Controllers\ServicesController@service')->name('listeservices');
Route::post('login', [ 'as' => 'login', 'uses' => 'App\Http\Controllers\HomeController@index']);
Route::post('register', [ 'as' => 'register', 'uses' => 'App\Http\Controllers\HomeController@index']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/panier','App\Http\Controllers\CartController@index')->name('cart.index');
Route::post('/panier/ajouter','App\Http\Controllers\CartController@store')->name('cart.store');
Route::get('/panier/{rowId}', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy');

Route::post('update-cart', [CartController::class, 'update'])->name('cart.update');




Route::get('/forgot-password', function () {
    return view('auth.reset');
})->middleware('guest')->name('password.request');
  
 

    // Commandes
   
        Route::get('/paiement', 'App\Http\Controllers\CheckoutController@index')->name('checkout.index');
        Route::post('/paiement', 'App\Http\Controllers\CheckoutController@store')->name('checkout.store');
        Route::get('/merci', 'App\Http\Controllers\CheckoutController@thankyou')->name('checkout.thankYou');

        Route::get('/contact-us', 'App\Http\Controllers\ContactController@contact')->name('contact');

        Route::post('/send-message', [App\Http\Controllers\ContactController::class,'sendEmail'])->name('contact.us');
      
        
       
        
       
        Route::get('pdf-generate/{order}','App\Http\Controllers\CheckoutController@store')->name('commande.pdf');
        Route::get('pdf-generate/{order}','App\Http\Controllers\ProductsController@facture')->name('commande.pdf');
 