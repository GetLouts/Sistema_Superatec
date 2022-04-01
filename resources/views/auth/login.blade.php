@extends('layouts.auth_app')
@section('title')
    Admin Login
@endsection
@section('content')
    <div class="card bg-white caja p-1">
        <div class="card-header justify-content-center">
            <img src="{{ asset('img/logo.png') }}" alt="logo" width="300" class="">
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger p-0">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="email">Email</label>
                    <input aria-describedby="emailHelpBlock" id="email" type="email"
                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                        placeholder="Ingresar Email" tabindex="1"
                        value="{{ Cookie::get('email') !== null ? Cookie::get('email') : old('email') }}" autofocus
                        required>
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Contraseña</label>
                    </div>
                    <input aria-describedby="passwordHelpBlock" id="password" type="password"
                        value="{{ Cookie::get('password') !== null ? Cookie::get('password') : null }}"
                        placeholder="Ingresar Contraseña"
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                        tabindex="2" required>
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember"
                            {{ Cookie::get('remember') !== null ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">Recordar Contraseña</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-block btn-success" tabindex="4" id="inicio">
                        Iniciar Sesion
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
