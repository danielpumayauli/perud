@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="post" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="header text-center" style="background-color: #46A760">
                            <h4 style="color: white">Iniciar Sesión</h4>
                            <!-- <div class="social-line">
                                <a href="#pablo" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div> -->
                        </div>
                        <p class="text-divider">Ingrese sus datos</p>
                        <div class="content">

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <input id="email" type="email" name="email" class="form-control" placeholder="Correo electrónico..." value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" class="form-control" placeholder="Contraseña..." class="form-control" name="password" required />
                            </div>

                           
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{old('remember') ? 'checked' : '' }} >
                                    Recordar Sesión
                                </label>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg" style="color: #46A760; border: 1px solid #46A760; border-radius: 5px ">Ingresar</button>
                            <a href="{{url('/')}}" class="btn btn-simple btn-default btn-lg" style="border: 1px solid grey; border-radius: 5px ">Cancelar</a>
                        </div>
                        <!--<a href="{{route('password.request')}}" class="btn btn-link">For got your password?</a>-->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="">
                            PERUD
                        </a>
                    </li>
                    <li>
                        <a href="">
                           Nosotros
                        </a>
                    </li>
                    <li>
                        <a href="">
                           Blog
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Condiciones
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy; 2017, hecho por <i class="fa fa-heart heart"></i> by <a href="" target="_blank">AQUAVIP</a>
            </div>
        </div>
    </footer> -->

</div>
@endsection
