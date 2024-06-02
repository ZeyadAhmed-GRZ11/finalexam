<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CompanyController::class, 'welcome']);
Route::get('show', [CompanyController::class, 'show']);
Route::get('users/create', [CompanyController::class, 'create']);
Route::post('users/create', [CompanyController::class, 'add']);
Route::get('show/{id}/edit', [CompanyController::class, 'edit']);
Route::put('show/{id}/edit', [CompanyController::class, 'update']);
Route::get('show/{id}/delete', [CompanyController::class, 'delete']);