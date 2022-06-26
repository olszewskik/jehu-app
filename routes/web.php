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

Route::prefix('settings')->group(function() {
    Route::get('/users', [UserController::class, 'index']);

    Route::get('/groups', [GroupController::class, 'index']);
    Route::get('/groups/create', [GroupController::class, 'create'])->middleware('auth');
    Route::post('/groups', [GroupController::class, 'store']);
    Route::get('/groups/{group}/edit', [GroupController::class, 'edit']);
    Route::put('/groups/{group}', [GroupController::class, 'update']);
    Route::delete('/groups/{group}', [GroupController::class, 'destroy']);
    Route::get('/groups/{group}', [GroupController::class, 'show']);

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

    Route::get('/booking-hours', function() {
        return 'booking hours';
    });

    Route::get('/schedules', function() {
        return 'schedules';
    });

    
});

Route::get('/register', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);