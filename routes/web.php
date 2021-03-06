<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\OrganisationController;
use App\Http\Controllers\Web\OfficeController;
use App\Http\Controllers\Web\RoomController;
use App\Http\Controllers\Web\DeskController;
use App\Http\Controllers\Web\ContentsController;
use App\Http\Controllers\Web\RoleController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\PermissionController;

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


Route::group(['middleware' => ['auth']], function() {
    // USER/ROLE
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    // Route::resource('permissions', PermissionController::class);

    // HOME PAGE
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::put('/profile/{id}', [ProfileController::class, 'update']);
    Route::post('/profile/{id}/upload-image', [ProfileController::class, 'uploadProfileImage']);
    Route::post('/profile/{id}/password-reset', [ProfileController::class, 'resetPasswordWithoutToken'])->name('profile.password-reset');

    // ORGANISATION
    Route::resource('/organisation', OrganisationController::class);
    Route::post('/organisation/{organisation}/upload-logo', [OrganisationController::class, 'uploadLogoImage']);

    // Offices
    Route::resource('/offices', OfficeController::class);

    // Rooms
    Route::resource('/rooms', RoomController::class);
    Route::get('/rooms/{office}', [RoomController::class, 'create']);
    Route::get('/rooms/{room}/book/', [RoomController::class, 'book']);

    // Desks
    Route::resource('/desks', DeskController::class);
    Route::get('/desks/{room}', [DeskController::class, 'create']);

    // Contents
    Route::resource('/contents', ContentsController::class);
});


require __DIR__.'/auth.php';
