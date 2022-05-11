<?php

use App\Models\User;
use Inertia\Inertia;
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
    return Inertia::render('Home', [
        'name' => 'John Doe',
        'initial_credits' => 10,
    ]);
});

Route::get('/users', function () {
    
    return Inertia::render('Users', [
        'users' => User::query()
        ->when(Request::input('search'), function($query, $search){
            $query->where('name', 'like', '%'.$search.'%');
        })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name,
            ]),
            'filters' => [
                'search' => Request::only(['search']),
            ],
        'initial_credits' => 10,  
        'time' => now()->toTimeString(),
    ]);
});

Route::post('/logout', function () {
    dd('logging the user out');
});