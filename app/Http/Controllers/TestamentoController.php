<?php

namespace App\Http\Controllers;

use App\Models\Testamento;
use Illuminate\Http\Request;

class TestamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Testamento::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Testamento::create($request->all())) {
            return response()->json([
                'message' => 'Testamento cadastrado com sucesso.'
            ], 201);
        }

        return response()->json([
            'message' => 'Erro ao cadastrar o testamento.'
        ], 404);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $testamento)
    {
        $testamento = Testamento::find($testamento);
        if ($testamento) {
            return $testamento;
        }

        return response()->json([
            'message' => 'Testamento não encontrado.'
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $testamento)
    {
        $testamento = Testamento::find($testamento);
        if ($testamento) {
            $testamento->update($request->all());

            return $testamento;
        }

        return response()->json([
            'message' => 'Testamento não encontrado.'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $testamento)
    {
        if (Testamento::destroy($testamento)) {
            return response()->json([
                'message' => 'Testamento apagado com sucesso.'
            ], 201);
        }

        return response()->json([
            'message' => 'Erro ao apagar o testamento.'
        ], 404);
    }
}
