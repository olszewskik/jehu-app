<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
use App\Models\Place;
use App\Models\Trolley;
use App\Models\User;
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



Route::prefix('manage')->group(function() {
    Route::controller(GroupController::class)->group(function(){
        Route::get('/groups','index');
        Route::get('/groups/create','create')->middleware('auth');
        Route::post('/groups','store');
        Route::get('/groups/{group}/edit','edit');
        Route::put('/groups/{group}','update');
        Route::delete('/groups/{group}','destroy');
        Route::get('/groups/{group}','show')->name('group');;
    });
    
    Route::get('/trolleys', function() {
        return view('trolleys', [
            'heading' => 'Trolleys List',
            'trolleysList' => Trolley::all()
        ]);
    });

    Route::get('/places', function() {
        return view('places', [
            'heading' => 'Places List',
            'placesList' => Place::all()
        ]);
    });
    
});

Route::get('/register', [UserController::class, 'create']);
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);