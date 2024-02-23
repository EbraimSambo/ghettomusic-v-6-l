<?php

use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\Music\ShowMusicPage;
use App\Livewire\Pages\Music\Store\CreateMusicPage;
use App\Livewire\Pages\Music\Store\EditMusicPage;
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

Route::get('/', HomePage::class)->name('home');

Route::prefix('music')->name('music.')->group(function () {
    Route::get('/show/{slug}', ShowMusicPage::class)->name('show');
    Route::prefix('store')->name('store.')->group(function (){
        Route::get('/create', CreateMusicPage::class)->name('crate')->middleware(['auth']);
        Route::get('/edit', EditMusicPage::class)->name('edite')->middleware(['auth']);
    });
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
