<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*
[crud] /post

[PUT] /user/:id
[DELETE] /user/:id
[GET] /user/:id

[POST] /user/auth/login
[POST] /user/auth/register
[POST] /user/auth/forgot-password
[POST] /user/auth/reset-password

[GET] /user/oauth/login/[google,facebook,twitter]
[POST] /user/oauth/callback/[google,facebook,twitter]
*/


//test return
Route::get('/test', function () {
    return 'test';
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
