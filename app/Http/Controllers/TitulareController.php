<?php

namespace App\Http\Controllers;

use App\Proveedore;
use App\Empresa;
use Illuminate\Http\Request;

class TitulareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Guardar
         $proveedores = Proveedore::all();
          $empresas = Empresa::all();

        $ltempresas = Empresa::pluck('nombre', 'id'); 
        
        //Redireccionar
        return view('office.titular.index', compact('proveedores', 'empresas',  'ltempresas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('titular.create');

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
        Titulare::create($request->all());
      
        //Redireccionar
        return redirect()->route('titulares.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //Guardar
        $titulares = Titulare::findOrFail($id);

        //Redireccionar
        return view('office.titular.show', compact('titulares'));  

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        //Guardar
        $deposito = Deposito::findOrFail($id);

        //Redireccionar
        return view('office.titular.show', compact('deposito'));

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
