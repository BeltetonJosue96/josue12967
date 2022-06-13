@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard de Empleados') }}</div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="thead">
                        <tr>
                            <th>Cod. Empleado</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Dirección </th>
                            <th>Departamento</th>
                            <th>Usuario que Registra</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->cod_empleado}}</td>
                                <td>{{ $empleado->nombre_empleado}}</td>
                                <td>{{ $empleado->numero_telefono}}</td>
                                <td>{{ $empleado->correo}}</td>
                                <td>{{ $empleado->direccion}}</td>
                                <td>{{ $empleado->departamento}}</td>
                                <td>{{ $empleado->usuario}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            {!! $empleados->links() !!}
        </div>
    </div>
</div>
@endsection
