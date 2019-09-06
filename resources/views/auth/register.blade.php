@extends('layouts.app')

@section('content')
<b-container>
        <b-row align-h="center">
            <b-col cols="8">
                <b-card-group deck>
                    <b-card header="Registro"
                            footer="By eferreyro"
                            title="ALTA DE USUARIOS"
                            class="my-3"
                    >

                    @if($errors->any())
                    <b-alert show variant="danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </b-alert>
                    @else
                        <b-alert show>
                            por favor ingresa tus datos:
                        </b-alert>
                    @endif
                
                <b-form  method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

            <b-form-group
                    label="Nombre completo" label-for="name"
                    description="Ingresa tu nombre completo">
                    <b-form-input type="text"
                        id="name" name="name"
                        value="{{ old('name') }}" required autofocus
                        placeholder="Nombre y Apellido">
                    </b-form-input>
            </b-form-group>

            <b-form-group
                label="Email" label-for="email"
                description="Ingresa tu email. Te enviaremos una clave de cofirmacion">
                <b-form-input type="email"
                    id="email" name="email"
                    value="{{ old('email') }}" required 
                    placeholder="email@ejemplo.com">
                </b-form-input>

            </b-form-group>
            
            <b-form-group
                label="Contraseña" label-for="password"
                description="la contraseña debe ser al menos de 8 caracteres"
                >
                <b-form-input type="password"
                    id="password" name="password"
                    required 
                    placeholder="********">
                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Confirmar ontraseña" label-for="password_confirmation"
                >
                <b-form-input type="password"
                    id="password_confirmation" name="password_confirmation"
                    required 
                    placeholder="********">
                </b-form-input>
            </b-form-group>

            <b-button type="submit" variant="primary">Registrar</b-button>
            <b-button  href="{{ route('login') }}" variant="link"> Ya estoy registrado</b-button>

            </b-col>
        </b-row>
</b-container>

  
@endsection
