@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card-group deck>
                <b-card header="Ingreso al Chat"
                    footer="By eferreyro"
                    title="LOGIN"
                    >
                    <b-alert show>
                        por favor ingresa tus datos:
                    </b-alert>
            
                <b-form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                    <b-form-group
                        label="Nombre de Usuario"
                        label-for="email"
                        description="La suplantacion de identidad es un tema delicado, dejalo para los ignorantes."
                    >
                    <b-form-input
                        id="email"
                        name="email"

                        type="email"
                        placeholder="Ingresa tu Usuario"
                        value="{{ old('email') }}" 
                        required
                        autofocus
                    ></b-form-input>
                    </b-form-group>
                    <b-form-group
                   
                    label="Contraseña"
                    label-for="password"
                    
                >
                    <b-form-input
                    id="password"
                    name="password"

                    type="password"
                    placeholder="*******"
                    value="{{ old('password') }}" 
                    required
                ></b-form-input>
                    </b-form-group>
                <b-form-checkbox name="remember" {{ old('remember') ? 'checked="true"' : '' }}>
                Mantener mi sesion iniciada

              </b-form-checkbox>
            </b-form-group>
                  
                  
                            <b-button type="submit" variant="primary">Go Login</b-button>
                            <b-button  href="{{ route('password.request') }}" variant="link"> Olvide mi clave</b-button>
 
                    
                </b-form>


            </b-card>



        </b-col>
    </b-row>
</b-container>
@endsection
