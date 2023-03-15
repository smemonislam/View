<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\View;

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


// Route::get( '/hello', function(){
//     return view('hello');
// } );

Route::get( '/hello', function(){
    # Passing Data To Views
    # 1. Array
    # 2. compact
    # 3. view (Chaining)

    # Data passing with array
    //return View::make('hello', ['fname'=> 'Emon', 'lname' => 'Islam', 'age' => 28]);

    # Data passing with compact
    // $data = [
    //     'fname' => 'Emon', 
    //     'lname' => 'Islam', 
    //     'age'   => 28
    // ];
    // return View::make('hello', compact('data'));

    # Data passing with view (chaining method)
    return View::make('hello')->with('status', 'successfully Data passing with view');
} );


# Sharing Data With All Views
Route::get( '/', [UserController::class, 'show']);
Route::get( '/user', [UserController::class, 'index']);

