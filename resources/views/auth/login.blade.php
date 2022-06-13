@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-2">
             <div class="card bg-light border-primary" >
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card-header text-center text-white bg-primary">Acceso de usuario <i class="fas fa-users"></i></div>
                    <div class="card-body">

                        <div class="mb-3 ">
                            <label for="Input1" class="form-label">Correo electrónico</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerda el Correo') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }}
                                    <i class="fas fa-check-circle"></i>
                                </button>
                                <a href="/" class="btn btn-danger">Cancelar <i class="fas fa-ban"></i></a>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Recuperar la Contraseña') }}
                                    </a>
                                @endif
                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
