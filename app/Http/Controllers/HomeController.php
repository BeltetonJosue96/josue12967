<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $empleados = DB::table('registro_de_empleados')
            ->join('users','users.id','=','registro_de_empleados.usuario')
            ->select('registro_de_empleados.cod_empleado',
                'users.name AS usuario',
                'registro_de_empleados.nombre_empleado',
                'registro_de_empleados.numero_telefono',
                'registro_de_empleados.correo',
                'registro_de_empleados.direccion',
                'registro_de_empleados.departamento')
            ->orderBy('registro_de_empleados.cod_empleado')
            ->paginate(20);

        return view ('home', compact('empleados'));
    }
}
