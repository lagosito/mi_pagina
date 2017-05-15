<link href="<?php echo url::asset('/css/modulo_c8_tabs_sintodos.css'); ?>" rel="stylesheet" type="text/css" />
<?php $combinacion = \App\Console\Commands\Funciones::getCombinacionColores($pry_modulo->idesPR);?>
@if(isset($combinacion))
    <style>
        #container{{$pry_modulo->idesPR}} {
            background-color: {{$combinacion->fondo}};
        }
        #container{{$pry_modulo->idesPR}} .titulo-custom-color {
            color: {{$combinacion->titulo}};
        }
        #container{{$pry_modulo->idesPR}} .comentario-custom-color {
            color: {{$combinacion->comentario}};
        }
        #container{{$pry_modulo->idesPR}} .nav-pills>li>a{
            color: {{$combinacion->color_menucat}};
            background-color: {{$combinacion->color_menucatfondo}};
        }
    
    </style>
@endif
<style>
    #container-modulo_c8_tabs_sintodos .titulo {
        font-size: <?php echo 60+ $proyecto->font_size?>px;
    }
    #container-modulo_c8_tabs_sintodos .nav-pills>li>a {
        font-size: <?php echo 14+ $proyecto->font_size?>px;
    }
    #container-modulo_c8_tabs_sintodos .item-nombre {
        font-size: <?php echo 15+ $proyecto->font_size?>px;
    }

    #container-modulo_c8_tabs_sintodos .linkareferencia{
        font-size: <?php echo 10+ $proyecto->font_size?>px;
    }
    #container-modulo_c8_tabs_sintodos .texto {
        font-size: <?php echo 13+ $proyecto->font_size?>px;
    }
    @media (min-width: 768px) {
        #container-modulo_c8_tabs_sintodos .titulo-formgaleria {
            font-size: <?php echo 25+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 767px) and (min-width: 501px){
        #container-modulo_c8_tabs_sintodos .titulo{
            font-size: <?php echo 45+ $proyecto->font_size?>px;
        }
    }
    @media (max-width: 500px){
        #container-modulo_c8_tabs_sintodos .titulo{
            font-size: <?php echo 30+ $proyecto->font_size?>px;
        }
    }
</style>

