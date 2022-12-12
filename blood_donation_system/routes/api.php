<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DonorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/donor', [DonorController::class, 'view_donor']);
Route::get('/donor/{id}', [DonorController::class, 'view_single_donor']);
// Route::get('/donor', [donorControllerler::class, 'view_donor']);
// Route::get('',[]);
