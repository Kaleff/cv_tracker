<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\AcademiaController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\AccomplishmentController;

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

// Add entries

Route::get('/cv/{cvid}/add/exp/', [ExperienceController::class, 'create']);

Route::get('/cv/{cvid}/add/academy/', [AcademiaController::class, 'create']);

Route::get('/cv/{cvid}/add/achievment', [AccomplishmentController::class, 'create']);

// Edit entries

Route::get('/cv/{cvid}/edit/exp/{id}', [ExperienceController::class, 'edit']);

Route::get('/cv/{cvid}/edit/academy/{id}', [AcademiaController::class, 'edit']);

Route::get('/cv/{cvid}/edit/achievment/{id}', [AccomplishmentController::class, 'edit']);

// Store entries

Route::post('/store/exp', [ExperienceController::class, 'store']);

Route::post('/store/academy/', [AcademiaController::class, 'store']);

Route::post('/store/achievment', [AccomplishmentController::class, 'store']);

// Update entries

// Delete entries

Route::get('/cv/{cvid}/delete/exp/{id}', [ExperienceController::class, 'delete']);

Route::get('/cv/{cvid}/delete/academy/{id}', [AcademiaController::class, 'delete']);

Route::get('/cv/{cvid}/delete/achievment/{id}', [AccomplishmentController::class, 'delete']);

// Listing CRUD operations

Route::get('/cv/{id}/edit_info', [ListingController::class, 'edit_info']);

Route::post('/cv/updatelisting', [ListingController::class, 'update']);

Route::post('/cv/storelisting', [ListingController::class, 'store']);

Route::get('/cv/{id}/delete', [ListingController::class, 'delete']);

Route::get('/cv/addlisting', [ListingController::class, 'create']);

// Listing Info display

Route::get('/cv/{id}/edit', [ListingController::class, 'edit']);

Route::get('/cv/{id}', [ListingController::class, 'show']);

Route::get('/', [ListingController::class, 'index']);
