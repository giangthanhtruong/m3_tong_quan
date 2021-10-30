<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',function (){
    return view("login");
});

Route::post('/login',function (\Illuminate\Http\Request $request){
    $username = $request->username;
    $password = $request->password;
    if ($username == 'admin' & $password == '123456'){
        return redirect('welcome');
    }else{
        return redirect('login');
    }

});
