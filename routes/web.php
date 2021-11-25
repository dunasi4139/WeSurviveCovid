<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\VaccineController;
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

Route::get('/test', function(){
    return view('pages.suggestion.index');
});

// Route Auth untuk login, Register dan Logout
Auth::routes();

//Register Untuk Dokter
Route::get('/register-dokter', [RegisterController::class, 'dokterIndex'])->name('register-dokter');

//Menu
Route::middleware('auth')->group(function () {   
    Route::get('/', [HomeController::class, 'index'])->name('homepage');

    Route::group(['prefix' => 'artikel','as' => 'article.'], function () {  
        Route::get('', [ArticleController::class, 'index'])->name('index');
        
        Route::get('/form', [ArticleController::class, 'create'])->middleware(['can:isDokter'])->name('create');

        Route::post('/form', [ArticleController::class, 'store'])->middleware(['can:isDokter'])->name('store');

        Route::get('/{id}', [ArticleController::class, 'show'])->name('show');   
        
        Route::put('/form/{id}', [ArticleController::class, 'edit'])->middleware(['can:isDokter'])->name('edit');   
    });
    

    Route::group(['prefix' => 'saran','as' => 'suggestion.'], function () {
        Route::get('', [SuggestionController::class, 'index'])->name('index');

        Route::get('/{id}', [SuggestionController::class, 'show'])->name('show');
    });

    Route::group(['prefix' => 'vaksinasi','as' => 'vaccine.'], function () {
        Route::get('', [VaccineController::class, 'index'])->name('index');
    });
});


// Route Page Masyarakat
Route::middleware(['can:isMasyarakat'])->group(function () {        
    Route::prefix('post-pengalaman')->group(function () {   

    });
    Route::prefix('artikel')->group(function () {  

    });
    Route::prefix('saran')->group(function () {  

    });
    Route::prefix('vaksinasi')->group(function () {  

    });
});

// Route Page Dokter
Route::middleware(['can:isDokter'])->group(function () {        
    Route::prefix('post-pengalaman')->group(function () {   

    });
    Route::prefix('artikel')->group(function () {  

    });
    Route::prefix('saran')->group(function () {  

    });
    Route::prefix('vaksinasi')->group(function () {  

    });
});

// Route Page Admin
Route::middleware(['can:isAdmin'])->group(function () {        
    Route::prefix('admin')->group(function () {        
        Route::prefix('post-pengalaman')->group(function () {   

        });
        Route::prefix('artikel')->group(function () {  
    
        });
        Route::prefix('saran')->group(function () {  
    
        });
        Route::prefix('vaksinasi')->group(function () {  
    
        });
    });

});