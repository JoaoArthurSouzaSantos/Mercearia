<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ItensVendaController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('clientes', ClienteController::class);
Route::resource('produtos', ProdutoController::class);
Route::resource('estoques', EstoqueController::class);
Route::resource('vendas', VendaController::class);
Route::post('/vendas/{vendaId}/itens', [ItensVendaController::class, 'store'])->name('itens_venda.store');
Route::delete('/vendas/{vendaId}/itens/{itemId}', [ItensVendaController::class, 'destroy'])->name('itens_venda.destroy');
