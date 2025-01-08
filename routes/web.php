<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/services', 'services');
    Route::get('/contact', 'contact');
});

Route::get('/back', [HomeController::class, 'back']);

Route::group(['middleware' => 'admin'], function () {
    // Viewing pages edit
    Route::get('/admin_dashboard', [AdminController::class, 'index'])->name('admin_dashboard');
    Route::get('/global_set', [AdminController::class, 'global_set'])->name('global_set');
    Route::get('/header_setting', [AdminController::class, 'header_setting'])->name('header_setting');
    Route::get('/footer_setting', [AdminController::class, 'footer_setting'])->name('footer_setting');
    Route::get('/home_setting', [AdminController::class, 'home_setting'])->name('home_setting');
    Route::get('/portfolio_setting', [AdminController::class, 'portfolio_setting'])->name('portfolio_setting');
    Route::get('/about_setting', [AdminController::class, 'about_setting'])->name('about_setting');
    Route::get('/product', [AdminController::class, 'product'])->name('product');
    // Global edits
    Route::post('/logo_edit', [AdminController::class, 'logo_edit'])->name('logo_edit');
    Route::post('/global_edit', [AdminController::class, 'global_edit'])->name('global_edit');
    Route::post('/home_header', [AdminController::class, 'home_header'])->name('home_header');
    Route::post('/other_header', [AdminController::class, 'other_header'])->name('other_header');
    // Home page edits
    Route::post('/home_sec_1', [AdminController::class, 'home_sec_1'])->name('home_sec_1');
    Route::post('/home_sec_1_card', [AdminController::class, 'home_sec_1_card'])->name('home_sec_1_card');
    Route::post('/stat_edit', [AdminController::class, 'stat_edit'])->name('stat_edit');
    Route::post('/subsc_edit', [AdminController::class, 'subsc_edit'])->name('subsc_edit');
    Route::post('/portfolio_head_edit', [AdminController::class, 'portfolio_head_edit'])->name('portfolio_head_edit');
    Route::post('/portfolio_edit', [AdminController::class, 'portfolio_edit'])->name('portfolio_edit');
    // Products routes
    Route::post('/add_product', [AdminController::class, 'add_product'])->name('add_product');
    Route::put('/update_product/{id}', [AdminController::class, 'update_product'])->name('update_product');
    Route::delete('/delete_product/{id}', [AdminController::class, 'delete_product'])->name('delete_product');
    // Team routes
    Route::post('/add_team', [AdminController::class, 'add_team'])->name('add_team');
    Route::put('/update_team/{id}', [AdminController::class, 'update_team'])->name('update_team');
    Route::delete('/delete_team/{id}', [AdminController::class, 'delete_team'])->name('delete_team');
    // Review routes
    Route::post('/add_review', [AdminController::class, 'add_review'])->name('add_review');
    Route::put('/update_review/{id}', [AdminController::class, 'update_review'])->name('update_review');
    Route::delete('/delete_review/{id}', [AdminController::class, 'delete_review'])->name('delete_review');
});

// Sending mail route
Route::post('/send-contact', [ContactController::class, 'sendContactForm'])->name('send.contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin.dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
