<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\SettingsController;
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



// Route::prefix('manage')->group(function() {
//     Route::controller(GroupController::class)->group(function() {
//         Route::get('/groups','index')->name('group.index')->middleware('language');
//         Route::get('/groups/create','create')->middleware('auth');
//         Route::post('/groups','store');
//         Route::get('/groups/{group}/edit','edit');
//         Route::put('/groups/{group}','update');
//         Route::delete('/groups/{group}','destroy');
//         Route::get('/groups/{group}','show')->name('group');;
//     });
    
//     Route::get('/trolleys', function() {
//         return view('trolleys', [
//             'heading' => 'Trolleys List',
//             'trolleysList' => Trolley::all()
//         ]);
//     });

//     Route::get('/places', function() {
//         return view('places', [
//             'heading' => 'Places List',
//             'placesList' => Place::all()
//         ]);
//     });
    
// });

Route::middleware('auth')->group(function() {
    Route::middleware('language')->group(function() {
        Route::prefix('manage')->group(function() {
            Route::controller(GroupController::class)->group(function() {
                Route::get('/groups','index')->name('group.index');
                Route::get('/groups/create','create')->name('group.create');
                Route::post('/groups','store')->name('group.store');
                Route::get('/groups/{group}/edit','edit')->name('group.edit');
                Route::put('/groups/{group}','update')->name('group.update');
                Route::delete('/groups/{group}','destroy')->name('group.destroy');
                Route::get('/groups/{group}','show')->name('group.show');
            });
        });
        Route::prefix('places')->group(function() {
            Route::controller(PlaceController::class)->group(function() {
                Route::get('/', 'index')->name('places.index');
                Route::get('/create', 'create')->name('places.create');
                Route::post('/', 'store')->name('places.store');
                Route::get('/{place}', 'show')->name('places.show');
                Route::get('/{place}/edit', 'edit')->name('places.edit');
                Route::put('/{place}', 'update')->name('places.update');
                Route::delete('/{place}', 'destroy')->name('places.destroy');
            });
        });
        Route::prefix('settings')->group(function(){
            Route::controller(SettingsController::class)->group(function(){

            });
        });
    });
});



Route::get('/register', [UserController::class, 'create']);
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);