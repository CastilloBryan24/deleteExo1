<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

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

Route::get("/membre", [MemberController::class, "index"]);
Route::get("/homme", [MemberController::class, "homme"]);
Route::get("/femme", [MemberController::class, "femme"]);
Route::get("/backoffice", [MemberController::class, "backoffice"]);

Route::post("/member-store", [MemberController::class, "store"]);
Route::post("/delete-member/{id}", [MemberController::class, "destroy"]);