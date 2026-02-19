<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes Web
|--------------------------------------------------------------------------
|
| C'est ici que vous pouvez enregistrer les routes web de votre application.
| Ces routes sont chargées par le RouteServiceProvider dans un groupe qui
| contient le groupe de middleware "web". Créez quelque chose de génial !
|
*/

Route::get('/', function () {
    return view('welcome');
});
