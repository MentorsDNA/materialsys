<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Empresa;
use App\Proveedore;
use App\Http\Requests\CreateProveedoreRequest;


class ProveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    
    public function index()
    {

        //Visualizar
           $empresas = Empresa::all();
        $proveedores = Proveedore::all();

        //Visualizar para SELECT
         $ltempresas = Empresa::pluck('nombre', 'id'); 

        //Redireccionar
        return view('office.proveedor.index', compact('empresas', 'proveedores', 'ltempresas'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Guardar
        Proveedore::create($request->all());

        //Redireccionar
        return redirect()->route('proveedores.index');
    
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
    public function edit($id)
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
