<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Curso;

class TurmaController extends Controller
{
    public function index()
    {
      $turmas = Turma::all();
      return view('turma.index', compact('turmas'));
    }

    public function contato()
    {
        return view('turma.contato');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cursos = Curso::all();
        return view('turma.create', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        Turma::create($request->all());

        return redirect()->route('turma.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         $turma = Turma::find($id);
         return view('turma.show', compact('turma'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $turma = Turma::find($id);
        return view('turma.edit', compact('turma'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         $turma = Turma::find($id);
         $turma->update([
            'descricao' => $request->descricao,
         ]);
         return redirect()->route('turma.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $turma = Turma::find($id);
        $turma->delete();
        return redirect()->route('turma.index');
    }
}