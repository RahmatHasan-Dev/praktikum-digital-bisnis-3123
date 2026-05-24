<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Rute User Area
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event/{event}', [\App\Http\Controllers\EventController::class, 'show'])->name('events.show');

Route::get('/kategori/{category}', [\App\Http\Controllers\HomeController::class, 'index'])->name('kategoris.index');

Route::get('/checkout', [\App\Http\Controllers\EventController::class, 'checkout'])->name('checkout');
Route::get('/my-ticket', [\App\Http\Controllers\EventController::class, 'ticket'])->name('ticket');

Route::post('/logout', function () {return redirect('/');})->name('logout');

// Routes halaman statis (Pertemuan 2.5)

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/katalog', [\App\Http\Controllers\HomeController::class, 'index'])->name('katalog');

Route::get('/bantuan', function () {
    return view('bantuan');
});

Route::get('/kontak', function () {
    return view('contact');
})->name('kontak');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/events', [DashboardController::class, 'indexEvent'])->name('events.index');
    Route::get('/transactions', [DashboardController::class, 'indexTransaction'])->name('transactions.index');

    // UTS - CRUD Kategori (Admin)
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);

    // Pertemuan 7 (UTS) - Modul Partner (CRUD lengkap + Search)
    Route::resource('partners', \App\Http\Controllers\PartnerController::class);

    Route::resource('events', EventAdminController::class);
});
