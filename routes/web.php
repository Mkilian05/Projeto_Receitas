<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ReceitasController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::name('receitas.')->prefix('receitas')->group(function(){
    // Rotas de visualização de páginas
    Route::get('adicionar-receitas', [ReceitasController::class, 'viewPage'])->name('addrec');
    Route::get('gerenciar-receitas', [ReceitasController::class, 'viewAdmin'])->name('admrec');
    Route::get('receitas', [ReceitasController::class, 'viewReceitas'])->name('ver-receita');

    // Rotas de gerência
    Route::post('salvar-receita', [ReceitasController::class, 'store'])->name('store-rec');
    Route::post('receita/excluir/{id?}', [ReceitasController::class, 'delete'])->name('del-rec');
    Route::get('editar/{id}', [ReceitasController::class, 'viewEditRec'])->name('view-edit-rec');
    Route::put('confirmar-edicao/{id}', [ReceitasController::class, 'updateRec'])->name('update-edit-rec');
});
