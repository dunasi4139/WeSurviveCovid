<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminSuggestionController;
use App\Http\Controllers\Admin\AdminVaccineController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/test', function () {
    return view('admin.article.index');
});


// Route Auth untuk login, Register dan Logout
Auth::routes();

//Register Untuk Dokter
Route::get('/register-dokter', [RegisterController::class, 'dokterIndex'])->name('register-dokter');

//Menu
Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'move']);
    Route::get('beranda', [HomeController::class, 'index'])->name('homepage');

    Route::group(['prefix' => 'profil', 'as' => 'profile.'], function () {
        Route::get('', [ProfileController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'artikel', 'as' => 'article.'], function () {
        Route::get('', [ArticleController::class, 'index'])->name('index');

        Route::get('/form', [ArticleController::class, 'create'])->middleware(['can:isDokter'])->name('create');

        Route::post('/form', [ArticleController::class, 'store'])->middleware(['can:isDokter'])->name('store');

        Route::get('/{id}', [ArticleController::class, 'show'])->name('show');

        Route::get('/form/{id}', [ArticleController::class, 'edit'])->middleware(['can:isDokter'])->name('edit');

        Route::post('/form/{id}', [ArticleController::class, 'update'])->middleware(['can:isDokter'])->name('update');

        Route::post('/hapus/{id}', [ArticleController::class, 'destroy'])->middleware(['can:isDokter'])->name('delete');
    });


    Route::group(['prefix' => 'saran', 'as' => 'suggestion.'], function () {
        Route::get('', [SuggestionController::class, 'index'])->name('index');

        Route::get('/{id}', [SuggestionController::class, 'show'])->name('show');
    });

    Route::group(['prefix' => 'vaksinasi', 'as' => 'vaccine.'], function () {
        Route::get('', [VaccineController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
        Route::get('', [PostController::class, 'index'])->name('index');

        Route::get('/form', [PostController::class, 'create'])->middleware(['can:isMasyarakat'])->name('create');

        Route::post('/form', [PostController::class, 'store'])->middleware(['can:isMasyarakat'])->name('store');

        Route::get('/{id}', [PostController::class, 'show'])->name('show');

        Route::get('/form/{id}', [PostController::class, 'edit'])->middleware(['can:isMasyarakat'])->name('edit');

        Route::post('/form/{id}', [PostController::class, 'update'])->middleware(['can:isMasyarakat'])->name('update');

        Route::post('/hapus/{id}', [PostController::class, 'destroy'])->middleware(['can:isMasyarakat'])->name('delete');
    });

    Route::group(['prefix' => 'post', 'as' => 'comment.'], function () {
        Route::post('/{id}/komentar', [CommentController::class, 'store'])->name('store');
    });
    Route::group(['prefix' => 'post', 'as' => 'like.'], function () {
        Route::get('/{id}/like', [PostController::class, 'like'])->name('like');
    });
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/login', [AdminLoginController::class, 'showAdminLoginForm'])->name('login');

    Route::post('/login', [AdminLoginController::class, 'login']);

    Route::middleware(['auth', 'can:isAdmin'])->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::group(['prefix' => '/user', 'as' => 'user.'], function () {
            Route::get('', [AdminUserController::class, 'index'])->name('index');
        });

        Route::group(['prefix' => '/post', 'as' => 'post.'], function () {
            Route::get('', [AdminPostController::class, 'index'])->name('index');

            Route::get('/{id}', [AdminPostController::class, 'show'])->name('show');

            Route::post('/hapus/{id}', [AdminPostController::class, 'destroy'])->name('delete');
        });

        Route::group(['prefix' => '/artikel', 'as' => 'article.'], function () {
            Route::get('', [AdminArticleController::class, 'index'])->name('index');

            Route::get('/{id}', [AdminArticleController::class, 'show'])->name('show');

            Route::post('/hapus/{id}', [AdminArticleController::class, 'destroy'])->name('delete');
        });

        Route::group(['prefix' => '/saran', 'as' => 'suggestion.'], function () {
            Route::get('', [AdminSuggestionController::class, 'index'])->name('index');

            Route::get('/form', [AdminSuggestionController::class, 'create'])->name('create');

            Route::post('/form', [AdminSuggestionController::class, 'store'])->name('store');

            Route::get('/{id}', [AdminSuggestionController::class, 'show'])->name('show');

            Route::get('/form/{id}', [AdminSuggestionController::class, 'edit'])->name('edit');

            Route::post('/form/{id}', [AdminSuggestionController::class, 'update'])->name('update');

            Route::post('/hapus/{id}', [AdminSuggestionController::class, 'destroy'])->name('delete');
        });

        Route::group(['prefix' => '/vaksinasi', 'as' => 'vaccine.'], function () {
            Route::get('', [AdminVaccineController::class, 'index'])->name('index');

            Route::get('/form', [AdminVaccineController::class, 'create'])->name('create');

            Route::post('/form', [AdminVaccineController::class, 'store'])->name('store');

            Route::get('/{id}', [AdminVaccineController::class, 'show'])->name('show');

            Route::get('/form/{id}', [AdminVaccineController::class, 'edit'])->name('edit');

            Route::post('/form/{id}', [AdminVaccineController::class, 'update'])->name('update');

            Route::post('/hapus/{id}', [AdminVaccineController::class, 'destroy'])->name('delete');
        });
    });
});
