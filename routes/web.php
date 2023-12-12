<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DshContactController;
 

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/tours', 'tours')->name('tours');

Route::view('/contact', 'contact')->name('contact');

Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::view('/destinations', 'destinations')->name('destinations');

 
Route::controller(AuthController::class)->group(function () { 
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(ServiceController::class)->prefix('services')->group(function () {
        Route::get('', 'index')->name('services');
        Route::get('create', 'create')->name('services.create');
        Route::post('store', 'store')->name('services.store');
        Route::get('show/{id}', 'show')->name('services.show');
        Route::get('edit/{id}', 'edit')->name('services.edit');
        Route::put('edit/{id}', 'update')->name('services.update');
        Route::delete('destroy/{id}', 'destroy')->name('services.destroy');
    });

    Route::controller(DshContactController::class)->prefix('contacts')->group(function () {
        Route::get('', 'index')->name('contacts.index');
        Route::get('show/{id}', 'show')->name('contacts.show');
        Route::delete('destroy/{id}', 'destroy')->name('contacts.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});