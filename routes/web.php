<?php
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminmanagerController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DataController;

//Url reroute with get function

Route::get('/', function () {
    return view('unlogged');
})->name('unlogged.index');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard2');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Aplication controllers

Route::middleware('auth')->group(function () {

// Kontrolery odpowiedzialne za wpisy księgowe 
Route::get('/data/accountingentries/{id}/delete', [DataController::class, 'datadeleteaccountingentries'])->name('data.delete.accountingentries');
Route::get('/data/accountingentries/list', [DataController::class, 'dataaccountingentries'])->name('data.accountingentries');
Route::get('/data/accountingentries/{id}/edit/', [DataController::class, 'dataeditaccountingentries'])->name('data.edit.accountingentries');
Route::put('/data/accountingentries/{id}/store/', [DataController::class, 'datastoreaccountingentries'])->name('data.store.accountingentries');

Route::get('/book/list', [BookController::class, 'booklist'])->name('book.list');
Route::get('/book/change', [BookController::class, 'bookchange'])->name('book.change');
Route::get('/adminmanager', [AdminmanagerController::class, 'adduserview'])->name('adminmanager.adduserview');
Route::get('/adminmanager/userlist', [AdminmanagerController::class, 'userlist'])->name('adminmanager.showuser');
Route::get('/adminmanager/userdelete/{id}', [AdminmanagerController::class, 'userdelete'])->name('adminmanager.userdelete');
Route::get('/adminmanager/useredit/{id}', [AdminmanagerController::class, 'useredit'])->name('adminmanager.useredit');
Route::put('/adminmanager/user/{id}/edit' , [AdminmanagerController::class, 'usereditstore'])->name('adminmanager.useredit.store');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


// Rest of the world
    Route::resource('chirps', ChirpController::class)
    
    ->only(['index', 'store'])

    ->middleware(['auth', 'verified']);

 require __DIR__.'/auth.php';

 ?>

