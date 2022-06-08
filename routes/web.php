<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\User\EditUserController;
use App\Http\Controllers\User\UserController;

use App\Http\Controllers\Algorithm\ListAlgorithmController;
use App\Http\Controllers\Algorithm\CreateAlgorithmController;
use App\Http\Controllers\Algorithm\EditAlgorithmController;

use App\Http\Controllers\AlgorithmParameter\ListAlgorithmParameterController;
use App\Http\Controllers\AlgorithmParameter\EditAlgorithmParameterController;
use App\Http\Controllers\AlgorithmParameter\DeleteAlgorithmParameterController;
use App\Http\Controllers\AlgorithmParameter\CreateAlgorithmParameterController;

use App\Http\Controllers\AlgorithmParameterValue\ListAlgorithmParameterValueController;
use App\Http\Controllers\AlgorithmParameterValue\EditAlgorithmParameterValueController;
use App\Http\Controllers\AlgorithmParameterValue\DeleteAlgorithmParameterValueController;
use App\Http\Controllers\AlgorithmParameterValue\CreateAlgorithmParameterValueController;

use App\Http\Controllers\Catalogue\ListCatalogueController;

use App\Http\Controllers\City\ListCityController;
use App\Http\Controllers\City\EditCityController;
use App\Http\Controllers\City\DeleteCityController;
use App\Http\Controllers\City\CreateCityController;

use App\Http\Controllers\Item\ListItemController;

use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index'])->name('index');

Route::prefix('auth')->group(function() {
    Route::get('/login', [LoginController::class, '__invoke'])->name('auth_login');
    Route::get('/register', [RegisterController::class, '__invoke'])->name('auth_reg');
    Route::get('/logout', [LoginController::class, 'logout'])->name('auth_logout_process');
    Route::post('/login/process', [LoginController::class, 'login'])->name('auth_login_process');
    Route::post('/register/process', [RegisterController::class, 'registration'])->name('auth_reg_process');
});

Route::prefix('user')->middleware('auth')->group(function() {
    Route::get('/profile/{user_id}', [UserController::class, '__invoke'])->name('user_profile');
    Route::get('/profile/{user_id}/edit', [EditUserController::class, '__invoke'])->name('user_edit_profile');
    Route::post('/profile/{user_id}/edit/process', [EditUserController::class, 'updateUserData'])->name('user_edit_profile_process');
});


Route::prefix('/algorithm')->group(function() { //->middleware('auth')->group(function() {
    Route::get('/all', [ListAlgorithmController::class, '__invoke'])->name('algorithm_all');
    Route::get('/all_with_parameters', [ListAlgorithmController::class, 'getAllAlgorithmsWithParameters'])->name('algorithm_edit');
    Route::get('/{algorithm_id}/with_parameters', [ListAlgorithmController::class, 'getAlgorithmWithParameters'])->name('algorithm_edit');
    Route::get('/create', [CreateAlgorithmController::class, '__invoke']) ->name('create_algorithm');
    Route::get('/{algorithm_id}/edit', [EditAlgorithmController::class, '__invoke'])->name('algorithm_edit');
    Route::post('/{algorithm_id}/edit', [EditAlgorithmController::class, 'updateAlgorithm'])->name('algorithm_edit');
    Route::get('/{algorithm_id}/del', [DeleteAlgorithmController::class, '__invoke'])->name('algorithm_del');
});

Route::prefix('/algorithm_parameter')->group(function() { //->middleware('auth')->group(function() {
    Route::get('/all', [ListAlgorithmParameterController::class, '__invoke'])->name('algorithm_parameter_all');
    Route::get('/create', [CreateAlgorithmParameterController::class, '__invoke']) ->name('create_algorithm_parameter');
    Route::get('/{algorithm_paramter_id}/edit', [EditAlgorithmParameterController::class, '__invoke'])->name('algorithm_parameter_edit');
    Route::post('/{algorithm_paramter_id}/edit', [EditAlgorithmParameterController::class, 'updateAlgorithmParameter'])->name('algorithm_parameter_edit');
    Route::get('/{algorithm_paramter_id}/del', [DeleteAlgorithmParameterController::class, '__invoke'])->name('algorithm_parameter_del');
});

Route::prefix('/algorithm_parameter_value')->group(function() { //->middleware('auth')->group(function() {
    Route::get('/all', [ListAlgorithmParameterValueController::class, '__invoke'])->name('algorithm_parameter_value_all');
    Route::get('/create', [CreateAlgorithmParameterValueController::class, '__invoke']) ->name('create_parameter_value_algorithm');
    Route::get('/{algorithm_paramter_value_id}/edit', [EditAlgorithmParameterValueController::class, '__invoke'])->name('algorithm_parameter_value_edit');
    Route::post('/{algorithm_paramter_value_id}/edit', [EditAlgorithmParameterValueController::class, 'updateAlgorithmParameterValue'])->name('algorithm_parameter_value_edit');
    Route::get('/{algorithm_paramter_value_id}/del', [DeleteAlgorithmParameterValueController::class, '__invoke'])->name('algorithm_parameter_value_del');
});

/**
 * TODO: think about how to configurate catalogues, or may be parse them again
 */
Route::prefix('/catalogue')->group(function() { //->middleware('auth')->group(function() {
    Route::get('/all', [ListCatalogueController::class, '__invoke'])->name('catalogue_all');
});

Route::prefix('/city')->group(function() { //->middleware('auth')->group(function() {
    Route::get('/all', [ListCityController::class, '__invoke'])->name('city_all');
    Route::get('/create', [CreateCityController::class, '__invoke']) ->name('create_city');
    Route::get('/{city_id}/edit', [EditCityController::class, '__invoke'])->name('city_edit');
    Route::post('/{city_id}/edit', [EditCityController::class, 'updateCity'])->name('city_edit');
    Route::get('/{city_id}/del', [DeleteCityController::class, '__invoke'])->name('city_del');
});

Route::prefix('/item')->group(function() { //->middleware('auth')->group(function() {
    Route::get('/all', [ListItemController::class, '__invoke'])->name('item_all');
});