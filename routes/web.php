<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;

// Rute User Area
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event/1', [EventController::class, 'show'])->name('events.show');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');
Route::post('/logout', function () {return redirect('/');})->name('logout');

use Illuminate\Support\Facades\Route;

// Routes halaman statis (Pertemuan 2.5)

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

Route::get('/kontak', function () {
    return view('contact');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/events', [DashboardController::class, 'indexEvent'])->name('events.index');
    Route::get('/transactions', [DashboardController::class, 'indexTransaction'])->name('transactions.index');

    // Pertemuan 3.5 - Manajemen Kategori (UI saja, belum CRUD database)
    Route::get('/categories', function () {
        return view('admin.categories.index');
    })->name('categories.index');

    // Pertemuan 7 - Modul Partner
    Route::get('/partners', [\App\Http\Controllers\PartnerController::class, 'index'])->name('partners.index');
    Route::get('/partners/create', [\App\Http\Controllers\PartnerController::class, 'create'])->name('partners.create');
    Route::post('/partners', [\App\Http\Controllers\PartnerController::class, 'store'])->name('partners.store');

    Route::resource('events', EventAdminController::class);
});
