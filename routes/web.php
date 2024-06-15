<?php

use App\Http\Controllers\Budgets\BudgetController;
use App\Http\Controllers\Clients\ClientController;
use App\Http\Controllers\Sellers\SellerController;
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

Route::get("/budgets", [BudgetController::class, 'index'])->name('budgets.budget_home');
Route::get("/budgets/create", [BudgetController::class, 'create'])->name('budgets.budget_create');
Route::post("/budgets/create", [BudgetController::class, 'store']);
Route::get("/budgets/{id}/edit",[BudgetController::class, 'show'])->name('budgets.budget_edit');
Route::put("/budgets/{id}/edit",[BudgetController::class, 'edit']);
Route::delete("/budgets/{id}/delete",[BudgetController::class, 'destroy']);

Route::get("/clients", [ClientController::class, 'index'])->name('clients.client_home');
Route::get("/clients/create", [ClientController::class, 'create'])->name('clients.client_create');
Route::post("/clients/create", [ClientController::class, 'store']);
Route::get("/clients/{id}/edit",[ClientController::class, 'show'])->name('clients.client_edit');
Route::put("/clients/{id}/edit",[ClientController::class, 'edit']);
Route::delete("/clients/{id}/delete",[ClientController::class, 'destroy']);

Route::get("/sellers", [SellerController::class, 'index'])->name('sellers.seller_home');
Route::get("/sellers/create", [SellerController::class, 'create'])->name('sellers.seller_create');
Route::post("/sellers/create", [SellerController::class, 'store']);
Route::get("/sellers/{id}/edit",[SellerController::class, 'show'])->name('sellers.seller_edit');
Route::put("/sellers/{id}/edit",[SellerController::class, 'edit']);
Route::delete("/sellers/{id}/delete",[SellerController::class, 'destroy']);
