<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state = State::all()->sortby('name')->toArray();
        return json_encode($state);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeArray(Request $request)
    {
        $state = [];
        foreach ($request->all() as $key => $value) {
            $state[$key] = state::create($value);
        }
        return json_encode($state);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Recebe todos os dados do formulario
        $state = $request->validate([
            // Validação dos campos
            'code' => 'required|string|max::2',
            'name' => 'required|string|max::255',
        ]);
        // Cria um novo estado
        $state = State::create($state);
        // retorna o estado criado como json
        return json_encode($state);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Buscar o estado pelo id
        $state = State::find($id);
        // Retorna o estado como json
        return json_encode($state);
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
        // Recebe todos os dados do formulario
        $validade = $request->validate([

            'code' => 'required|string|max::2',
            'name' => 'required|string|max::255',
        ]);
        $state = State::find($id);
        $state->update($validade);
        return json_encode($state);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Deleta estado
        $state = State::find($id);
        $state->delete();
        return json_encode(['message' => 'Estado deletada com sucesso!']);
    }
}
