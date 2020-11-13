<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreEmpleadoPost;

use App\Empleado;

class EmpleadoCreateController extends Controller
{
    /**
     * funcion para crear una instancia del modelo empleados
     *
     * @param Request $request
     * @return void
     */
    public function create(StoreEmpleadoPost $request){
         // Retrieve the validated input data...
        $empleado = Empleado::create($request->validated());
        return response()->json($empleado, 200);
    }
}
