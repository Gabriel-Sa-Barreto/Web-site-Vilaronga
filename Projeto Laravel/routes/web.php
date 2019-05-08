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
    return view('fixas.sobreNos');
});

Route::get('/traducao', function () {
    return view('fixas.servicos');
});

Route::get('/login', function () {
    return view('fixas.login');
});

Route::get('/perguntas', function () {
    return view('fixas.perguntasFrequentes');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('adm')->group(function(){
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

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

    Route::get('/gerenciarAlunos/listagemDeTurma', 'AdminController@listagemDeTurma'); //rota para listagem de turmas por curso

    Route::post('/gerenciarCursos/listagemDeTurma/visualizar', 'AdminController@listagemDeAlunosTurma'); //rota para visualização de alunos em uma turma

    Route::get('/gerenciarProfessores', function(){ return view('adm.gerenciarProfessores');}); 

    Route::get('/gerenciarProfessores/novo', 'TeacherController@create');  //tela de formulário para cadastro de um professor

    Route::post('/gerenciarProfessores/novo/salvar', 'TeacherController@store');  //rota para salvar um novo professor

    Route::get('/gerenciarProfessores/deletar/{id}', 'TeacherController@listagemDeProfessores'); //rota para selecionar qual professor deseja-se deletar  

    Route::get('/gerenciarProfessores/deletar/salvar/{id}', 'TeacherController@destroy'); //rota para deletar um professor por completo

    Route::get('/gerenciarProfessores/vincularDesvincular/{id}', 'TeacherController@listagemDeProfessores'); //rota de listagem de professores com o objetivo de vincular ou desvincular algum

    Route::post('/gerenciarProfessores/vincular','TeacherController@vincular'); //rota para salvar vinculação de um professor em uma turma.

    Route::post('/gerenciarProfessores/desvincular','TeacherController@desvincular'); //rota para salvar desvinculação de um professor em uma turma.
});

Route::prefix('aluno')->group(function(){
	Route::get('/', 'AlunoController@index')->name('aluno.dashboard');
	Route::get('/login', 'Auth\AlunoLoginController@showLoginForm')->name('aluno.login');
	Route::post('/login', 'Auth\AlunoLoginController@login')->name('aluno.login.submit');
    Route::get('/dados', 'AlunoController@edit');
    Route::post('/editar', 'AlunoController@update');
    Route::get('/material' , 'MaterialController@index');
    Route::get('/aviso' , 'AvisoController@index');

    Route::get('/visualizarNotas', 'AlunoController@telaVisualizarNota'); //rota para visualizar as notas que o aluno possue em cada turma ao qual ele pertence.

    Route::get('/visualizarNotas/turmaEscolhida/{id}', 'AlunoController@mostrarNotas'); //rota para visualizar as notas da turma que o aluno escolheu.
});

Route::prefix('material')->group(function(){
    Route::get('/criar','MaterialController@create');
    Route::post('/novo','MaterialController@store');
    Route::get('/lista','MaterialController@index');
    Route::get('/download/{id}','MaterialController@download');
    Route::get('/remover/{id}','MaterialController@destroy');
});

Route::prefix('aviso')->group(function(){
    Route::get('/criar','AvisoController@create');
    Route::post('/novo','AvisoController@store');
    Route::get('/lista','AvisoController@index');
    Route::get('/remover/{id}','AvisoController@destroy');
});

Route::prefix('professor')->group(function(){
    Route::get('/', 'ProfController@index')->name('prof.dashboard');
    Route::get('/login', 'Auth\ProfLoginController@showLoginForm')->name('prof.login');
    Route::post('/login', 'Auth\ProfLoginController@login')->name('prof.login.submit');
    Route::post('/novo', 'TeacherController@store'); //rota para salvar os dados de novo professor
    Route::get('/gerenciarMaterial',function(){ return view('professor.gerenciarMaterial'); }); //tela para opções de gerenciar os materiais

    Route::get('/gerenciarAviso',function(){ return view('professor.gerenciarAviso'); }); //tela para opções de gerenciar os avisos

    Route::get('/gerenciarTurmas', 'ProfController@gerenciarTurmas'); //rota para a tela de gerencias turmas ao qual o usuário professor pertence 

    Route::get('/gerenciarTurmas/listagemDeAlunos/{id}', 'ProfController@alunosTurma'); //rota para a listagem de alunos de determinada turma

    Route::get('/gerenciarTurmas/notasTurma/{id}', 'ProfController@listagemAlunos'); //rota para listagem de alunos de uma turma em uma tabela para colocação de notas

    Route::post('/gerenciarTurmas/notasTurma/salvar', 'ProfController@formularioNota'); //exibi formulário para colocar valor da nota e descrição

    Route::post('/gerenciarTurmas/notasTurma/salvarNota', 'ProfController@salvarNota'); //salvar o valor da nota e a sua descrição
});

