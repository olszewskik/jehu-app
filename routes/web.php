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

Route::prefix('settings')->group(function() {
    Route::get('/users', function() {
        return view('users', [
            'heading' => 'Users List',
            'usersList' => [
                [
                    'id' => 1,
                    'name' => 'Kamil Olszewski'
                ],
                [
                    'id' => 2,
                    'name' => 'Karolina Olszewska'
                ]
            ]
        ]);
    })->name('users');

    Route::get('/groups', function() {
        return view('groups', [
            'heading' => 'Groups List',
            'groupsList' => [
                [
                    'id' => 1,
                    'name' => 'Group no. 1'
                ],
                [
                    'id' => 2,
                    'name' => 'Group no. 2'
                ],
                [
                    'id' => 3,
                    'name' => 'Group no. 3'
                ],
                [
                    'id' => 4,
                    'name' => 'Group no. 4'
                ]
            ]
        ]);
    });

    Route::get('/trolleys', function() {
        return view('trolleys', [
            'heading' => 'Trolleys List',
            'trolleysList' => [
                [
                    'id' => 1,
                    'name' => 'Trolley no. 1'
                ],
                [
                    'id' => 2,
                    'name' => 'Trolley no. 2'
                ],
                [
                    'id' => 3,
                    'name' => 'Trolley no. 3'
                ]
            ]
        ]);
    });

    Route::get('/places', function() {
        return view('places', [
            'heading' => 'Places List',
            'placesList' => [
                [
                    'id' => 1,
                    'name' => 'Jancarz'
                ],
                [
                    'id' => 2,
                    'name' => 'Park Mickiewicza'
                ],
                [
                    'id' => 3,
                    'name' => 'Park 111'
                ],
                [
                    'id' => 4,
                    'name' => 'Fontanna'
                ],
                [
                    'id' => 5,
                    'name' => 'Bulwar'
                ]
            ]
        ]);
    });

    Route::get('/booking-hours', function() {
        return 'booking hours';
    });

    Route::get('/schedules', function() {
        return 'schedules';
    });
});
