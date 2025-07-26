<?php

//ruta del controlador dentro de la carpeta
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller; //clase base para controladores
use Illuminate\Http\Request; //clase base para peticiones HTTP
use App\Models\Configuraciones; //clase base para modelo configuraciones

class ConfiguracionesController extends Controller
{
   
    //Index obtiene todas las configuraciones
    public function index()
    {
        //trae todas las confifuraciones de la BD
        $configuraciones = Configuraciones::all();

        //Devuelve esas configuraciones en formato Json
        return response()->json($configuraciones);
    }


    public function show($id) //Metodo GET
    {
        //Busca datos por su ID
        $config = Configuraciones::find($id);

        //Si no la encuentra devolvemos un 404
        if(!$config){
            return response()->json(['message' => 'Configuracion no encontrada'], 404);
        }

        //Si encuentra la devuelve en formato json
        return response()->json($config);
    }


    public function store(Request $request) //Metodo POST
    {
        //Validamos los datos que llegan desde el front
        $validated = $request->validate([
            'stock_bajo' => 'required|integer',
            'stock_critico' => 'required|integer',
            'dias_vencimiento' => 'required|integer'
        ]);

        //Creamos la nueva configuracion con los datos recibidos
        $config = Configuraciones::create($validated);

        //retornamos como json con codigo 201 (creado)
        return response()->json($config, 201);
    }

    //metodo usado para actualizar una configuracion 
    public function update(Request $request, $id) //Metodo UPDATE
    {
        //buscamos los datos por id
        $config = Configuraciones::find($id);

        //Si no encuentra la configuracion envia 404
        if (!$config) {
            return response()->json(['message' => 'Configuración no encontrada'], 404);
        }

        //Validamos los datos que llegan desde el front
        $validated = $request->validate([
            'stock_bajo' => 'required|integer',
            'stock_critico' => 'required|integer',
            'dias_vencimiento' => 'required|integer'
        ]);

        //actualizamos la nueva configuracion
        $config->update($validated);

        return response()->json($config);
    }


    public function destroy($id) //Metodo DELETE
    {
        $config = Configuraciones::find($id);

        //Si no la encuentra devolvemos un 404
        if(!$config){
            return response()->json(['message' => 'Configuracion no encontrada'], 404);
        }

        $config -> delete();

        return response()->json(['message' => 'Configuracion eliminada']);
    }
}
