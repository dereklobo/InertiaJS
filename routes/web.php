<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return Inertia::render('Home', [
            'initial_credits' => 10,
        ]);
    });

    Route::get('/users', function () {
        
        return Inertia::render('Users/Index', [
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

    Route::get('/users/create', function () {
        return Inertia::render('Users/Create');
    });

    Route::post('/users', function () {

        $attributes = Request::validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        User::create($attributes);

        return redirect('/users');
        // return Inertia::render('Users/Create');
    });

});