<?php

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
Route::get('/', function () {
    return view('layout');
});
Route::get('/about', function () {
    return view('pages/about');
});
Route::get('/contacts', function () {
    $data = [
        'city'=>'Москва',
        'street'=>'ул. Большая Семёновская',
        'house'=>'д. 38'
    ];
    return view('pages/contacts',['data'=>$data]);  
});
