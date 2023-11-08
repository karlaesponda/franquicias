@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{asset('css/login/css/login.css')}}">
@endsection

@section('title', 'CDatos tarjeta')

@section('content')

<form method="POST" class="form" action="#" novalidate>
    @csrf
    <br>
    <br>
    <h2>Procesamiento de pago</h2>
    <div class="content-login">
        <div class="input-content">
            <input type="text" name="#" placeholder="Número de tarjeta"
                value="{{old('#')}}" autofocus>

            @error('tarjeta')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span> 
            @enderror


        </div>

        <div class="input-content">
            <input type="text" name="#" placeholder="Fecha de vencimiento"
                value="{{old('#')}}" 
                autofocus>

            @error('fecha_vencimiento')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span>                
            @enderror

        </div>

        <div class="input-content">
            <input type="text" name="nip" placeholder="NIP (3 dígitos)"
                value="{{ old('nip') }}"
                autofocus
                pattern="[0-9]{4}"  <!-- Solo permite números y debe tener 4 dígitos -->
                maxlength="3"  <!-- Limita la longitud del campo a 4 caracteres -->
                required> <!-- Hace que el campo sea obligatorio -->

            @error('nip')
            <span class="alert-red">
                <span>*{{ $message }}</span>
            </span>                
            @enderror
        </div>


        <div class="input-content">
            <input type="text" name="cp" placeholder="CP"
                value="{{old('cp')}}" 
                autofocus>

            @error('cp')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span>                
            @enderror

        </div>

        <div class="input-content">
            <input type="text" name="telefono" placeholder="Teléfono"
                value="{{old('telefono')}}" 
                autofocus>

            @error('telefono')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span>                
            @enderror

        </div>

        <div class="input-content">
            <input type="text" name="email" placeholder="Correo eléctronico"
                value="{{old('email')}}" 
                autofocus>

            @error('email')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span>                
            @enderror

        </div>

        <div class="input-content">
            <input type="password" name="password" placeholder="Contraseña">

            @error('password')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span>                
            @enderror

        </div>

        <div class="input-content">
            <input type="password" name="password_confirmation" placeholder="Confirmar contraseña">
        </div>
    </div>

    <input type="submit" value="Registrarse" class="button">
    <p>¿Ya tienes una cuenta? <a href="{{route('login')}}" class="link">Iniciar sesión</a></p>
</form>
@endsection
