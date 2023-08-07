<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
        'username' => 'john.doe',
    ]);
});
Route::get('users', function () {
    return Inertia::render('Users/Index', [
        'users' => User::query()
            ->when(request()->get('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(5)
            ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name
            ]),
        'filters' => request()->only(['search'])
    ]);
});
Route::get('users/create', function () {
    return Inertia::render('Users/Create');
});

Route::post('/users', function () {
    $attributes = request()->validate([
        'name' => 'required',
        'email' => ['required', 'email'],
        'password' => 'required',
    ]);

    User::create($attributes);

    return redirect('/users');
});

Route::get('settings', function () {
    return Inertia::render('Settings');
});