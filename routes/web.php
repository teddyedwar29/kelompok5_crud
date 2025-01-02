<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailArtikelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);


Route::group(['middleware' => ['auth', 'check_role:admin']], function(){
    Route::get('/dashboard',[DashboardController::class, 'dashboard']);
    Route::get('/about', function () {
        return view('admin/about');
    })->name('about');

    // route buat author
    Route::get('/author', [AuthorController::class,'tampilAuthor'])->name('admin.author');    
    Route::get('/author/tambah', [AuthorController::class,'tambahAuthor'])->name('admin.tambahAuthor');    
    Route::post('/author/submit', [AuthorController::class,'submitAuthor'])->name('admin.submitAuthor');    
    Route::delete('/author/delete/{id}', [AuthorController::class,'deleteAuthor'])->name('admin.deleteAuthor');
    Route::get('/author/edit/{id}', [AuthorController::class,'editAuthor'])->name('admin.editAuthor');    
    Route::post('/author/update/{id}', [AuthorController::class,'updateAuthor'])->name('admin.updateAuthor'); 

    // route buat artikel
    Route::get('/artikel', [ArtikelController::class,'tampilArtikel'])->name('admin.artikel');  
    Route::get('/artikel/tambah', [ArtikelController::class,'tambahArtikel'])->name('admin.tambahArtikel'); 
    Route::post('/artikel/submit', [ArtikelController::class,'submitArtikel'])->name('admin.submitArtikel');  
    Route::delete('/artikel/delete/{id}', [ArtikelController::class,'deleteArtikel'])->name('admin.deleteArtikel');
    Route::get('/artikel/edit/{id}', [ArtikelController::class,'editArtikel'])->name('admin.editArtikel');
    Route::post('/artikel/update/{id}', [ArtikelController::class,'updateArtikel'])->name('admin.updateArtikel'); 

    // route buat detail artikel
    Route::get('/detailartikel', [DetailArtikelController::class,'tampilDetailArtikel'])->name('admin.detailArtikel'); 
    Route::get('/detailartikel/tambah', [DetailArtikelController::class,'tambahDetailArtikel'])->name('admin.tambahDetailArtikel'); 
    Route::post('/detailartikel/submit', [DetailArtikelController::class,'submitDetailArtikel'])->name('admin.submitDetailArtikel'); 
    Route::delete('/detailartikel/delete/{id}', [DetailArtikelController::class,'deleteDetailArtikel'])->name('admin.deleteDetailArtikel');
    Route::get('/detailartikel/edit/{id}', [DetailArtikelController::class,'editDetailArtikel'])->name('admin.editDetailArtikel');
    Route::post('/detailartikel/update/{id}', [ArtikelController::class,'updateDetailArtikel'])->name('admin.updateDetailArtikel'); 

});




// Route::get('/author', [AuthorController] ,function () {
//     return view('users/author');
// });


