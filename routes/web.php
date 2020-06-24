<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

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

Auth::routes();

Route::get('lang/{locale}',[LanguageController::class,'swap']);

Route::group([
    'middleware' => ['web', 'is-check-session', 'auth:web']
], function () {
    # Route Dashboard
    Route::get('/',
        'DashboardController@dashboardAnalytics')
        ->name('dashboard');
    # Route Users
    Route::get('users',
        'UserController@index')
        ->name('users');
});
