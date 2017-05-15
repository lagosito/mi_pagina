

<div id="container-c_iframe" class="wrapper">
    <div  class="container" id="container{{$pry_modulo->idesPR}}" style="width: 100%; padding: 0">
        <a name="{{str_replace(' ', '', $pry_modulo->titulo)}}" id="{{str_replace(' ', '', $pry_modulo->titulo)}}"></a>
        <?php
        $modulosDtll = App\Console\Commands\Funciones::ModulosDtll($pry_modulo->idesPR, $idioma);
        ?>
        <div class="fila" style="position: relative; padding: 50px;">
        @if($editar==1)
         <a class="editar-iframe editar-pencil" data-toggle="modal" data-target="#editarIframe"  data-pk="{{$modulosDtll[0]->id}}" data-url="{{$modulosDtll[0]->url}}" style="padding-left: 13px;
    padding-top: 9px;"><i class="fa fa-pencil"></i></a>
       
        @endif
            <iframe  src="<?php if(count($modulosDtll)>0) echo $modulosDtll[0]->url?>"  align="center">
                </iframe>

        </div>
      
    </div>
</div>
<script type="text/javascript">
    $('.editar-iframe').click( function(){
        alert('entro');
        $('#id_modulo_iframe').val($(this).attr('data-pk'));
        $('#url_iframe').val($(this).attr('data-url'));
    });
</script>