<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FormationController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('index');
})->name('home');
Route::get('blog', function(){
    return view('blog');
})->name('blog');
// Route::get('contact', function(){
    //     return view('contact');
    // })->name('contactform');
    Route::get('recrutement', function(){
        return view('recrutement');
    })->name('recrutement');
// Route::get('centres', function(){
//     return view('centres');
// })->name('noscentres');
Route::get('centres', [CentreController::class, 'index'])->name('centres');


Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
// Route::get('contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('catalogue', [FormationController::class, 'index'])->name('catalogue');
// Route::get('catalogue?categorie={id}', [FormationController::class, 'filter'])->name('catalogue');
Route::get('formation/{id}/{slug}', [FormationController::class, 'show']);