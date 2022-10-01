<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Models\Pessoa;

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

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/listar', [PetsController::class, 'listarpets']);


Route::get('/editar/{id}',function($id){

    $pets = Pessoa::find($id);
    return view('editar', ['pets' => $pets]);
});

Route::get('/excluir/{id}',function($id){
    //dd($request->all());

    $pets = Pets::find($id);
    $pets->delete();

    echo '<alert>Cadastro excluido com sucesso!</alert>';
});

/* Post Method */

Route::post('/inserir-pets', [PetsController::class, 'store']);

Route::post('/editar-pets/{id}',[PetsController::class, 'update']);
