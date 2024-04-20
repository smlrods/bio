<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\PageInfoController;
use App\Http\Controllers\ProductPhotoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/p/{username}', function (string $username) {
    $user = User::where('username', $username)->first();

    if (! $user) {
        abort(404);
    }

    $pageInfo = $user->pageInfo;
    $productPhotos = $user->product_photos;
    $testimonials = $user->testimonials;
    $links = $user->links;

    return view('user', [
        'pageInfo' => $pageInfo,
        'productPhotos' => $productPhotos,
        'testimonials' => $testimonials,
        'links' => $links,
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pageinfo', [PageInfoController::class, 'edit'])->name('pageinfo.edit');
    Route::put('/pageinfo', [PageInfoController::class, 'update'])->name('pageinfo.update');

    Route::get('customize', [CustomizeController::class, 'edit'])->name('customize.edit');
    Route::put('customize', [CustomizeController::class, 'update'])->name('customize.update');

    Route::resource('/product-photos', ProductPhotoController::class);
    Route::resource('/testimonials', TestimonialController::class);
    Route::resource('/links', LinkController::class);
});

require __DIR__.'/auth.php';
