<?php

use App\Http\Controllers\MasterperkiraanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('perkiraan', 'App\Http\Controllers\MasterPerkiraanController@index');
