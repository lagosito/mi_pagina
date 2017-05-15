<div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse montserrat-menu">
    <ul class="nav navbar-nav">
        <li class="dropdown dropdown-fw active open selected">
            <a class="aproyectos" href="{!!url(Request::segment(1).'/proyectos')!!}"> Proyectos </a>
        </li>
        <li class="dropdown dropdown-fw publicados">
            <a class="aproyectospublicados" href="{!!url(Request::segment(1).'/publicados')!!}"> Publicados </a>
        </li>
        <li class="dropdown dropdown-fw borradores">
            <a class="aproyectosborradores" href="{!!url(Request::segment(1).'/borradores')!!}"> Borradores </a>
        </li>
    </ul>
</div>