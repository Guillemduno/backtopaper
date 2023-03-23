<?php

use App\Http\Controllers\RandomController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Nette\Utils\Random;
use Symfony\Component\Routing\Router;
use App\Http\Controllers\CharactherController;
use App\Models\Characther;

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
    return view('welcome');
});

Route::get('/random',[RandomController::class, 'generateText'])
->name('random.index');

Route::get('/characthers', [CharactherController::class, 'index'])
->name('characther.index');

Route::get('/characther/edit/{id}', [CharactherController::class, 'edit'])
->name('characther.edit');

Route::post('/characther/store/{id}', [CharactherController::class, 'store'])
->name('characther.store');
