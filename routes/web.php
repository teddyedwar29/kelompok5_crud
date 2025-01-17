<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailArtikelController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.homeGuest');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);


Route::get('/guest', [UserPageController::class,'homeGuest'])->name('guest.homeGuest');
Route::get('/guest/author', [GuestController::class,'author'])->name('guest.author');
Route::get('/guest/artikel', [GuestController::class,'artikel'])->name('guest.artikel');
Route::get('/guest/detailartikel', [GuestController::class,'detailArtikel'])->name('guest.detailArtikel');

Route::group(['middleware' => ['auth', 'check_role:user']], function(){
    Route::get('/user', [UserPageController::class,'userPage'])->name('user.user');
    Route::get('/user/author', [UserController::class,'author'])->name('user.author');
    Route::get('/user/artikel', [UserController::class,'artikel'])->name('user.artikel');
    Route::get('/user/detailartikel', [UserController::class,'detailArtikel'])->name('user.detailArtikel');
});


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
    Route::post('/detailartikel/update/{id}', [DetailArtikelController::class,'updateDetailArtikel'])->name('admin.updateDetailArtikel'); 
    
    //route buat editor
    Route::get('/editor', [EditorController::class,'tampilEditor'])->name('admin.editor'); 
    Route::get('/editor/tambah', [EditorController::class,'tambahEditor'])->name('admin.tambahEditor'); 
    Route::post('/editor/submit', [EditorController::class,'submitEditor'])->name('admin.submitEditor'); 
    Route::delete('/editor/delete/{id}', [EditorController::class,'deleteEditor'])->name('admin.deleteEditor');
    Route::get('/editor/edit/{id}', [EditorController::class,'editEditor'])->name('admin.editEditor');
    Route::post('/editor/update/{id}', [EditorController::class,'updateEditor'])->name('admin.updateEditor'); 
    
    // route buat issue
    Route::get('/issue', [IssueController::class,'tampil'])->name('admin.issue'); 
    
    // route buat review
    Route::get('/review', [IssueController::class,'tampil'])->name('admin.review'); 
    Route::get('/review/tambah', [IssueController::class,'tambah'])->name('admin.tambah'); 
});




// Route::get('/author', [AuthorController] ,function () {
//     return view('users/author');
// });


