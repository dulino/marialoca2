<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::post('autenticacao/login', 'AuthenticationController@login');
Route::get('autenticacao/logout', 'AuthenticationController@logout');

Route::get('orders/home', 'OrdersController@home');
Route::get('orders/{id}/deletaItemPedido', 'OrdersController@deletaItemPedido');
Route::get('orders/{id}/alteraStatusItemPedido/{status}', 'OrdersController@alteraStatusItemPedido');
Route::get('orders/{id}/alteraQuantidadeItemPedido/{qtd}', 'OrdersController@alteraQuantidadeItemPedido');

Route::get('clients/home', 'ClientsController@home');

Route::get('users/home', 'UsersController@home');
