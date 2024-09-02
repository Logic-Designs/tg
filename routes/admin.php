<?php

use App\Http\Controllers\Admin\AboutContentController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLanguageController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\ContactContentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DevelopmentController;
use App\Http\Controllers\Admin\HomeContentController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubMediaController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;



Route::get('/',function(){
    return redirect()->route('admin.dashboard');
});



Route::get('dashboard',[AdminController::class, 'dashboard'])->name('dashboard');

// Route::resource('pages', PageController::class);
Route::middleware('superadmin')->group(function(){
    Route::put('edit-setting', [AdminController::class, 'editSetting'])->name('edit');

    Route::controller(PageController::class)->as('pages.')->prefix('pages/')->group(function ($can_update_pages) {
        Route::get('', 'index')->name('index');
        Route::put('{page}', 'update')->name('update');
        Route::get('{page}/edit', 'edit')->name('edit');
        if(0){
            Route::post('', 'store')->name('store');
            Route::delete('{page}', 'destroy')->name('destroy');
        }
    });

    Route::resource('sliders', SliderController::class);
    Route::resource('developments', DevelopmentController::class);
    Route::delete('/developments/photos/{photo}', [DevelopmentController::class, 'destroyPhoto'])->name('developments.photos.destroy');
    Route::resource('media', MediaController::class);
    
    Route::get('media/{media}/sub-media', [SubMediaController::class, 'index'])->name('media.sub.index');
    Route::post('media/{media}/sub-media', [SubMediaController::class, 'store'])->name('media.sub.store');
    Route::get('media/sub-media/{id}/edit', [SubMediaController::class, 'edit'])->name('media.sub.edit');
    Route::put('media/sub-media/{id}/update', [SubMediaController::class, 'update'])->name('media.sub.update');
    Route::delete('media/sub-media/{id}/delete', [SubMediaController::class, 'destroy'])->name('media.sub.delete');


    Route::resource('careers', CareerController::class);
    Route::resource('contacts', ContactController::class);

    Route::get('home-content', [HomeContentController::class, 'index'])->name('home-content.index');
    Route::post('home-content', [HomeContentController::class, 'update'])->name('home-content.update');

    Route::get('about-content', [AboutContentController::class, 'index'])->name('about-content.index');
    Route::post('about-content', [AboutContentController::class, 'update'])->name('about-content.update');

    Route::get('contact-content', [ContactContentController::class, 'index'])->name('contact-content.index');
    Route::post('contact-content', [ContactContentController::class, 'update'])->name('contact-content.update');

    Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('setting', [SettingController::class, 'update'])->name('setting.update');

    Route::resource('admins', AdminController::class);
    if(0){

        Route::get('languages', [LanguageController::class, 'index'])->name('languages.index');
        Route::post('languages', [LanguageController::class, 'store'])->name('languages.store');
        Route::put('languages', [LanguageController::class, 'update'])->name('languages.update');

    }

    Route::get('admin_language', [AdminLanguageController::class, 'index'])->name('admin_language.index');
    Route::post('admin_language', [AdminLanguageController::class, 'store'])->name('admin_language.store');
    Route::put('admin_language', [AdminLanguageController::class, 'update'])->name('admin_language.update');
    Route::put('admin_language/updateKey', [AdminLanguageController::class, 'updateKey'])->name('admin_language.updateKey');


});

