<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});


// Route Auth untuk login, Register dan Logout
Auth::routes();


// Route Page Masyarakat
Route::middleware(['can:isMasyrakat'])->group(function () {        
    // Route::get('/', [HomeController::class, 'index'])->name('homepage');
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
    // Route::get('/', [HomeController::class, 'index'])->name('homepage');
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