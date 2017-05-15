@extends('app')

@section('content')

    <div class="navbar navbar-fixed-top">

        <div class="navbar-inner">

            <div class="container">

                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <a class="brand" href="index.html">
                    Mi página
                </a>

                <div class="nav-collapse">
                    <ul class="nav pull-right">

                        <li class="">
                            <a href="signup.html" class="">
                                ¿No está registrado?
                            </a>

                        </li>

                        <li class="">
                            <a href="index.html" class="">
                                <i class="icon-chevron-left"></i>
                                Ir a inicio
                            </a>

                        </li>
                    </ul>

                </div><!--/.nav-collapse -->

            </div> <!-- /container -->

        </div> <!-- /navbar-inner -->

    </div> <!-- /navbar -->


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Ups!</strong> Hay algunos problemas con tus entradas.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="account-container">

        <div class="content clearfix">


            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <h1>Iniciar sesión</h1>

                <div class="login-fields">

                    <p>Ingrese sus datos</p>

                    <div class="field">
                        <label for="username">Email</label>
                        <input type="text" id="username" name="email" value="{{ old('email') }}" placeholder="Email" class="login username-field" />
                    </div> <!-- /field -->

                    <div class="field">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" value="" placeholder="Contraseña" class="login password-field"/>
                    </div> <!-- /password -->

                </div> <!-- /login-fields -->

                <div class="login-actions">

                    <!--span class="login-checkbox">
                        <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
                        <label class="choice" for="Field">Keep me signed in</label>
                    </span-->

                    <button type="submit" class="button btn btn-success btn-large">Ingresar</button>

                </div> <!-- .actions -->

            </form>

        </div> <!-- /content -->

    </div> <!-- /account-container -->

    <!--div class="login-extra">
        <a href="#">Reset Password</a>
    </div> <!-- /login-extra -->
@endsection
