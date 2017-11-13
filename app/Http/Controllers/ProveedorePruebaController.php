<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Empresa;
use App\Proveedore;
use App\ProveedorInformacion;


class ProveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Guardar
           $empresas = Empresa::all();
        $proveedores = Proveedore::all();
         $provinform = ProveedorInformacion::all();

        //agregado
            $ltempresas = Empresa::pluck('nombre', 'id'); 
         $ltproveedores = Proveedore::pluck('proveedor_informacion_id', 'proveedor_empresa_id'); 

        //Redireccionar
        return view('office.proveedor.index', compact('empresas', 'proveedores', 'provinform', 'ltempresas', 'ltproveedores'));


        //Guardar
        $bancos = Banco::all();

        //Redireccionar
        return view('office.banco.index', compact('bancos'));

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
    public function store(CreateProveedoreRequest $request)
    {


              $proveeinfo = new ProveedorInformacion($request->all());
              $proveeinfo -> save();

              $provee = new Proveedore();
              $provee->save();



     
            try {
              DB::beginTransaction();

              $proveeinfo= new ProveedorInformacion;
              $proveeinfo->nombres=$request->get('nombres');        
              $proveeinfo->apellido_paterno=$request->get('apellido_paterno');        
              $proveeinfo->apellido_materno=$request->get('apellido_materno');        
              $proveeinfo->numero_identificacion=$request->get('numero_identificacion');        
              $proveeinfo->tipo_identificacion=$request->get('tipo_identificacion');        
              $libro->save();

(Hasta este momento se hace la inserción del nombre y apellido, el id del autor se autogenera,revisar el modelo autor ahí se establece que el campo **protected $primaryKey='idlibro';** es el campo primario se supone que en tu base de datos ese atributo debe ser autoincremental)


                $proveee = new Proveedore();

                $proveee->id=$proveeinfo->id;
                $proveee->id=$proveeinfo->id;
                $proveee->id_autor=$autor->idautor;
                $proveee->titulo=$request->get('titulo_libro');  
                $proveee->save();

(Suponiendo que la tabla Libro es la que va a heredar la clave foránea del autor, date cuenta de lo siguiente. el código **$libro->id_autor=$autor->idautor;** dice que va a insertar en el atributo **id_autor** que se encuentra en la tabla Libro(Clave foránea) va a cojer el id que se genero con la primera inserción). así de fácil y sencillo con las inserciones en larvel.


              }
              DB::commit();

            } catch (Exception $e) {
              DB::rollback();
            }
            return redirect::to('libros');
          }
        }


              
     public function store(IngresoRequest $request){
            try {
              DB::beginTransaction();

              $autor= new Autor;
              $autor->nombre_autor=$request->get('nombre');        
              $autor->apellido_autor=$request->get('apellido');        
              $libro->save();

(Hasta este momento se hace la inserción del nombre y apellido, el id del autor se autogenera,revisar el modelo autor ahí se establece que el campo **protected $primaryKey='idlibro';** es el campo primario se supone que en tu base de datos ese atributo debe ser autoincremental)


                $libro = new Libro();

                $libro->titulo=$request->get('titulo_libro');  
                $libro->categoria=$request->get('categoria_libro');
                $libro->id_autor=$autor->idautor;
                $libro->save();

(Suponiendo que la tabla Libro es la que va a heredar la clave foránea del autor, date cuenta de lo siguiente. el código **$libro->id_autor=$autor->idautor;** dice que va a insertar en el atributo **id_autor** que se encuentra en la tabla Libro(Clave foránea) va a cojer el id que se genero con la primera inserción). así de fácil y sencillo con las inserciones en larvel.


              }
              DB::commit();

            } catch (Exception $e) {
              DB::rollback();
            }
            return redirect::to('libros');
          }
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
