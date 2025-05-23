<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

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

