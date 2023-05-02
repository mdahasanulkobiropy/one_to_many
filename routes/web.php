<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PriceingController;
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
Route::get('/',[FrontendController::class,'index'])->name('index.frontend');

Route::controller(PriceingController::class)->group(function(){
    Route::get('price','index')->name('index.price');
    Route::get('price/create','create')->name('create.price');
    Route::post('price/store','store')->name('store.price');
    Route::post('price/edit/{id}','edit')->name('edit.price');
    Route::post('price/update/{id}','update')->name('update.price');
    Route::post('price/destory/{id}','destory')->name('destory.price');
});


Route::controller(ItemsController::class)->group(function(){
    Route::get('price/items','index')->name('index.items');
    Route::get('price/items/create','create')->name('create.items');
    Route::post('price/items/store','store')->name('store.items');
    Route::post('price/items/edit/{id}','edit')->name('edit.items');
    Route::post('price/items/update/{id}','update')->name('update.items');
    Route::post('price/items/destory/{id}','destory')->name('destory.items');
});
