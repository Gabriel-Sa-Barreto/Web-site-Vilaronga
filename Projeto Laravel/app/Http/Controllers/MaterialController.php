<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Turma;
use App\Material;
use DB;
use Auth;
//use App\Curso;

class MaterialController extends Controller
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
            $materiais = collect([]);
            $user = Auth::guard('professor')->user();
            $turmas = DB::table('turmas')->where('curso_id', '=', $user->curso_id)->get();
            foreach ($turmas as $turma){
                $materiaisPerTurma = DB::table('materials')->where('turma_id', '=', $turma->id)->get();
                $materiais = $materiais->concat($materiaisPerTurma);
            }
            return view('lista_Materiais' , compact('materiais'));
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
            $turmas = DB::table('turmas')->where('curso_id', '=', $user->curso_id)->get();//retorna todos as turmas disponíveis no banco para associação com um novo arquivo
            return view('novoTurma_Material', compact('turmas'));
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
        //verifica todos os arquivos a serem colocados
        if($request->hasFile('arquivo')){
            $allowedfileExtension = ['pdf','jpg','png'];
            $file = $request->file('arquivo');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension,$allowedfileExtension);
            if($check){
                $file->move(public_path().'/materiais/', $filename);
                $material = new Material();
                $material->nome = $filename;
                $nomeTurma = $request->input('nomeTurma');
                $turmaID = Turma::Where('nivel', $nomeTurma)->get()->first();
                $material->turma_id = $turmaID->id;
                $material->save();
            }
        }    
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($id)
    {
        $material = Material::find($id);
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download( public_path() . '\materiais/' . $material->nome , $material->nome , $headers);
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
        //
    }
}
