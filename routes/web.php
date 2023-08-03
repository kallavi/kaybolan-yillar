<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix(env('ADMIN_PREFIX'))->group(function () {
    Route::get('/login', [\App\Http\Controllers\Backoffice\LoginController::class, 'index'])->name('login.view');
    Route::post('/login', [\App\Http\Controllers\Backoffice\LoginController::class, 'login'])->name('login.auth');
    Route::get('/dashboard', [\App\Http\Controllers\Backoffice\DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/logout', [\App\Http\Controllers\Backoffice\LoginController::class, 'logout'])->name('backoffice.logout');

    Route::resource(
        'project',
        \App\Http\Controllers\Backoffice\ProjectController::class,
        [
            'names' => [
                'edit' => 'admin.project.edit',
                'index' => 'admin.project.index',
                'create' => 'admin.project.create',
                'store' => 'admin.project.store',
                'destroy' => 'admin.project.destroy',
                'update' => 'admin.project.update',
            ]
        ]
    );
    Route::get('project/delete/{id}', [\App\Http\Controllers\Backoffice\ProjectController::class, 'delete'])->name('admin.project.delete');


    Route::resource(
        'press',
        \App\Http\Controllers\Backoffice\PressController::class,
        [
            'names' => [
                'edit' => 'admin.press.edit',
                'index' => 'admin.press.index',
                'update' => 'admin.press.update',
            ]
        ]
    );
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/getProject', [HomeController::class, 'getProject'])->name('getProject');



// Route::get('/', function () {
//     return view('pages.home.index');
// })->name('home');
