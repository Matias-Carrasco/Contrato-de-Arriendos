<?php

namespace App\Http\Controllers;

use App\Models\Anexo;
use App\Models\Contrato;
use App\Models\Estado;
use Illuminate\Http\Request;

class AnexoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['anexo']=anexo::paginate();
        return view('anexo.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contratos=Contrato::all();
        $estados=Estado::all();
        return view('anexo/create',compact('contratos','estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'ID_contrato'=>'required|integer',
            'ID_estado' => 'required|integer',
            'PDF_anexo' => 'required|string|'
        ];
        $mensaje=[
            "ID_contrato.required"=>'El contrato es requerido',
            "ID_estado.required"=>'El estado es requerido',
            "PDF_anexo.required"=>'El PDF es requerido'
            ];
        $this->validate($request,$campos,$mensaje);
        $datosanexo=$request->except('_token');
        Anexo::insert($datosanexo);
        return redirect('/anexo');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anexo  $anexo
     * @return \Illuminate\Http\Response
     */
    public function show(Anexo $anexo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anexo  $anexo
     * @return \Illuminate\Http\Response
     */
    public function edit(Anexo $anexo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anexo  $anexo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anexo $anexo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anexo  $anexo
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID_anexo)
    {
        anexo::destroy($ID_anexo);
        return redirect('/anexo');
    }
}
