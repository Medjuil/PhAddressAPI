<?php

use App\Http\Controllers\AddressAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('address')->name('addressAPI.')->group(function(){
        Route::get('/country',[AddressAPIController::class,'getCountry'])->name('country');
        Route::get('/region/{id}',[AddressAPIController::class,'getRegion'])->name('region'); // get all regions of the Philippines
        Route::get('/region/province/{id}',[AddressAPIController::class,'getProvince'])->name('region.province'); // get all provinces per region
        Route::get('/province/municipality/{id}',[AddressAPIController::class,'getMunicipality'])->name('province.municipality'); // get all municipalities per province
        Route::get('/municipality/barangay/{id}',[AddressAPIController::class,'getBarangay'])->name('municipality.barangay'); // get all barangays per municipality
});