<div id="container-modulo_c8_tabs_sintodos" class="wrapper outer">
    <div class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $cont = 0;
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma); ?>
        <div class="row fila">
            <div class="col-sm-12 contenido">
                @foreach($modulosDtll as $modulo)
                    @if($cont == 0 )
                    <div class="titulo titulo-custom-color {{$proyecto->tipografia_titulos}}">
                        <h3 class="editable"  data-type="text" data-pk="{{$modulo->id}}" data-name="titulo">{!!$modulo->titulo!!}</h3>
                    </div>
                    @endif
                    <?php $cont++; ?>
                @endforeach
            </div>
        </div>

    <?php
    $cont = 0;
    $tabs = App\Console\Commands\Funciones::getGaleriatabs($pry_modulo->idesPR, $idioma); ?>
    <div class="bloquecontabs">
        <div class="text-center">
            <ul class="pestanas nav nav-pills center-pills">
              
                    <?php $active=0; ?>
                    @foreach($tabs as $tab)
                        @if($active==0)
                            <li class="active tab-pill"><a data-toggle="pill" href="#tabcat{{$tab->id}}">{{$tab->tab}}</a></li>
                                <?php $active=1; ?>
                        @else
                            <li class="tab-pill"><a data-toggle="pill" href="#tabcat{{$tab->id}}">{{$tab->tab}}</a></li>
                        @endif

                    @endforeach
                    @if($editar==1)
                    <li class="newGaleriaTab"><a class="nuevo-galeriaTab tab-action" data-toggle="modal" data-target="#addGaleriaTab" href="javascript:;" data-id="{{$pry_modulo->idesPR}}"><span class="fa fa-plus"> NUEVO</span></a></li>
                    <li class="editGaleriaTabs"><a class="editar-galeriaTab tab-action" data-toggle="modal" data-target="#editGaleriaTab" href="javascript:;" data-id="{{$pry_modulo->idesPR}}"><span class="fa fa-pencil"> EDITAR</span></a></li>
                    @endif

            </ul>
        </div>
        <div class="tab-content">
           
            <?php $activo=0; ?>
            @foreach($tabs as $tab)
                @if($activo==0)
                    <div id="tabcat{{$tab->id}}" class="tab-pane fade in active">
                    <?php $activo=1; ?>
                @else
                    <div id="tabcat{{$tab->id}}" class="tab-pane fade">
                @endif
                <?php
                    $i=0;
                    $galeriaItems = App\Console\Commands\Funciones::getGaleriaItems($tab->id, $idioma);
                    $cant_items = count($galeriaItems);
                    $item_activo=0;?>
                    <div class="row items-galeria{{$tab->id}}" style="margin-bottom: 20px">

                        <div id="slide_md_c8_tabs{{$tab->id}}" class="carousel slide slide_md_c8_tabs" >

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner carousel-inner-c8-tabs" id="carousel-inner-c8-tabs{{$tab->id}}" role="listbox">
                                @if($item_activo==0)
                                    <div class="item active">
                                    <div class="box-flex">
                                    <?php $is_activo=1; $i=1;?>
                                @endif
                                @foreach($galeriaItems as $item)
                                   @if($i==0)
                                        <div class="item">
                                        <div class="box-flex">
                                        <?php $i=1;?>
                                    @endif
                                     <?php
                                    $detalle = App\Console\Commands\Funciones::getGaleriaItemDetalle($item->id, $idioma);
                                    $detalle1='';
                                    $detalle2='';
                                    if(count($detalle)>0){ 
                                        $detalle1 = $detalle[0]->label;
                                        $detalle2 = $detalle[0]->valor;
                                     }

                                    ?>
                                    <div class="col-xs-6 col-sm-4 col-md-3 item-flex" id="div_itemcrew{{$item->id}}">
                                        <a href="javascript:;" class="tabitemwrapper " >
                                            <span class="tabitemtext ver-crew-item" data-toggle="modal" data-target="#moreCrewItem" data-id="{{$item->id}}" data-imagen="{{$item->imagen}}" data-item="{{$item->item}}" data-texto="{{$item->texto}}" data-pry="{{$pry_modulo->id_proyecto}}" data-detalle1="{{$detalle1}}" data-detalle2="{{$detalle2}}">
                                                <button type="button" class="btn btn-info editar-crew-item nomostrar" data-toggle="modal" data-target="#editarCrewItem" data-id="{{$item->id}}" data-imagen="{{$item->imagen}}" data-item="{{$item->item}}" data-texto="{{$item->texto}}" data-pry="{{$pry_modulo->id_proyecto}}" data-detalle1="{{$detalle1}}" data-detalle2="{{$detalle2}}">Editar</button>
                                                <button type="button" class="btn btn-danger eliminar-crew-item nomostrar"  data-id="{{$item->id}}" data-pry="{{$pry_modulo->id_proyecto}}">Eliminar</button>
                                            </span>
                                            @if(@getimagesize(public_path().'/upload/'.$pry_modulo->id_proyecto.'/galeria/' . $item->imagen))
                                                <img src="{!!url('upload/'.$pry_modulo->id_proyecto.'/galeria/'.$item->imagen)!!}" alt="" class="img-responsive img-galeria-c8" id="crewitem{{$item->id}}">
                                            @else
                                                <img src="{!!url('img/image_not_available.png')!!}" alt="" class="img-responsive img-galeria-c8" id="crewitem{{$item->id}}">
                                            @endif
                                            <h3 class="item-nombre comentario-custom-color">{{$item->item}}</h3>
                                            <p class="texto">{{$item->texto}}</p>
                                            <p class="detalle1">{{$detalle1}}</p>
                                        </a>
                                    </div>
                                    <?php $i=$i+1;
                                    if($i==9 ){echo '</div></div>'; $i=0;}?>
                                @endforeach
                                @if($editar==1)
                                <div class="col-md-3 col-sm-4 col-xs-6 item-flex newCrewitem nomostrar">
                                    <a href="javascript:;" class="tabitemwrapper" >
                                        <span class="tabitemtext">
                                            <button type="button" class="btn btn-info editar-crew-item nomostrar" data-toggle="modal" data-target="#editarCrewItem" data-id="0" data-imagen="350x350.gif" data-item="" data-texto="" data-detalle1="" data-detalle2="" data-tab="{{$tab->id}}" data-pry="{{$pry_modulo->id_proyecto}}">Agregar item</button>
                                            <button type="button" class="btn btn-danger eliminar-crew-item nomostrar2"  data-id="" data-pry="{{$pry_modulo->id_proyecto}}">Eliminar</button>
                                        </span>
                                        <img src="{!!url('img/add_crew.jpg')!!}" alt="" class="img-responsive  img-galeria-c8" id="crewitem0-tab{{$tab->id}}">
                                        <h3 class="item-nombre comentario-custom-color"></h3>
                                        <p class="texto"></p>
                                    </a>
                                </div>
                                @endif
                                <?php if($i<9 and $i!=0){echo '</div></div>';}?>

                            </div>
                            @if($cant_items >8)
                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#slide_md_c8_tabs{{$tab->id}}" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#slide_md_c8_tabs{{$tab->id}}" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            @endif
                       </div>
                       
                </div>
            </div>

            @endforeach
        
    </div>
    </div>
