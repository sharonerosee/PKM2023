<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view;

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

Route::controller(view::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/index', 'index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/sejarah','sejarah')->name('sejarah');
    Route::get('/contact','contact')->name('contact');
    Route::get('/kids','kids')->name('kids');
    Route::get('/facility','facility')->name('facility');
    Route::get('/team','team')->name('team'); 
    Route::get('/bmi','bmi')->name('bmi');
    Route::get('/donate','donate')->name('donate');
    Route::get('/caretaker','caretaker')->name('caretaker');
    Route::post('/prosesBmi','prosesBmi')->name('prosesBmi');
    Route::post('/saran','saran')->name('saran');
    Route::get('/loginadmin', 'loginadmin')->name('login')->middleware('guest');
    Route::post('/loginadmin', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
    Route::get('/admin', 'admin')->name('admin')->middleware('auth');
    Route::post('/admin', 'admin')->name('admin')->middleware('auth');
    Route::delete('/admindelete/{id}', 'destroy')->name('destroy')->middleware('auth');
    Route::get('/admin/create', 'create')->name('create')->middleware('auth');
    Route::get('/admin/edit/{id}', 'edit')->name('edit')->middleware('auth');
    Route::post('/admin/store', 'store')->name('store')->middleware('auth');
    Route::put('/admin/{id}', 'update')->name('update')->middleware('auth');
    Route::post('/admin/store1', 'store1')->name('store1')->middleware('auth');
    Route::get('/admin/createp', 'createp')->name('createp')->middleware('auth');
    Route::get('/adminp', 'adminp')->name('adminp')->middleware('auth');
    Route::put('/adminp/{id}', 'updatep')->name('updatep')->middleware('auth');
    Route::get('/adminp/edit/{id}', 'editp')->name('editp')->middleware('auth');
    Route::delete('/admindeletep/{id}', 'destroyp')->name('destroyp')->middleware('auth');
    Route::post('/admin/prosesBmip/{id}','prosesBmip')->name('prosesBmip')->middleware('auth');
    Route::get('/admin/bmiadmin/{id}','bmiadmin')->name('bmiadmin')->middleware('auth');
    Route::put('/adminstore3/{id}','adminstore3')->name('adminstore3')->middleware('auth');
});
Route::resource('view', view::class);

