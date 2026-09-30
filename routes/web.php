<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/servicios', [PageController::class, 'services'])->name('services');
Route::get('/contacto', [PageController::class, 'contact'])->name('contact');