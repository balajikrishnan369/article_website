<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});
Route::get('/home', [ArticleController::class, 'index']);