<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Turma;
use App\Aviso;
use DB;
use Auth;
use Carbon;

class AvisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guard('professor')->check()) {
            // The user is logged in...
            //$materiais = collect([]);
            $user = Auth::guard('professor')->user();
            /*$turmas = DB::table('turmas')->where('professor_id', '=', $user->id)->get();
            foreach ($turmas as $turma){
                $materiaisPerTurma = DB::table('materials')->where('turma_id', '=', $turma->id)->get();
                $materiais = $materiais->concat($materiaisPerTurma);
            }*/
            $avisos = DB::table('avisos')->join('turmas', 'avisos.turma_id','=','turmas.id')
                                         ->select('avisos.*' , 'turmas.nivel')->Where('professor_id','=', $user->id)->get();
            return view('lista_Avisos' , compact('avisos'));
        }
        if(Auth::guard('aluno')->check()){
            //$materiais = collect([]);
            $userAluno = Auth::guard('aluno')->user();
            /*$turmas = DB::table('posses')->where('aluno_id', '=', $userAluno->id)->get();
            foreach ($turmas as $turma){
                $materiaisPerTurma = DB::table('materials')->where('turma_id', '=', $turma->turma_id)->get();
                $materiais = $materiais->concat($materiaisPerTurma);
            }*/
            $avisos = DB::table('avisos')->join('notas', 'avisos.turma_id','=','notas.id_turma')
                                         ->join('turmas', 'avisos.turma_id','=','turmas.id')
                                         ->select('avisos.*' , 'turmas.nivel')->Where([ ['aluno_id','=', $userAluno->id],['trimestre','=',1]])->get();
            return view('alunos.lista_Avisos_Aluno' , compact('avisos'));
        }
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::guard('professor')->check()) {
            $user = Auth::guard('professor')->user();
            $turmas = DB::table('turmas')->where('professor_id', '=', $user->id)->get();//retorna todos as turmas disponíveis no banco para associação com um novo arquivo
            return view('novoAviso', compact('turmas'));
        }
        return redirect('/');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mytime = Carbon\Carbon::now('America/Bahia');
        $new_aviso = new Aviso();
        //$new_aviso->data = $mytime->toDateTimeString();
        $split = $mytime->toDateString();
        $tempo = $mytime->toTimeString();
        $date = explode('-', $split, 3);
        $data = $date[2]."/".$date[1]."/".$date[0]."-".$tempo;
        $new_aviso->data = $data;
        $new_aviso->titulo = $request->input('titulo');
        $new_aviso->aviso = $request->input('aviso');
        $nomeTurma = $request->input('nomeTurma');
        $turmaID = Turma::Where('nivel', $nomeTurma)->get()->first();
        $new_aviso->turma_id = $turmaID->id;
        $new_aviso->save();
        return back()->with('success', 'Data Your files has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aviso = Aviso::find($id);
        $aviso->delete();
        return back()->with('success', 'Data Your files has been successfully removed');
    }
}
