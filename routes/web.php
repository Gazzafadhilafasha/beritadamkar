<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UserController; // Perbaiki 'Controller' menjadi 'Controllers'
use App\Http\Controllers\UserBeritaController;
use App\Http\Controllers\AuthController;

// Route untuk login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Route untuk halaman detail berita di user/berita.blade.php
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('berita', BeritaController::class)->parameters([
    'berita' => 'berita'
]);
});

Route::get('/user/berita/{berita}', [UserBeritaController::class, 'show'])->name('user.berita.show');
Route::get('/dashboard', [BeritaController::class, 'dashboard'])->name('dashboard');

