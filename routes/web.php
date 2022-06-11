<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\ZohoController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('contacts', ContactController::class);
Route::get('zoho-contacts', [ZohoController::class, 'fetch']);
//Route::get('contacts', [ContactController::class, 'index'])->name('contacts');
//Route::get('zoho-contacts', [ZohoController::class, 'index'])->name('contacts');
    
// Add contact in ZOHO
Route::get('zohocrmauth', [ZohoController::class, 'auth'])->name('zohocrmauth');
Route::get('zohocrm', [ZohoController::class, 'store'])->name('zohocrm');