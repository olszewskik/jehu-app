<?php

use App\Models\Group;
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
    Route::get('/users', function() {
        return view('users', [
            'heading' => 'Users List',
            'usersList' => User::all()
        ]);
    })->name('users');

    Route::get('/groups', function() {
        return view('groups', [
            'heading' => 'Groups List',
            'groupsList' => Group::all()
        ]);
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

    Route::get('/booking-hours', function() {
        return 'booking hours';
    });

    Route::get('/schedules', function() {
        return 'schedules';
    });
});
