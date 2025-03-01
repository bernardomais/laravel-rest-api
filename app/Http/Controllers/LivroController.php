<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Livro::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Livro::create($request->all())) {
            return response()->json([
                'message' => 'Livro cadastrado com sucesso.'
            ], 201);
        }

        return response()->json([
            'message' => 'Erro ao cadastrar o livro.'
        ], 404);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $livro)
    {
        $livro = Livro::find($livro);
        if ($livro) {
            return $livro;
        }

        return response()->json([
            'message' => 'Erro ao pesquisar: livro não encontrado.'
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $livro)
    {
        $livro = Livro::find($livro);
        if ($livro) {
            $livro->update($request->all());

            return $livro;
        }

        return response()->json([
            'message' => 'Erro ao atualizar: livro não encontrado.'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $livro)
    {
        if (Livro::destroy($livro)) {
            return response()->json([
                'message' => 'Livro apagado com sucesso.'
            ], 201);
        }

        return response()->json([
            'message' => 'Erro ao apagar o livro.'
        ], 404);
    }
}
