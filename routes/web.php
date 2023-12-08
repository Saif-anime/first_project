<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_Registers;
use App\Http\Controllers\Product_Controller;

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
 


// get route here 
Route::get('/', [Product_Controller::class, 'home']);
Route::get('/product', [Product_Controller::class, 'product']);

Route::get('/login', [User_Registers::class, 'login']);
// Route::get('/sign', [User_Registers::class, 'sign']);
Route::get('/login/google', [User_Registers::class, 'Redirect_to_Google']);
Route::get('/login/google/callback', [User_Registers::class, 'HandleRequest']);

Route::get('/login/facebook', [User_Registers::class, 'Redirect_to_Facebook']);
Route::get('/login/facebook/callback', [User_Registers::class, 'HandleRequest_Facebook']);

Route::get('/sign', [User_Registers::class, 'data_upload']);

Route::post('/login', [User_Registers::class, 'login_do']);