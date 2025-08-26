<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/about', function () {
    return 'Hey! Whose This in about page?';
});



// Named Paramater Route
// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// })->name('user.show');

// Grouping Routes
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'Admin Users';
    });    
    Route::get('/posts', function () {
        return 'Admin Posts';
    }); 
});

// constraints

Route::get('/user/{ids}', function ($ids){
    return 'User '.$ids;
})->where('ids','[0-9]+'); // only numbers

Route::get('/user/{slug}', function ($slug){
    return 'Post with slug '.$slug;
})->where('slug','[A-Za-z0-9-_]+'); // only letters


// // middleware
// Route::middleware('/auth', function () {
//     Route::get('/profile', function () {
//         return 'Profile Page';
//     });
//     Route::get('/settings', function () {
//         return 'Settings Page';
//     });
// });

// Combined Example
Route::prefix('admin')->middleware('/auth')->group(function () {        // middleware(['auth])
    Route::get('/home', function () {
        return 'Admin Home Page';
    });
    Route::get('/dashboard', function () {
        return 'Admin Dashboard Page';
    });
});

// Fallback Route
Route::fallback(function () {
    // return '404 Not Found. Go back to <a href="/">Home</a>';
    return view('errors.404');
});

// Route::get('/post', [PostController::class, 'index'])->name('post.index');
// Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
// Route::post('/post', [PostController::class, 'store'])->name('post.store');
// Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
// Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
// Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
// Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

// Route::resource('post', PostController::class);
// Route::resource('post', PostController::class)->only([
//     'index', 'show', 'create', 'store', 'edit'
// ]);

// Route::resource('post', PostController::class)->except([
//     'update', 'destroy'
// ]);

// Route::controller(PostController::class)->group(function () {
//     Route::get('/post', 'index')->name('post.index');
//     Route::get('/post/create', 'create')->name('post.create');
//     Route::post('/post', 'store')->name('post.store');
//     Route::get('/post/{id}', 'show')->name('post.show');
//     Route::get('/post/{id}/edit', 'edit')->name('post.edit');
//     Route::put('/post/{id}', 'update')->name('post.update');
//     Route::delete('/post/{id}', 'destroy')->name('post.destroy');
// });

