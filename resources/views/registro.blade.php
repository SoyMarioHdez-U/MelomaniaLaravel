@extends('plantilla')
@section('content')
    
    <div class="cont">
    <div class="form sign-in">
        <h2>¡Bienvenido de nuevo!</h2>
        <label>
        <span>Email</span>
        <input type="email" />
        </label>
        <label>
        <span>Contraseña</span>
        <input type="password" />
        </label>
        <p class="forgot-pass">¿Olvidaste tu contraseña?</p>
        <button type="button" class="submit">Entrar</button>
    </div>
    <div class="sub-cont">
        <div class="img">
        <div class="img__text m--up">
            <h2>¿No tienes una cuenta?</h2>
            <p>Regístrate para disfrutar de todos los beneficios de estar registrado con nosotros.</p>
        </div>
        <div class="img__text m--in">
            <h2>¿Tienes una cuenta?</h2>
            <p>Si ya tienes una cuenta con nosotros, ¡sólo inicia sesión!</p>
        </div>
        <div class="img__btn">
            <span class="m--up">Registrarse</span>
            <span class="m--in">Entrar</span>
        </div>
        </div>
        <div class="form sign-up">
        <h2>¡Bienvenido a la familia <b>Melomanía</b>!</h2>
        <label>
            <span>Nombre</span>
            <input type="text" />
        </label>
        <label>
            <span>Apellido</span>
            <input type="text" />
        </label>
        <label>
            <span>Email</span>
            <input type="email" />
        </label>
        <label>
            <span>Contraseña</span>
            <input type="password" />
        </label>
        <button type="button" class="submit">Registrarse</button>

        </div>
    </div>
    </div>
@endsection