<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\master;
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

Route::get('/',[master::class,'index'])->name('home');
Route::get('about-us',[master::class,'aboutus'])->name('about-us');
Route::get('services',[master::class,'services'])->name('services');
Route::get('contact-us',[master::class,'contact'])->name('contact-us');


Route::get('Audio&Video',[master::class,'Audio_Video'])->name('Audio&Video');
Route::get('WebDevelopment',[master::class,'WebDevelopment'])->name('WebDevelopment');
Route::get('AppDevelopment',[master::class,'AppDevelopment'])->name('AppDevelopment');
Route::get('Graphics-Design',[master::class,'GraphicsDesign'])->name('Graphics-Design');
Route::get('TrainingProgramming',[master::class,'TrainingProgramming'])->name('TrainingProgramming');
Route::get('Digital-Marketing',[master::class,'DigitalMarketing'])->name('Digital-Marketing');
Route::get('Content-Management-System',[master::class,'CMS'])->name('Content-Management-System');
Route::get('Search-Engine-Optimisation',[master::class,'SEO'])->name('Search-Engine-Optimisation');
Route::get('Software-Development',[master::class,'SoftwareDevelopment'])->name('Software-Development');

Route::post('subscribe',[master::class,'subscribed'])->name('subscribe');