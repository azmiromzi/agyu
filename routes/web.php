<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\User\PesananController;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Pesanan;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified', 'user')->name('user.')->prefix('user')->group(function() {
    Route::get('menu', [PesananController::class, 'index'])->name('menu');
    Route::get('menu/pesanan/{id}', [PesananController::class, 'create'])->name('menu.pesanan');
});

Route::get('/admin/dashboard', function () {
    return view('admin.index', [
        'jumlahmenu' => Menu::count(),
        'jumlahpesanan' => Pesanan::count(),
    ]);
})->middleware(['auth', 'verified', 'admin'])->name('admin.dashboard');

// Admin Controller
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout')->middleware(['auth', 'verified', 'admin']);
    Route::get('/admin/profile', 'Profile')->name('admin.profile')->middleware(['auth', 'verified', 'admin']);
    Route::get('/admin/profile/edit', 'EditProfile')->name('edit.profile')->middleware(['auth', 'verified', 'admin']);
    Route::post('/admin/profile/store', 'StoreProfile')->name('store.profile')->middleware(['auth', 'verified', 'admin']);
    Route::get('/admin/password', 'ChangePassword')->name('change.password')->middleware(['auth', 'verified', 'admin']);
    Route::post('/admin/password.update', 'UpdatePassword')->name('update.password')->middleware(['auth', 'verified', 'admin']);
}); //End Method

Route::middleware(['auth', 'admin', 'verified'])->name('admin.')->prefix('admin')->group(function() {
    Route::resource('admin/category', CategoryController::class);
    Route::resource('admin/menu', MenuController::class);
});
require __DIR__.'/auth.php';
