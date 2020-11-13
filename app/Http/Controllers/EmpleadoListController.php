<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empleado;

class EmpleadoListController extends Controller
{
    //
    public function list(){
        $empleados = Empleado::all();
        return response()->json($empleados, 200);
    }
}
