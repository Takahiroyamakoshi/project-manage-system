<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\MyPageController;
use App\Http\Controllers\Users\ProfileController;
use App\Http\Controllers\Users\ProjectController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user/profile', [ProfileController::class, 'index'])->name('user.profile');

Route::post('/user/profile/update', [ProfileController::class, 'update'])->name('user.profile.update');

// Route::get('/user/mypage', ProjectController::class, 'index' )->name('mypage.index');
// Route::get('/user/projects/{id}', ProjectController::class, 'show')->name('projects.show');

Route::get('/user/mypage', [MyPageController::class, 'index'])->name('user.mypage');

Route::get('/user/projects/{id}', [ProjectController::class, 'show'])->name('user.project.show');