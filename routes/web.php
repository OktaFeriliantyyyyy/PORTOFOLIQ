<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

Route::get('/login', [AuthController::class, 'index'])->name('login.index')->middleware('saatTamu');
Route::post('/prosesLogin', [AuthController::class, 'login'])->name('login.proses')->middleware('saatTamu');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::redirect('/admin', url('/admin/pendidikan'));

Route::prefix('admin')->middleware('saatLogin')->group(
    function () {
        
        Route::resource('pendidikan', PendidikanController::class);
        Route::resource('pengalaman', PengalamanController::class);
        Route::resource('postingan', PostController::class);
        Route::resource('skill', SkillController::class);

        Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::post('profile/update', [ProfileController::class, 'update'])->name('profile.update');
        
    }
);


// Route Buat User (Tampilan User)

Route::redirect('/', '/home');

Route::get('/home', [UserController::class, 'home'])->name('home');
Route::get('/resume', [UserController::class, 'resume'])->name('resume');
Route::get('/project', [UserController::class, 'project'])->name('project');


