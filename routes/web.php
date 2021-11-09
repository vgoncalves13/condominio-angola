<?php

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
    return redirect('admin/condos');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin/employees', App\Http\Controllers\EmployeeController::class);

Route::resource('admin/familiars', App\Http\Controllers\FamiliarController::class);

Route::resource('admin/cars', App\Http\Controllers\CarController::class);

Route::resource('admin/condos', App\Http\Controllers\CondoController::class);

Route::resource('admin/residences', App\Http\Controllers\ResidenceController::class);

Route::resource('admin/files', App\Http\Controllers\FileController::class);

Route::resource('admin/financials', App\Http\Controllers\FinancialController::class);

Route::resource('admin/service-providers', App\Http\Controllers\ServiceProviderController::class);



/*
*/

Route::get('admin/residences/create/{condo_id}', 'App\Http\Controllers\ResidenceController@create')->name('residences.create');
Route::post('admin/residences/store','App\Http\Controllers\ResidenceController@store')->name('residences.store');
Route::post('admin/residences/storeTenant','App\Http\Controllers\ResidenceController@storeTenant')->name('residences.storeTenant');
Route::get('admin/residences/tenant/create','App\Http\Controllers\ResidenceController@createTenant')->name('residences.createTenant');

Route::get('admin/files/create/{condo_id}', 'App\Http\Controllers\FileController@create')->name('files.create');

Route::post('admin/files/store', 'App\Http\Controllers\FileController@store' )->name('files.store');

Route::get('admin/financials/create/{condo_id}', 'App\Http\Controllers\FinancialController@create' )->name('financials.create');

Route::post('admin/financials/store','App\Http\Controllers\FinancialController@store')->name('financials.store');

Route::get('admin/financials/{financial}/details','App\Http\Controllers\FinancialController@details')->name('financials.details');

Route::post('admin/financials_residence/store','App\Http\Controllers\FinancialResidenceController@store')->name('financial_residence.store');
