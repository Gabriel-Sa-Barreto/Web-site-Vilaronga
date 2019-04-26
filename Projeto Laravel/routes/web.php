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
    return view('fixas.home');
});

Route::get('/ingles', function () {
    return view('cursos.ingles');
});

Route::get('/espanhol', function () {
    return view('cursos.espanhol');
});
//Route::view('/espanhol','cursos.espanhol');

Route::get('/portugues', function () {
    return view('cursos.portugues');
});

Route::get('/sobrenos', function () {
    return view('fixas.sobrenos');
});

Route::get('/traducao', function () {
    return view('fixas.servicos');
});

Route::get('/login', function () {
    return view('fixas.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('adm')->group(function(){
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/criarProfessor', 'AdminController@telaCriarProfessor');//rota para formulário de cadastro de novo professor
    Route::get('/criarProfessor/salvar', 'AdminController@storeProfessor');//rota para um salvar novo professor
    Route::get('/gerenciarAlunos',function(){ return view('adm.gerenciarAlunos'); }); //tela para opções de gerenciar os alunos

    Route::get('/gerenciarAlunos/novo',function(){ return view('adm.novoAluno');});  //tela de formulário para cadastro de um novo aluno
    Route::post('/gerenciarAlunos/novo/salvar', 'AdminController@salvarAluno');  //rota para salvar os dados do novo aluno cadastrado no sistema

    Route::get('/gerenciarAlunos/deletar','AdminController@telaDeletarAluno'); //rota para exibição da tabela contendo os alunos
    Route::get('/gerenciarAlunos/deletar/{id}','AdminController@excluirAluno'); //rota para exclusão de aluno

    Route::get('/gerenciarAlunos/listagem','AdminController@listagemDeAlunos'); //rota para listagem de alunos
    Route::get('/gerenciarAlunos/dadosCompletos/{id}','AdminController@dadosAluno'); //rota para pegar os dados completos de um aluno, incluindo cursos aos quais está cadastrado e as turmas

    Route::get('/gerenciarCursos', function(){ return view('adm.gerenciarCursos');});  
    Route::get('/gerenciarCursos/novaTurma_Curso', 'TurmaController@create');     //rota para formulário de cadastro de nova turma ou novo curso

    Route::post('/gerenciarCursos/salvarCurso', 'CursoController@store');        //rota para salvar os dados de novo curso
    Route::post('/gerenciarCursos/salvarTurma', 'TurmaController@store');         //rota para salvar os dados da nova turma

    Route::get('/gerenciarAlunos/vincularAlunoCurso', 'AdminController@vincularAlunoCurso'); //rota para escolher qual aluno irá ser vinculado a um curso e turma

    Route::post('/gerenciarCursos/escolherCurso', 'AdminController@escolherTurma'); //rota para exibir lista de alunos na vinculação de turma 

    Route::post('/gerenciarCursos/vincularTurma', 'AdminController@salvarVinculacao'); //rota para salvar vinculação de aluno com turma e curso

});

Route::prefix('aluno')->group(function(){
	Route::get('/', 'AlunoController@index')->name('aluno.dashboard');
	Route::get('/login', 'Auth\AlunoLoginController@showLoginForm')->name('aluno.login');
	Route::post('/login', 'Auth\AlunoLoginController@login')->name('aluno.login.submit');
    Route::get('/dados', 'AlunoController@edit');
    Route::post('/editar', 'AlunoController@update');
});

Route::prefix('professor')->group(function(){
    Route::get('/', 'ProfController@index')->name('prof.dashboard');
    Route::get('/login', 'Auth\ProfLoginController@showLoginForm')->name('prof.login');
    Route::post('/login', 'Auth\ProfLoginController@login')->name('prof.login.submit');
    Route::post('/novo', 'TeacherController@store'); //rota para salvar os dados de novo professor
});

Route::get('/cursos_turma/novo', 'CursoController@create');           //rota para formulário de cadastro de novo curso
Route::get('/aluno/novo', 'StudantController@create');                //rota para formulário de cadastro de novo aluno


