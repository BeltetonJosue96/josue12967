<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class AdminController
 * @package App\Http\Controllers
 */
class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado = empleado::paginate();
        $infoUser = User::pluck('name','id');
        return view('home', compact('empleado','infoUser'))
            ->with('i', (request()->input('page', 1) - 1) * $empleado->perPage());
    }
}