</div>
</div>
<div id="moreCrewItem" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content tabs-modal-content">
            <div class="modal-body tabs-modal-body row">
                <div class="col-md-12 sinpadding clearfix"  style="position: relative">
                    <button type="button" class="close" data-dismiss="modal" style="font-size: 20px">&times;</button>

                    <div class="col-md-6">
                        <div class="image-crewitem" id="image-crewitem">
                            <img src="" style="width: 100%">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="item-crew-name" id="more-itemcrew-name"></h1>
                        <h2 class="item-crew-texto" id="more-itemcrew-texto"></h2>
                        <p class="item-crew-detalle1" id="more-itemcrew-detalle1"></p>
                        <p class="item-crew-detalle2" id="more-itemcrew-detalle2"></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="editarCrewItem" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog tabs-editar-modal modal-md-edit-crew" >
        <!-- Modal content-->
        <div class="modal-content tabs-modal-content">
            <div class="modal-body tabs-modal-body row">
                <div class="col-md-12 sinpadding clearfix"  style="position: relative" align="center">
                    <button type="button" class="close" data-dismiss="modal" style="font-size: 20px">&times;</button>

                    <div class="col-md-6">
                        <div class="box-crewitem" id="box-crewitem" style="padding: 0" data-width="350" data-height="350">
                            <img src="">
                        </div>
                        <input class="nomostrar" value="" id="id-crewitem">
                        <input class="nomostrar" value="" id="id-crewtab">
                        <input class="nomostrar" value="" id="id-crewproyecto">
                        <input class="nomostrar" value="0" id="upload_new_picture">

                        <span class="btn btn-openfile-crewitem" style="z-index: 1;">
                            <span class="fa fa-folder-open-o"></span> <input type="file" id="openfile-crewitem" class="file" name="file">
                        </span>
                        <br>
                        <p style="font-style: italic;font-size: 10pt;" >* Tamaño recomendado 350x350</p>
                    </div>
                    <div class="col-md-6">
                        <input class="item-crew-name" id="edit-itemcrew-name" name="name"  style="border: 0; border-bottom: 1px dashed blue;width: 100%" placeholder="Nombres y Apellidos"/>
                        <input class="item-crew-texto" id="edit-itemcrew-texto" name="cargo"  style="border: 0; border-bottom: 1px dashed blue;width: 100%" placeholder="Cargo"/>
                        <input class="item-crew-detalle1" id="edit-itemcrew-detalle1" name="empresa"  style="border: 0; border-bottom: 1px dashed blue;width: 100%" placeholder="Empresa"/>
                        <textarea class="item-crew-detalle2" id="edit-itemcrew-detalle2" name="detalle2"  style="border: 0; border-bottom: 1px dashed blue;width: 100%" rows="10" placeholder="Texto"></textarea>
                    </div>

                </div>

                <div class="col-md-12">
                    <span class="btn blue editable-submit btn-save-crewitem">
                        <i class="fa fa-check"></i>
                    </span>
                    <br/>
                    <div class="alert alert-success alert-dismissable nomostrar label-cargando col-md-6 col-md-offset-3" style="background: none">
                        <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> Guardando item...</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if($editar==0)
    <script src="<?php echo URL::asset('js/modulos/normalize-carousel-heights.js'); ?>" type="text/javascript"></script>
    <script>
        jQuery(function($){

            $(window).on('load', function(){
                
                $('.carousel-inner-c8-tabs').carousel({interval: false});
                $('.carousel-inner-c8-tabs').each(function(){
                    $('.item',this).carouselHeights();
                });
            });
           
        });
        $(document).on('click', '.tab-pill', function(){
            var content = $(this).find('a').attr('href');
            $(content).find('.carousel-inner-c8-tabs .item').carouselHeights(); 
            $(content).find('.carousel-inner-c8-tabs').carousel({interval: 3000});
            $(content).find('.carousel').carousel('cycle');


           
        });
        $(document).on('click', '.ver-crew-item', function(){
            var ruta = '{!!url('upload/')!!}';
            $('#image-crewitem').find('img').attr('src', ruta+'/'+ $(this).attr('data-pry')+'/galeria/'+$(this).attr('data-imagen'));
            console.log(ruta+'/'+ $(this).attr('data-pry')+'/galeria/'+$(this).attr('data-imagen'));
            $('#more-itemcrew-name').text($(this).attr('data-item'));
            $('#more-itemcrew-texto').text($(this).attr('data-texto'));
            $('#more-itemcrew-detalle1').text($(this).attr('data-detalle1'));
            $('#more-itemcrew-detalle2').text($(this).attr('data-detalle2'));
        });
    </script>
