<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Censo;


class CensosController extends Controller
{
    //
    public function store(Request $request)
    {
       
        $request->validate([

            'nrodefamilia'=> 'required|min:1',
            'parroquia'=> 'required|min:1',
            'eje'=> 'required|min:1',
            'tipoclap'=> 'required|min:1',
            'comunidad'=> 'required|min:1',
            'grupofam'=> 'required|min:1',
            'nombreyapellido'=> 'required|min:1'
 
        ]);
        
        
        $censo = new Censo;
        $censo->nrodefamilia = $request->nrodefamilia;
        $censo->parroquia = $request->parroquia;
        $censo->eje = $request->eje;
        $censo->tipoclap = $request->tipoclap;
        $censo->comunidad = $request->comunidad;
        $censo->grupofamiliar = $request->grupofam;
        $censo->nombreyapellido = $request->nombreyapellido;
        $censo->cedula = $request->cedula;
        $censo->fechanac = $request->fechanac;
        $censo->telefono = $request->telefono;
        $censo->direccion = $request->direccion;
        $censo->email = $request->email;
        $censo->serialcarnet = $request->serialcarnet;
        $censo->codigocarnet = $request->codigocarnet;
  
        $censo->save();
         
        return redirect()->route('todos')->with('success', 'Registro ingresado Correctamente');
       
    }
    public function index()
    {
       // $todos = Censo::all();
       $todos = Censo::orderBy('id', 'desc')->get();

        return view('todos.index', ['todos' => $todos ]);
    }
    public function show($id)
    {
        $todo = Censo::find($id);
        return view('todos.show', ['todo' => $todo ]);
    }
    public function update(Request $request, $id)
    {
        $censo = Censo::find($id);

        $censo->nrodefamilia = $request->nrodefamilia;
        $censo->parroquia = $request->parroquia;
        $censo->eje = $request->eje;
        $censo->tipoclap = $request->tipoclap;
        $censo->comunidad = $request->comunidad;
        $censo->grupofamiliar = $request->grupofam;
        $censo->nombreyapellido = $request->nombreyapellido;
        $censo->cedula = $request->cedula;
        $censo->fechanac = $request->fechanac;
        $censo->telefono = $request->telefono;
        $censo->direccion = $request->direccion;
        $censo->email = $request->email;
        $censo->serialcarnet = $request->serialcarnet;
        $censo->codigocarnet = $request->codigocarnet;

        $censo->save();
        //dd($request);

         return redirect()->route('todos')->with('success', 'Registro Actualizado');
    }
    public function destroy($id)
    {
        $todo = Censo::find($id);
        $todo->delete();

         return redirect()->route('todos')->with('success', 'Registro Eliminado');
    }
}
