<?php

namespace App\Http\Controllers;

use App\Models\Propietarios;
use Illuminate\Http\Request;

class PropietariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Propietario/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Propietario/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosPropietario=request()->all();
        $datosPropietario=$request->except('_token');
        propietarios::insert($datosPropietario);
        return response()->json($datosPropietario );
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    public function show(Propietarios $propietarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Propietarios $propietarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */create
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propietarios $propietarios)
    {
        //
    }
}
