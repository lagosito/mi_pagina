<header class="page-header">
    <nav class="navbar mega-menu" role="navigation">
        <div class="container-fluid">
            <div class="clearfix navbar-fixed-top">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                                <span class="toggle-icon">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                </button>
                <!-- End Toggle Button -->
                <!-- BEGIN LOGO -->
                <a id="index" class="page-logo" href="{!! url(Request::segment(1).'/proyectos') !!}">
                    <img src="<?php echo URL::asset('img/logomipagina.png'); ?>" alt="Logo" style="height: 50px;"> </a>
                <!-- END LOGO -->
                <!-- BEGIN TOPBAR ACTIONS -->
                <div class="topbar-actions">
                    <div class="btn-group-img btn-group">
                        <span class="saludo">Hola! {{ Auth::user()->name }} &nbsp;&nbsp;&nbsp; </span>
                    </div>

                    <div class="btn-group-notification btn-group" id="header_notification_bar" style="margin-top: -15px;background-color: transparent">
                         <span class="btn btn-sm md-skip dropdown-toggle" style="width: 60px;height: 60px;background-color: transparent;padding: 0" data-toggle="dropdown"  data-close-others="true" aria-expanded="false">

                            @if(Auth::user()->imagen!='')
                                 <img src="{!!url('img/avatar/'.Auth::user()->imagen)!!}" alt="" class="img-circle" style="width: 100%;height: 100%">
                             @else
                                 <img src="{!!url('img/avatar/no_user_logo.png')!!}" alt="" style="background-color: white; width: 100%;height: 100%" class="img-circle">
                             @endif
                        </span>
                        <ul class="dropdown-menu-v2">
                            <li>
                                <div class="slimScrollDiv" style="position: relative;">
                                    <ul class="dropdown-menu-list scroller" style=" width: auto;" data-handle-color="#637283" data-initialized="1">
                                        @if(Auth::user()->nivel_id==1)
                                            @include('includes.menutopcliente')
                                        @elseif(Auth::user()->nivel_id==2)
                                            @include('includes.menutopagencia')
                                        @elseif(Auth::user()->nivel_id==4)
                                            @include('includes.menutopadmin')
                                        @elseif(Auth::user()->nivel_id==3)
                                            @include('includes.menutopcomercial')
                                        @endif
                                        <li>
                                            <a href="{!!url(Request::segment(1).'/perfil/'.Auth::user()->id)!!}" class="text-uppercase">
                                            <span class="details">
                                                <!--span class="label label-sm label-icon label-info md-skip">
                                                   <i class="fa fa-sign-out"></i>
                                                </span-->
                                                Editar mi perfil
                                            </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{!!url('/salir')!!}" class="text-uppercase">
                                                <span class="details">
                                                    <!--span class="label label-sm label-icon label-info md-skip">
                                                       <i class="fa fa-sign-out"></i>
                                                    </span-->
                                                    Cerrar sesión
                                                </span>
                                            </a>
                                        </li>

                                    </ul>
                                    <div class="slimScrollBar" style="background: rgb(99, 114, 131); width: 7px; position: absolute; top: 25px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 121.595px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- END TOPBAR ACTIONS -->
            </div>
            <!-- BEGIN HEADER MENU -->
            @yield('menu')
            <!--div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    @if(Auth::user()->nivel_id==4)
                        @include('includes.menuadmin')
                    @elseif(Auth::user()->nivel_id==3)
                        @include('includes.menucomercial')
                    @elseif(Auth::user()->nivel_id==1)
                        @include('includes.menucliente')
                    @endif
                </ul>
            </div-->
            <!-- END HEADER MENU -->
        </div>
        <!--/container-->
    </nav>
</header>