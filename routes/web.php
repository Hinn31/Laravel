<?php

use App\Http\Controllers\SumController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignupController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome'); // Trỏ đến file Blade 'welcome.blade.php'
});

Route::get('/',function(){
    return view('signup');
});

Route::post('/calculate', function (Request $request) {
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $result = $num1 + $num2; // Thực hiện phép toán cộng

    return view('welcome', compact('num1', 'num2', 'result'));
})->name('calculate');

Route::get('/welcom', function(){
    return 'Chào mừng các bạn đến với PNV';
});


Route::get('/users', [PostController::class, 'index']);

Route::resource('posts', PostController::class);

Route::get('/signup', [SignupController::class, 'index'])->name('signup.index');
Route::post('/signup', [SignupController::class, 'displayInfor'])->name('signup.store');
