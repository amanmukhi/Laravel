<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\donorController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// View Pages - website
Route::get('/', [FrontendController::class, 'index']);
Route::get('/search', [FrontendController::class, 'search']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/events', [FrontendController::class, 'events']);
Route::get('/event_single', [FrontendController::class, 'event_single']);
Route::get('/faq', [FrontendController::class, 'faq']);
Route::get('/gallery_1', [FrontendController::class, 'gallery_1']);
Route::get('/gallery', [FrontendController::class, 'gallery_2']);
Route::get('/404_error', [FrontendController::class, 'error']);
Route::get('/blog', [FrontendController::class, 'blog']);
Route::get('/single', [FrontendController::class, 'single_blog']);


// donor Page
Route::get('/donor', [donorController::class, 'donor']);
Route::post('/donor', [donorController::class, 'donor_action']);

// Route::get('/donor_login', [donorController::class, 'donor_login']);
Route::post('/donor_login', [donorController::class, 'donor_login_action']);

Route::get('/donor-login', [donorController::class, 'login_view']);
Route::post('/donor-login', [donorController::class, 'login_action']);

Route::get('/register', [donorController::class, 'donor_registration_view']);
Route::post('/register', [donorController::class, 'donor_registration_action']);

Route::middleware('donor_auth')->group(function () {
    Route::get('/donor-dashboard', [donorController::class, 'donor_dashboard']);
    Route::get('/donor-logout', [donorController::class, 'logout']);
});

// user page
Route::get('/add-donor/{id}', [UserController::class, 'index']);

Route::get('/user-login', [UserController::class, 'user_login']);
Route::post('/user-login', [UserController::class, 'user_login_action']);

Route::get('/user-dashboard', [UserController::class, 'dashboard']);
// Route::view('/user-dashboard', 'frontend.user-dashboard');

Route::get('/user-register', [UserController::class, 'user_register']);
Route::post('/user-register', [UserController::class, 'user_register_action']);

Route::get('/user-logout', [UserController::class, 'logout']);

// Search Pages - website
Route::post('/', [FrontendController::class, 'search']);

// ----------------------------end-------------------------------



// View Pages - Admin Panel
Route::middleware(['admin_auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/donor', [AdminController::class, 'donor_index'])->name('donor_index');
        Route::get('/user', [AdminController::class, 'user_index'])->name('user_index');
    });
});


// login Page - Admin Panel
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminController::class, 'login']);
    // Route::get('/register', [AdminController::class, 'register']);
});

// ----------------------------end-------------------------------

// register - Admin Panel
Route::group(['prefix' => 'admin'], function () {
    Route::post('/login', [AdminController::class, 'login_user']);
    // Route::post('/register', [AdminController::class, 'register_user']);
});


// ----------------------------end-------------------------------


Route::get('/logout', [AdminController::class, 'logout']);
