<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Deposito;
use App\Empresa;
use App\Cuenta;
use App\Banco;
use App\Proveedore;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Guardar
          $depositos = Deposito::all();
           $empresas = Empresa::all();
            $cuentas = Cuenta::all();
             $bancos = Banco::all();
        $proveedores = Proveedore::all();


        //agregado
            $ltempresas = Empresa::pluck('nombre', 'id'); 
             $ltcuentas = Cuenta::pluck('numero_cuenta', 'id'); 




        //Redireccionar
        return view('office.deposito.index', compact('depositos', 'empresas', 'cuentas', 'bancos', 'proveedores', 'ltempresas', 'ltcuentas'));


        /*public function getTitular(Request $request, $id){
            if($request->ajax()){
                $vertitular = Titulare::$titularss($id);
                return response()->json($vertitular);
            }
        }*/

    }
/*
    public function verProveedor(Request $request, $id)
    {
        if($request->ajax())
        {
            $proveedores = Proveedore::proveedores($id);
           return response()->json($proveedores); 
        }

    }

    public function verCuenta(Request $request, $id)
    {
        if($request->ajax())
        {
            $cuentas = Cuenta::cuentas($id);
           return response()->json($cuentas); 
        }

    }
*/


    public function prodfunct()
    {
        $prod = ProductCat::all();
        return view('productlist',compact('prod'));
    }

    public function findProductName(Request $request)
    {
        $data = Product::select('productname','id')->where('prod_cat_id',$request->id)->take(100)->get();
        //$request->id
        return response()->json($data);
    }

    public function findPrice(Request $request)
    {
        $p = Product::select('price')->where('id',$request->id)->first();
        //$request->id
        return response()->json($p);
    }
////////


    public function verEmpresa()
    {
        $empresass = Empresa::all();
        return view('office.deposito.index',compact('empresass'));
    }

    public function hallarProveedor(Request $request)
    {
        $data = Proveedore::select('nombres','id')->where('proveedor_empresa_id',$request->id)->take(10)->get();
        //$request->id
        return response()->json($data);
    }

    public function hallarCuenta(Request $request)
    {
        $p = Cuenta::select('numero_cuenta','id')->where('proveedor_id',$request->id)->take(10)->get();
        //$request->id
        return response()->json($p);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('office.deposito.create');

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
        Deposito::create($request->all());
      
        //Redireccionar
        return redirect()->route('depositos.index');

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
