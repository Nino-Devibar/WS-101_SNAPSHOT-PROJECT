<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

// Home page 
Route::get('/homepage', function () {
    return view('gallery.homepage');
})->name('homepage');

// Gallery routes
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery.index'); // Displays all images (index.blade.php)
Route::get('gallery/create', [GalleryController::class, 'create'])->name('gallery.create'); // Image upload page (create.blade.php)
Route::post('gallery', [GalleryController::class, 'store'])->name('gallery.store'); // Handle image upload (store image)
Route::get('gallery/{image}', [GalleryController::class, 'show'])->name('gallery.show'); // Show specific image (show.blade.php)
Route::get('gallery/{image}/edit', [GalleryController::class, 'edit'])->name('gallery.edit'); // Edit image page (edit.blade.php)
Route::put('gallery/{image}', [GalleryController::class, 'update'])->name('gallery.update'); // Update image details
Route::delete('gallery/{image}', [GalleryController::class, 'destroy'])->name('gallery.destroy'); // Delete image
