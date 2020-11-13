<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empleado;

class EmpleadoActivationController extends Controller
{
    public function shift(Request $request, $id){
        $empleado = Empleado::find($id);

        if(empty($empleado)){
            return response()->json(["error"=>"empleado no encontrado"], 422);
        }else{
            $empleado->estado = !$empleado->estado;
            $empleado->save();
        }

        return response()->json($empleado, 200);
    }
}
