<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PedagogicalController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\DocumentsController;
use App\Http\Controllers\Admin\LeaderController;
use App\Http\Controllers\Admin\HolidayController;

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


Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/maktab-haqida', [MainController::class, 'about'])->name('about');
Route::get('/maktab-yutuqlari', [MainController::class, 'achievement'])->name('achievement');
Route::get('/maktab-hujjatlar', [MainController::class, 'documents'])->name('documents');
Route::get('/rahbariyat', [MainController::class, 'leadership'])->name('leadership');
Route::get('/oqituvchilar', [MainController::class, 'teacher'])->name('teacher');
Route::get('/yangiliklar', [MainController::class, 'news'])->name('news');
Route::get('/tadbirlar', [MainController::class, 'holiday'])->name('holiday');
Route::get('/aloqa', [MainController::class, 'contact'])->name('contact');
Route::post('/message', [MainController::class, 'message'])->name('message');
Route::get('/getmessage', [MainController::class, 'getmessage'])->middleware(['auth'])->name('getmessage');



Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function(){

    Route::resource('statistic', StatisticController::class);
    Route::resource('teachers', TeachersController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('pedagogical', PedagogicalController::class);
    Route::resource('post', PostController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('document', DocumentsController::class);
    Route::resource('leader', LeaderController::class);
    Route::resource('holiday', HolidayController::class);

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
