<?php

namespace App\Http\Controllers;

use App\Banco;
use App\Cuenta;
use App\Empresa;
use App\Proveedore;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Guardar
            $bancos      = Banco::all();
            $cuentas     = Cuenta::all();
            $empresas    = Empresa::all();
            $proveedores = Proveedore::all();

        //Visualizar para SELECT
            $ltbancos    = Banco::pluck('nombre', 'id'); 
        /* 
         Consulta usando DB
         $selproveedores = DB::table('proveedores')->select('id', 'nombres', 'apellido_paterno', 'apellido_materno')->get();
         */

        //Redireccionar
        return view('office.cuenta.index', compact('bancos', 'cuentas', 'empresas', 'proveedores', 'ltbancos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('office.cuenta.create');

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
        Cuenta::create($request->all());
      
        //Redireccionar
        return redirect()->route('cuentas.index');

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
