<?php

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

Route::group(['middleware'=>['auth']], function()
{
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function()
    {
       /* Route::prefix('stores')->name('stores.')->group(function()
            {
                Route::get('','StoreController@index')->name('index');
                Route::get('create','StoreController@create')->name('create');
                Route::post('store','StoreController@store')->name('store');
                Route::get('{store}/edit','StoreController@edit')->name('edit');
                Route::post('update/{store}','StoreController@update')->name('update');
                Route::get('destroy/{store}','StoreController@destroy')->name('destroy');
            }
        );*/
        //Route::resource('entrega','EntregaController');
    });
});
Route::resource('entrega', 'entregaController');
//Route::resource('show', 'entregaController');
//Route::resource('create', 'entregaController');

Route::resource('veiculo', 'veiculoController');
Route::resource('veiculo/{id}/edit', 'entregaController@edit');
// http://127.0.0.1:8000/veiculo/2/edit
