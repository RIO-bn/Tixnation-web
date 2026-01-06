<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MovieContoller;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\TicketController;
use App\Models\Food;
use App\Models\Movie;

Route::get('/adminstudio/edit/{id}', [StudioController::class, 'edit'])->name('studio.edit');
Route::put('/adminstudio/update/{id}', [StudioController::class, 'update'])->name('studio.update');

Route::delete('/adminfood/{id}', [FoodController::class, 'destroy'])->name('adminfood.destroy');
Route::get('/adminfood', [FoodController::class, 'index'])->name('adminfood');
Route::post('/adminfood', [FoodController::class, 'store'])->name('adminfood.store');
Route::get('/adminfood/edit/{id}', [FoodController::class, 'edit'])->name('food.edit');
Route::put('/adminfood/update/{id}', [FoodController::class, 'update'])->name('food.update');

Route::delete('/adminmovie/{id}', [MovieContoller::class, 'destroy'])->name('adminmovie.destroy');
Route::get('/adminmovie', [MovieContoller::class, 'index'])->name('adminmovie');
Route::post('/adminmovie', [MovieContoller::class, 'store'])->name('adminmovie.store');
Route::get('/adminmovie/edit/{id}', [MovieContoller::class, 'edit'])->name('movie.edit');
Route::put('/adminmovie/update/{id}', [MovieContoller::class, 'update'])->name('movie.update');

Route::delete('/tickets/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy');
Route::get('/index', [TicketController::class, 'index'])->name('index');

Route:: get('/movie1' , function(){
    return view('movie1');
})->name('movie1');

Route:: get('/movie2' , function(){
    return view('movie2');
})->name('movie2');

Route:: get('/movie3' , function(){
    return view('movie3');
    })->name('movie3');

Route:: get('/movie4' , function(){
        return view('movie4');
        })->name('movie4');

        Route:: get('/movie5' , function(){
            return view('movie5');
            })->name('movie5');

            Route:: get('/movie6' , function(){
                return view('movie6');
                })->name('movie6');
                Route:: get('/movie7' , function(){
                    return view('movie7');
                    })->name('movie7');

                    Route:: get('/movie8' , function(){
                        return view('movie8');
                        })->name('movie8');

                        Route:: get('/movie9' , function(){
                            return view('movie9');
                            })->name('movie9');
Route::get('/Main', function () {
    return view('Main');
})->middleware(['auth'])->name('Main');

// Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
// Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get('/Recomendation', function () {
    return view('Recomendation');
})->name('Recomendation');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::delete('/adminstudio/{id}', [StudioController::class, 'destroy'])->name('adminstudio.destroy');
Route::get('/adminstudio', [StudioController::class, 'index'])->name('adminstudio');
Route::post('/adminstudio', [StudioController::class, 'store'])->name('adminstudio.store');
Route::get('/food', function () {
    return view('food');
})->name('food');
// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/Reservation', [ReservationController::class, 'index'])->name('Reservation');
Route::post('/Reservation', [ReservationController::class, 'store'])->name('order.store');

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return Auth::check() ? redirect()->route('Main') : redirect()->route('register');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
