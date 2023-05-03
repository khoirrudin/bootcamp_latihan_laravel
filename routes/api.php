<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\InputProdukController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//API route for register new user
Route::post('/register', [AuthController::class, 'register']);
//API route for login user
Route::post('/login', [AuthController::class, 'login']);

// API route for input produk
Route::post('/api_simpan_input_produk', [InputProdukController::class, 'api_simpan_input_produk']);

// API route for get produk
Route::get('/api_get_produk', [InputProdukController::class, 'api_get_produk']);


// API route for get produk by id
Route::get('/api_get_produk_by_id/{id}', [InputProdukController::class, 'api_get_produk_by_id']);


// API route for simpan edit produk produk
Route::post('/api_simpan_edit_produk', [InputProdukController::class, 'api_simpan_edit_produk']);

// API route for hapus produk
Route::post('/api_hapus_produk', [InputProdukController::class, 'api_hapus_produk']);


//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });


    // API route for logout user
    Route::post('/logout', [AuthController::class, 'logout']);
});
