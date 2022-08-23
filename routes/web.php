<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/cv/addlisting', [ListingController::class, 'create']);

Route::post('/cv/storelisting', [ListingController::class, 'store']);

Route::get('/cv/{id}/delete', [ListingController::class, 'delete']);

Route::get('/cv/{cvid}/edit/exp/{id}', [ExperienceController::class, 'edit']);

Route::get('/cv/{cvid}/edit/academy/{id}', [AcademiaController::class, 'edit']);

Route::get('/cv/{cvid}/edit/achievment/{id}', [AccomplishmentController::class, 'edit']);

Route::get('/cv/{id}/edit_info', [ListingController::class, 'edit_info']);

Route::get('/cv/{id}/edit', [ListingController::class, 'edit']);

Route::get('/cv/{id}', [ListingController::class, 'show']);

Route::get('/', [ListingController::class, 'index']);