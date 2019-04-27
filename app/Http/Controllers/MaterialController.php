<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Turma;
use App\Material;
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
        $materiais = Material::all();
        return view('lista_Materiais' , compact('materiais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $turmas = Turma::all(); //retorna todos as turmas disponíveis no banco para associação com um novo arquivo
       
       return view('novoTurma_Material', compact('turmas'));
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
                return back()->with('success', 'Data Your files has been successfully add'); 
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
