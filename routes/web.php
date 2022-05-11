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
        'users' => User::paginate(10),
        
        // ->map(fn($user) => [
        //         'id' => $user->id,
        //         'name' => $user->name,
        //     ]),
        'initial_credits' => 10,  
        'time' => now()->toTimeString(),
    ]);
});

Route::post('/logout', function () {
    dd('logging the user out');
});