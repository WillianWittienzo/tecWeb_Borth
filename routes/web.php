<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/curso/{curso}', function ($curso) {
//     return "Curso: $curso";
// });

// Route::get('/aluno/{nome?}', function ($nome = "Todos") {
//     return "Nome do aluno: $nome";
// });
Route::get('/alunos', function () {

    
$alunos = [
    "marcelo",
    "Douglas",
    "Pedro",
    "Thiago",
    "Caio",
    "Sofia roberta"
];


    return view('alunos',["alunos" => $alunos]);
});


// Route::get('/aluno/{id?}', function ($id) {
//     return "ID do aluno: $id";
// })->where('id','[0-9]+');

// Route::get('/alunos/{nome}', function ($nome) {
//     return view('alunos',['nome' => $nome]);
// });



// Route::get('/alunos', function(){
// return "Lista de alunos";
// })->name('alunos.index');
