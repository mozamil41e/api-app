<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Faker\Factory as Faker;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('users', function () {
    return Inertia::render('Users');
})->middleware(['auth', 'verified'])->name('users');


Route::get('/post/{pos}', function ($pos) {
    $faker = Faker::create();
    $posts = [];
    for ($i=0; $i < $pos ; $i++) { 
        array_push($posts,[
            "name" => $faker->name ,
            "desc" => $faker->text,
            "date" => $faker->date
        ]);
    }
    return response()->json($posts);
});


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
