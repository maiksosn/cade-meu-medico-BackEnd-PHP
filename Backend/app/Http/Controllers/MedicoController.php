<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medico = Medico::paginate(10);
        return json_encode($medico);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medico = $request->all();
        $medico = Medico::create($medico);
        return json_encode($medico);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Altera os dados do Médico
        // $validade = $request->validate([

        //     'CRM' => 'required|string|max::2',
        //     'nome' => 'required|string|max::255',
        //     'endereco' => 'required|string|max::255',
        //     'bairro' => 'required|string|max::255',
        //     'email' => 'required|string|max::255',
        //     'atendeporconvenio' => 'required|boolean|max::255',
        //     'temclinica' => 'required|boolean|max::255',
        //     'websiteblog' => 'required|string|max::255',

        // ]);

        //\DB::enableQueryLog();
        $medico = Medico::find($id);
        //dd(\DB::getQueryLog());
        //dd($medico);
        $res = $request->all();
        $medico->update($res);
        return json_encode($medico);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Função que deleta médico
    public function destroy($id)
    {
        $medico = Medico::find($id);
        $medico->delete();
        return json_encode(['message' => 'Medico deletado com sucesso!']);
    }
}
