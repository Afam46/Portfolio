<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Skill;
use App\Models\Project;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/skills', function(){
    return Skill::all();
});

Route::get('/projects', function(){
    return Project::all();
});