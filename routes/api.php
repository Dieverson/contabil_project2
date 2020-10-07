<?php

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

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', 'Auth\LoginController@logout');

    Route::get('/user', 'Auth\UserController@current');

    Route::patch('settings/profile', 'Settings\ProfileController@update');
    Route::patch('settings/password', 'Settings\PasswordController@update');

    Route::get('/conta', 'Conta\ContaController@index');
  
    Route::patch('/conta', 'Conta\ContaController@update');
    Route::delete('/conta', 'Conta\ContaController@destroy');
    Route::post('/conta', 'Conta\ContaController@store');

    Route::get('/grupo', 'Grupo\GrupoController@index');
    Route::post('/grupo', 'Grupo\GrupoController@store');
    Route::patch('/grupo', 'Grupo\GrupoController@update');
    Route::delete('/grupo', 'Grupo\GrupoController@destroy');

    
    Route::get('/natureza', 'Natureza\NaturezaController@index');
    Route::post('/natureza', 'Natureza\NaturezaController@store');
    Route::patch('/natureza', 'Natureza\NaturezaController@update');
    Route::delete('/natureza', 'Natureza\NaturezaController@destroy');

    Route::get('/subgrupo', 'SubGrupo\SubGrupoController@index');
    Route::post('/subgrupo', 'SubGrupo\SubGrupoController@store');
    Route::patch('/subgrupo', 'SubGrupo\SubGrupoController@update');
    Route::delete('/subgrupo', 'SubGrupo\SubGrupoController@destroy');

    
    
    Route::patch('/planodeconta', 'PlanoDeConta\PlanoDeContaController@update');
    Route::delete('/planodeconta', 'PlanoDeConta\PlanoDeContaController@destroy');
});

Route::get('/planodeconta', 'PlanoDeConta\PlanoDeContaController@index');
Route::get('/planodeconta/{id}', 'PlanoDeConta\PlanoDeContaController@show');
Route::post('/planodeconta', 'PlanoDeConta\PlanoDeContaController@store');

Route::group(['middleware' => 'guest:api'], function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('register', 'Auth\RegisterController@register');

    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::post('email/verify/{user}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'Auth\VerificationController@resend');

    Route::post('oauth/{driver}', 'Auth\OAuthController@redirectToProvider');
    Route::get('oauth/{driver}/callback', 'Auth\OAuthController@handleProviderCallback')->name('oauth.callback');
});
