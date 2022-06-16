<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidade = Especialidade::paginate(10);
        return json_encode($especialidade);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $especialidade = $request->all();
        $especialidade = Especialidade::create($especialidade);
        return json_encode($especialidade);
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
        $especialidade = Especialidade::find($id);
        //dd(\DB::getQueryLog());
        //dd($especialidade);
        $res = $request->all();
        $especialidade->update($res);
        return json_encode($especialidade);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $especialidade = Especialidade::find($id);
        $especialidade->delete();
        return json_encode(['message' => 'Especialidade deletada com sucesso!']);
    }
}
