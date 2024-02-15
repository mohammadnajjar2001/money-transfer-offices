<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\TransfersController;
use App\Http\Controllers\CurrencyExchangeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TransfersFalseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// })->middleware('UserRole');
// في حال لدينا اكثر من راوت 
// Route::middleware(['UserRole , auth'])->group(function () {
// // مسارات المكاتب
// Route::get('/offices', [OfficesController::class, 'index'])->name('offices.index');
// Route::get('/offices/manage', [OfficesController::class, 'manage'])->name('offices.manage');
// Route::get('/offices/create', [OfficesController::class, 'create'])->name('offices.create');
// Route::get('/offices/edit/{id}', [OfficesController::class, 'edit'])->name('offices.edit');
// Route::patch('/offices/update/{id}', [OfficesController::class, 'update'])->name('offices.update');
// Route::delete('/offices/delete/{id}', [OfficesController::class, 'destroy'])->name('offices.destroy');
// });

Route::get('/', function () {
    return view('welcome'); 
});

Auth::routes();


Route::get('/currency', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
Route::get('/about', [App\Http\Controllers\CurrencyExchangeController::class, 'index'])->name('currency.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','AdminRole:admin'])->group(function () {
Route::post('/offices/store', [OfficeController::class, 'store'])->name('offices.store');
Route::get('/offices/edit/{id}', [OfficeController::class, 'edit'])->name('offices.edit');
Route::delete('/offices/delete/{id}', [OfficeController::class, 'destroy']  )->name('offices.destroy');
Route::get('/offices/create', [OfficeController::class, 'create'])->name('offices.create');
Route::patch('/offices/update/{id}', [OfficeController::class, 'update'])->name('offices.update');
Route::post('/transfers/store', [TransfersController::class, 'store'])->name('transfers.store');
Route::get('/transfers/edit/{id}', [TransfersController::class, 'edit'])->name('transfers.edit');
Route::patch('/transfers/update/{id}', [TransfersController::class, 'update'])->name('transfers.update');
Route::delete('/transfers/delete/{id}', [TransfersController::class, 'destroy'])->name('transfers.destroy');
});
Route::middleware(['auth', 'AdminRole:super,admin'])->group(function () {
    Route::get('/offices', [OfficeController::class, 'index'])->name('offices.index');
    Route::get('/transfers', [TransfersController::class, 'index'])->name('transfers.index');

});
Route::middleware(['auth', 'AdminRole:user,admin'])->group(function () {
    Route::get('/transfers/create', [TransfersController::class, 'create'])->name('transfers.create');
    Route::get('/transfers/false', [App\Http\Controllers\TransfersFalseController::class, 'index'])->name('transfers.false');
});

Route::get('lanuage/{lacale}',function($locale){
    if(in_array($locale,['ar','en','tr'])){
        session()->put('locale',$locale);
    }
    return redirect()->back();
})->name('lang');