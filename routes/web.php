<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Auth::routes([
    'verify' => false,
    'reset' => false,
]);

Route::get('/admin-panel', function() {
    return 'this admin panel';
})->name('admin');

Route::get('/', [SiteController::class, 'index'])->name('index');