@else
    <script>
        $( document ).ready(function() {
            $('.slide_md_c8_tabs').removeClass('carousel');
            $('.slide_md_c8_tabs').removeClass('carousel-showmanymoveone');
            $('.slide_md_c8_tabs').removeClass('slide');
            $('.carousel-inner-c8-tabs').removeClass('carousel-inner');
            $('.carousel-indicators-c8-tabs').addClass('nomostrar');
            $('.newCrewitem').removeClass('nomostrar');
            $('.editar-crew-item').removeClass('nomostrar');
            $('.eliminar-crew-item').removeClass('nomostrar');
            $('.ver-crew-item').removeAttr('data-toggle');
        });
    </script>
    <script>
        function saveimagencrew(input, id, tipo, idproyecto)
        {
            input = document.getElementById(input);

            var data = new FormData();
            data.append('file', input.files[0]);
            data.append('id', id);
            data.append('tipo', tipo);
            data.append('id_proyecto', idproyecto);
            data.append('_token', '{!!csrf_token()!!}');

            $.ajax({
                type: "POST",
                url: "{!! url(Request::segment(1).'/saveimagen') !!}",
                processData: false,
                contentType: false,
                data: data,
                success: function (data) {

                    var ruta = '{!!url('upload/')!!}';
                    $('#crewitem' + id).attr('src', ruta + '/'+ idproyecto + '/galeria/' + data);
                    $('#editarCrewItem').modal('hide');
                    var buttonGaleriaItem = $('#crewitem' + id).parent().find('.editar-crew-item');
                    $(buttonGaleriaItem).attr('data-imagen', data);

                },
                error: function (xmlHttpRequest, textStatus, errorThrown){
                    if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                        return;
                }
            }, "json");
        }
        function createCrewItem(tab, nombre, texto, id_proyecto, detalle1, detalle2)
        {
            var nueva_imagen = $('#upload_new_picture').val();

            var data = {};
            data._token = '{!!csrf_token()!!}';
            data.item = nombre;
            data.texto = texto;
            data.label = detalle1;
            data.valor = detalle2;
            data.tab = tab;
            data.id_proyecto = id_proyecto;

            $.ajax({
                type: "POST",
                url: "{!! url(Request::segment(1).'/createcrewitem') !!}",
                data: data,
                success: function (data) {

                    var nuevo = $(".clonarCrewitem").clone();
                    var ruta = '{!!url('img/')!!}';

                
                    $('<div class="col-xs-6 col-sm-4 col-md-3" id="div_itemcrew'+data.id+'">'
                        +'<a href="javascript:;" class="tabitemwrapper" >'
                            +'<span class="tabitemtext">'
                                +'<button type="button" class="btn btn-info editar-crew-item" data-toggle="modal" data-target="#editarCrewItem" data-id="'+data.id+'" data-imagen="" data-item="'+nombre+'" data-texto="'+texto+'" data-pry="'+id_proyecto+'" data-detalle1="'+detalle1+'" data-detalle2="'+detalle2+'">Editar</button>'
                                +'<button type="button" class="btn btn-danger eliminar-crew-item"  data-id="'+data.id+'" data-pry="'+id_proyecto+'">Eliminar</button>'
                            +'</span>'
                                +'<img src="'+ruta+'/image_not_available.png'+'" alt="" class="img-responsive img-galeria-c8" id="crewitem'+data.id+'">'
                            +'<h3 class="item-nombre comentario-custom-color">'+nombre+'</h3>'
                            +'<p class="texto">'+texto+'</p>'
                             +'<p class="detalle1">'+detalle1+'</p>'
                        +'</a>'
                    +'</div>').insertBefore($('#crewitem0-tab'+tab).parent().parent());

                    if(nueva_imagen =='1') {
                        saveimagencrew('openfile-crewitem', data.id, '2', id_proyecto);
                    }
                    else
                    {
                        $('#upload_new_picture').val('0');
                        $('#box-crewitem').empty();
                        $('#editarCrewItem').modal('hide');
                    }

                },
                error: function (xmlHttpRequest, textStatus, errorThrown){
                    if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                        return;
                }
            }, "json");

        }
        function editCrewItem(id, nombre, texto, id_proyecto, detalle1, detalle2)
        {
           var nueva_imagen = $('#upload_new_picture').val();

            var data = {};
            data._token = '{!!csrf_token()!!}';
            data.id=id;
            data.item = nombre;
            data.texto = texto;
            data.label = detalle1;
            data.valor = detalle2;
            data.idioma = $('body').attr('data-idioma');


            $.ajax({
                type: "POST",
                url: "{!! url(Request::segment(1).'/editcrewitem') !!}",
                data: data,
                success: function (data) {

                    $('#crewitem'+id).parent().find('.editar-crew-item').attr('data-item', nombre);
                    $('#crewitem'+id).parent().find('.editar-crew-item').attr('data-texto', texto);
                     $('#crewitem'+id).parent().find('.editar-crew-item').attr('data-detalle1', detalle1);
                    $('#crewitem'+id).parent().find('.editar-crew-item').attr('data-detalle2', detalle2);
                    $('#crewitem'+id).parent().find('.item-nombre').text(nombre);
                    $('#crewitem'+id).parent().find('.texto').text(texto);
                    $('#crewitem'+id).parent().find('.detalle1').text(detalle1);
                    $('#crewitem'+id).parent().find('.detalle2').text(detalle2);
                    if(nueva_imagen=='1') {
                        saveimagencrew('openfile-crewitem', id, '2', id_proyecto);
                    }
                    else{
                        $('#upload_new_picture').val('0');
                        $('#box-crewitem').empty();
                        $('#editarCrewItem').modal('hide');
                    }

                },
                error: function (xmlHttpRequest, textStatus, errorThrown){
                    if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                        return;
                }
            }, "json");
        }

        $(document).on('click', '.editar-crew-item', function() {

            var imagen = $(this).attr('data-imagen');
            var id_proyecto = $(this).attr('data-pry');
            var ruta='';
            if(imagen=='image_not_available.png' || imagen=='350x350.gif')
            {
                ruta = '{!!url('img/')!!}';
            }
            else
            {
                ruta = '{!!url('upload/')!!}' + '/' + id_proyecto + '/galeria';
            }
            $('#edit-itemcrew-imagen').attr('src', ruta+'/'+imagen);
            $('#edit-itemcrew-name').val($(this).attr('data-item'));
            $('#edit-itemcrew-texto').val($(this).attr('data-texto'));
            $('#edit-itemcrew-detalle1').val($(this).attr('data-detalle1'));
            $('#edit-itemcrew-detalle2').val($(this).attr('data-detalle2'));

            var id = $(this).attr('data-id');
            var tab = $(this).attr('data-tab');
            var img= '';

            if(imagen=='')
            {
                img= ruta+'/image_not_available.png';
            }
            else
            {
                img= ruta+'/'+imagen;
            }

            $('#id-crewitem').val(id);
            $('#id-crewtab').val(tab);
            $('#id-crewproyecto').val(id_proyecto);

            $('#box-crewitem').empty();

            $('#box-crewitem').append(
                    '<img style="border: 1px dashed blue;" src="'+img+'" alt="" class="img-responsive" width="350" height="350">');
        });

        $('.btn-save-crewitem').on('click', function (ev) {
            $('.label-cargando').removeClass('nomostrar');
            $('.nota-editar-img').addClass('nomostrar');
            var nombre = $('#edit-itemcrew-name').val();
            var texto = $('#edit-itemcrew-texto').val();
            var detalle1 = $('#edit-itemcrew-detalle1').val();
            var detalle2 = $('#edit-itemcrew-detalle2').val();
            var id = $('#id-crewitem').val();
            var tab= $('#id-crewtab').val();
            var id_proyecto = $('#id-crewproyecto').val();

            if(id == '0')
            {
                createCrewItem(tab, nombre, texto, id_proyecto, detalle1, detalle2);
            }
            else{
                editCrewItem(id, nombre,texto, id_proyecto, detalle1, detalle2);
            }
        });
        $('#editarCrewItem').on('hidden.bs.modal', function () {
            $('.label-cargando').addClass('nomostrar');
            $('.nota-editar-img').removeClass('nomostrar');
            $('#edit-itemcrew-name').val('');
            $('#edit-itemcrew-texto').val('');
            $('#edit-itemcrew-detalle1').val('');
            $('#edit-itemcrew-detalle2').val('');
            $('#box-crewitem').empty();
            $('#upload_new_picture').val('0');
            $("#openfile-crewitem").replaceWith($("#openfile-crewitem").clone());
        });

        $(document).on('change', '.btn-openfile-crewitem :file', function() {
            var reader = new FileReader();

            var ancho = $('#box-crewitem').attr('data-width');

            reader.onload = function(e) {

                $('#box-crewitem').find('img')
                        .attr('src', e.target.result)
                        .width(ancho)
                        .height('auto');
            };

            reader.readAsDataURL(this.files[0]);
            $('#upload_new_picture').val('1');

        });


        $(document).on('click', '.eliminar-crew-item', function() {

            var id = $(this).attr('data-id');
            var id_proyecto = $(this).attr('data-pry');
            var data = {};
            data._token = '{!!csrf_token()!!}';
            data.id = id;
            data.id_proyecto = id_proyecto;

            $.ajax({
                type: "POST",
                url: "{!! url(Request::segment(1).'/eliminargaleriaitem') !!}",
                data: data,
                success: function(){
                    $('#div_itemcrew'+id).remove();
                },
                error: function(){
                    console.log('Error en la conexión');
                }
            });
        });
    </script>
@endif