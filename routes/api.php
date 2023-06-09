<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/home', [ApiController::class, 'home']);
Route::get('/about', [ApiController::class, 'about']);
Route::get('/projects', [ApiController::class, 'project']);
Route::get('/skill', [ApiController::class, 'skill']);
Route::get('/contact', [ApiController::class, 'contact']);
