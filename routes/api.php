<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes API
|--------------------------------------------------------------------------
|
| C'est ici que vous pouvez enregistrer les routes API de votre application.
| Ces routes sont chargées par le RouteServiceProvider dans un groupe qui
| est assigné au groupe de middleware "api". Bonne construction de votre API !
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
