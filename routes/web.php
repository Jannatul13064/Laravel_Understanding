<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');

Route::get('/home', 'HomeController@index');

Route::get('/home/{userid}/{age}', 'HomeController@show');


///CRUD for Products
Route::get('/insert', 'HomeController@insertOperation');
Route::get('/read', 'HomeController@readOperation');
Route::get('/update', 'HomeController@updateOperation');
Route::get('/delete', 'HomeController@deleteOperation');


///CRUD for Users
Route::get('/userInfo', 'HomeController@createUser');
Route::get('/updatedUser', 'HomeController@updateUser');
Route::get('/showUser', 'HomeController@readUser');
Route::get('/deleteUser', 'HomeController@deleteUser');

// Route::get('/home/{userid}/{age}', function ($userid,$age) {
//     $username = request('username');
//     $items = array('A', 'B', 'C', 'D', 'Egg');
//     return view('home', ['products' => $items,'username'=>$username, 'userid'=>$userid, 'age'=>$age]);
// });

Route::get('/about', function () {
    return view('/about', ['information' => 'Your Info']);
});

Route::get('/customform', function () {
    return view('customform');
});
Route::post('/form-submit', function () {
    dd(request()->all());
});
