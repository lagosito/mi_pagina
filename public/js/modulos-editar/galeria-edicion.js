//editar galeria

$('.nuevo-galeriaTab').on('click', function (ev) {
    $('#newGaleriaTab_id_modulo').val($(this).attr('data-id'));

});
$(document).on('click', '.newGaleriaTab-submit', function() {

    var data = {};
    data._token = $('body').attr('data-token');
    data.id_modulo = $('#newGaleriaTab_id_modulo').val();
    data.tab = $('#newGaleriaTab').val();

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/newgaleriatab',
        data: data,
        success: function(){
            location.reload();
        },
        error: function(){
            alert('Error en la conexión');
        }
    });
});

$(document).on('click', '.addGaleriaItemSlider', function() {

    var cantImgSlider = $(".image-thumb-item-slider").length;

    var data = '<div class="col-sm-4 thumb-item-galeria" id="nuevoThumbItemSlider'+cantImgSlider+'">'
        +'<div class="image-thumb-item-slider">'
        +'<input type="text" class="form-control nomostrar" name="cantfiles_item_slider[]">'
        +'<img src="'+$('body').attr('data-myurl')+'/img/no-image.png" alt="" id="imginicial" width="150" height="150">'
    +'<span class="btn btn-primary btn-remove-selected-galeria-slider" data-id="'+cantImgSlider+'">'
    +'<span class="fa fa-remove"></span>'
    +'</span>'
    +'<span class="btn btn-primary btn-file-item-slider">'
    +'<span class="fa fa-folder-open-o"></span> <input type="file" id="file_item_slider'+ cantImgSlider +'" class="file_item_slider" name="file_item_slider'+ cantImgSlider +'">'
    +'</span>'
    +'</div>'
    +'</div>';

    $('#galeria_item_sliders').append(data);
});

$(document).on('click', '.btn-remove-selected-galeria-slider', function() {

    var id_nuevo_galeria_slider = $(this).attr('data-id');

    var div = $('#nuevoThumbItemSlider'+ id_nuevo_galeria_slider);
    var clon = '<div class="col-sm-4 thumb-item-galeria" id="nuevoThumbItemSlider'+id_nuevo_galeria_slider+'">'
        +'<div class="image-thumb-item-slider">'
        +'<input type="text" class="form-control nomostrar" name="cantfiles_item_slider[]">'
        +'<img src="'+$('body').attr('data-myurl')+'/img/no-image.png" alt="" id="imginicial" width="150" height="150">'
    +'<span class="btn btn-primary btn-remove-selected-galeria-slider" data-id="'+id_nuevo_galeria_slider+'">'
    +'<span class="fa fa-remove"></span>'
    +'</span>'
    +'<span class="btn btn-primary btn-file-item-slider">'
    +'<span class="fa fa-folder-open-o"></span> <input type="file" id="file_item_slider'+ id_nuevo_galeria_slider +'" class="file_item_slider" name="file_item_slider'+ id_nuevo_galeria_slider +'">'
    +'</span>'
    +'</div>'
    +'</div>';

    div.replaceWith(clon);

});

$(document).on('change', '.btn-file-item-slider :file', function() {
    var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', label);

    var reader = new FileReader();

    reader.onload = function(e) {
        $(input).parent().parent().find('img')
            .attr('src', e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
});
$('.btn-file-slider :file').on('fileselect', function(event, label) {

});

$(document).on('click', '.btn-delete-item-slider', function() {

    var id_galeria_item_slider = $(this).attr('data-id');

    var data = {};
    data._token = $('body').attr('data-token');
    data.id_galeria_item_slider = id_galeria_item_slider;
    data.id_proyecto = $('body').attr('data-idpry');

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/eliminargaleriaitemslider',
        data: data,
        success: function (data) {
            $('#imgThumbSliderGaleria'+ id_galeria_item_slider).remove();
        },
        error: function () {
            console.log('Error en la conexión');
        }
    });

});

function resetDatosGaleria(galeriaitem, imagen)
{
    var buttonGaleriaItem = $(galeriaitem).parent().find('.editar-galeria-item');
    $(buttonGaleriaItem).attr('data-imagen', imagen);
}

function guardarItemGaleriaSlider(id_galeria_item, id_proyecto)
{
    var cantidad_files=0;
    var cantidad_existentes =0;
    var ids_item_slider = [];

    $('input[name="cantfiles_item_slider[]"]').each(function(){
        cantidad_files = cantidad_files +1;
    });
    $('input[name="id_item_slider[]"]').each(function(){
        cantidad_existentes = cantidad_existentes +1;
        ids_item_slider.push($(this).val());
    });

    var input;

    var data = new FormData();
    var i = 0;

    $('.file_item_slider').each(function(){
        input = document.getElementById('file_item_slider'+i);
        if(input.files[0])
        {
            data.append('file_item_slider'+i, input.files[0]);
        }

        i=i+1;
    });

    data.append('id_galeria_item', id_galeria_item);
    data.append('id_proyecto', id_proyecto);
    data.append('cantidad_files', cantidad_files);
    data.append('cantidad_existentes', cantidad_existentes);
    data.append('ids_item_slider', ids_item_slider);
    data.append('_token', $('body').attr('data-token'));

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/savegaleriaitemslider',
        processData: false,
        contentType: false,
        data: data,
        success: function (data) {
            $('#upload_new_photo').val('0');
            $('#croppie-box-galeriaitem').empty();
            $('#editarGaleriaItem').modal('hide');
        },
        error: function (xmlHttpRequest, textStatus, errorThrown){
            if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                return;
        }
    }, "json");
}

function createGaleriaitem(tab, nombre, id_proyecto)
{
    var labels_detalle = $('input[name="galeriaitem_detalle_label[]"]').map(function(){
        return this.value;
    }).get();
    var valor_detalle = $('textarea[name="galeriaitem_detalle_valor[]"]').map(function(){
        return this.value;
    }).get();

    var nueva_imagen = $('#upload_new_photo').val();

    var data = {};
    data._token = $('body').attr('data-token');
    data.item = nombre;
    data.id_pry_galeria_tab = tab;
    data.galeriaitem_detalle_label = labels_detalle;
    data.galeriaitem_detalle_valor = valor_detalle;
    data.id_proyecto = id_proyecto;

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/creargaleriaitem',
        data: data,
        success: function (data) {

            if(nueva_imagen =='1')
            {
                guardarimagen('openfile-galeriaitem', data.id, '2', id_proyecto);
                //recortarCroppie($('#croppie-box-galeriaitem'), data.id, id_proyecto, '3', '#galeriaitem', '#editarGaleriaItem');
            }
            else
            {
                guardarItemGaleriaSlider(data.id, id_proyecto);
            }


            var nuevo = $(".clonarGaleriaitem").clone();
            var ruta = $('body').attr('data-myurl')+'/img';

            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).parent().find('.editar-galeria-item').attr('data-item', nombre);
            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).parent().find('.editar-galeria-item').attr('data-id', data.id);
            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).parent().find('.editar-galeria-item').attr('data-imagen', 'image_not_available.png');
            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).parent().find('h3').text(nombre);
            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).parent().find('img').attr('src', ruta+'/image_not_available.png' );
            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).parent().find('.editar-galeria-item').text('Editar');
            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).parent().find('.eliminar-galeria-item').removeClass('nomostrar2');
            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).parent().find('.eliminar-galeria-item').attr('data-id', data.id);
            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).parent().parent().attr('id', 'div_itemgaleria'+ data.id);
            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).parent().parent().attr('data-id', data.id);
            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).parent().parent().attr('data-tab', data.id_pry_galeria_tab);
            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).parent().find('.portlet-header').removeClass('nomostrar');
            $('#galeriaitem0-tab'+data.id_pry_galeria_tab).attr('id', 'galeriaitem'+ data.id);

            $(".newGaleriaitem" ).removeClass('newGaleriaitem');

            $(nuevo).appendTo('.items-galeria'+data.id_pry_galeria_tab);
            $(nuevo).find('.editar-galeria-item').attr('data-tab', data.id_pry_galeria_tab);
            $(nuevo).find('img').attr('id', 'galeriaitem0-tab'+data.id_pry_galeria_tab);
            $(nuevo).removeClass('clonarGaleriaitem');
            $(nuevo).removeClass('nomostrar');

        },
        error: function (xmlHttpRequest, textStatus, errorThrown){
            if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                return;
        }
    }, "json");

}
function guardarDatosGaleria(id, nombre, id_proyecto)
{
    var ids_detalle = $('input[name="galeriaitem_detalle_id[]"]').map(function(){
        return this.value;
    }).get();
    var labels_detalle = $('input[name="galeriaitem_detalle_label[]"]').map(function(){
        return this.value;
    }).get();
    var valor_detalle = $('textarea[name="galeriaitem_detalle_valor[]"]').map(function(){
        return this.value;
    }).get();

    var nueva_imagen = $('#upload_new_photo').val();

    var data = {};
    data._token = $('body').attr('data-token');
    data.id=id;
    data.item = nombre;
    data.galeriaitem_detalle_id = ids_detalle;
    data.galeriaitem_detalle_label = labels_detalle;
    data.galeriaitem_detalle_valor = valor_detalle;
    data.idioma = $('body').attr('data-idioma');

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/guardardatosgaleria',
        data: data,
        success: function (data) {

            if(nueva_imagen=='1')
            {
                guardarimagen('openfile-galeriaitem', id, '2', id_proyecto);
                //recortarCroppie($('#croppie-box-galeriaitem'), id, id_proyecto, '3', '#galeriaitem', '#editarGaleriaItem');
            }
            else
            {
                guardarItemGaleriaSlider(id, id_proyecto);
            }
            $('#galeriaitem'+id).parent().find('.editar-galeria-item').attr('data-item', nombre);
            $('#galeriaitem'+id).parent().find('h3').text(nombre);

        },
        error: function (xmlHttpRequest, textStatus, errorThrown){
            if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                return;
        }
    }, "json");
}

$(document).on('click', '.editar-galeria-item', function() {

    var imagen = $(this).attr('data-imagen');
    var id_proyecto = $(this).attr('data-pry');
    var ruta='';
    if(imagen=='image_not_available.png' || imagen=='addGaleriaitem.jpg')
    {
        ruta = $('body').attr('data-myurl')+'/img';
    }
    else
    {
        ruta = $('body').attr('data-myurl')+'/upload/' + id_proyecto + '/galeria';
    }
    $('#edit-itemgaleria-imagen').attr('src', ruta+'/'+imagen);
    $('#edit-itemgaleria-name').val($(this).attr('data-item'));

    var ancho = 450;
    var alto = 450;
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

    $('#id-galeriaitem').val(id);
    $('#id-galeriatab').val(tab);
    $('#id-galeriaproyecto').val(id_proyecto);

    $('#croppie-box-galeriaitem').attr('data-height',alto);
    $('#croppie-box-galeriaitem').attr('data-width',ancho);

    $('#croppie-box-galeriaitem').empty();
    $('#edit-atributospops').empty();

    if(id!='0')
    {
        var data = {};
        data._token = $('body').attr('data-token');
        data.id = id;
        data.editable = '1';
        data.idioma = $('body').attr('data-idioma');

        $.ajax({
            type: "POST",
            url: $('body').attr('data-urlsegment')+'/detallegaleriaitem',
            data: data,
            success: function (data) {
                $('#edit-atributospops').append(data);
            },
            error: function () {
                console.log('Error en la conexión');
            }
        });


        $('#galeria_item_sliders').empty();

        var datos = {};
        datos._token = $('body').attr('data-token');
        datos.id_item = id;
        datos.id_proyecto = $('body').attr('data-idpry');

        $.ajax({
            type: "POST",
            url: $('body').attr('data-urlsegment')+'/obteneritemgaleriaslider',
            data: datos,
            success: function (data) {
                $('#galeria_item_sliders').append(data);
            },
            error: function () {
                console.log('Error en la conexión');
            }
        });
    }

    $('#croppie-box-galeriaitem').append(
        '<img style="border: 1px dashed blue;" src="'+img+'" alt="" class="img-responsive" width="450" height="450">');
    /*var $uploadCrop;
     var anchoBound = parseFloat(ancho);
     var altoBound = parseFloat(alto);
     $uploadCrop = $('#croppie-box-galeriaitem').croppie({
     viewport: {
     width: ancho,
     height: alto,
     type: 'square'
     },
     boundary: {
     width: anchoBound,
     height: altoBound
     },
     exif: true,
     mouseWheelZoom: false,
     enforceBoundary: true
     });
     $uploadCrop.croppie('bind', {
     url: img
     });*/
});

$('.addGaleriaItemdetalle').on('click', function (ev) {
    var data = '<div class="col-md-6 atributo">'
        +'<input class="input-blue" type="text" name="galeriaitem_detalle_label[]" value="" placeholder="Etiqueta"/>'
        +'<textarea class="input-blue" type="text" name="galeriaitem_detalle_valor[]" placeholder="Descripción"></textarea></div>';
    $('#edit-atributospops').append(data);
});

$('.btn-save-galeriaitem').on('click', function (ev) {
    $('.label-cargando').removeClass('nomostrar');
    $('.nota-editar-img').addClass('nomostrar');
    var nombre = $('#edit-itemgaleria-name').val();
    var id = $('#id-galeriaitem').val();
    var tab= $('#id-galeriatab').val();
    var id_proyecto = $('#id-galeriaproyecto').val();

    if(id == '0')
    {
        createGaleriaitem(tab, nombre, id_proyecto);
    }
    else{
        guardarDatosGaleria(id, nombre, id_proyecto);
    }

});
$('#editarGaleriaItem').on('hidden.bs.modal', function () {
    $('.label-cargando').addClass('nomostrar');
    $('.nota-editar-img').removeClass('nomostrar');
    $('#edit-itemgaleria-name').val('');
    $('#croppie-box-galeriaitem').empty();
    $('#galeria_item_sliders').empty();
    $('#upload_new_photo').val('0');
    $("#openfile-galeriaitem").replaceWith($("#openfile-galeriaitem").clone());
});

$(document).on('change', '.btn-openfile-galeriaitem :file', function() {
    var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', label);

    var reader = new FileReader();
    /*var $uploadCrop;*/

    var ancho = $('#croppie-box-galeriaitem').attr('data-width');
    var alto = $('#croppie-box-galeriaitem').attr('data-height');

    reader.onload = function(e) {

        /*$uploadCrop.croppie('bind', {
         url: e.target.result
         });*/
        $(input).parent().parent().find('img')
            .attr('src', e.target.result)
            .width(ancho)
            .height('auto');
    };

    reader.readAsDataURL(this.files[0]);
    $('#upload_new_photo').val('1');

    /*var anchoBound = parseFloat(ancho)+50;
     var altoBound = parseFloat(alto)+50;
     $uploadCrop = $('#croppie-box-galeriaitem').croppie({
     viewport: {
     width: ancho,
     height: alto,
     type: 'square'
     },
     boundary: {
     width: anchoBound,
     height: altoBound
     },
     exif: true,
     mouseWheelZoom: false,
     enforceBoundary: true
     });*/

});
$('.btn-openfile-galeriaitem :file').on('fileselect', function(event, label) {
    $('#imgnombre').val(label);
});

/*document.querySelector('#openfile-galeriaitem').addEventListener('change', function(){

 });*/

$(document).on('click', '.eliminar-galeria-item', function() {

    var id = $(this).attr('data-id');
    var id_proyecto = $(this).attr('data-pry');
    var data = {};
    data._token = $('body').attr('data-token');
    data.id = id;
    data.id_proyecto = id_proyecto;

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/eliminargaleriaitem',
        data: data,
        success: function(){
            $('#div_itemgaleria'+id).remove();
        },
        error: function(){
            console.log('Error en la conexión');
        }
    });
});


$(document).on('click', '.editar-galeriaTab', function() {

    var id = $(this).attr('data-id');

    var data = {};
    data._token = $('body').attr('data-token');
    data.id_modulo = id;
    data.idioma = $('body').attr('data-idioma');

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/readgaleriatabs',
        data: data,
        success: function(data){
            $('#listadotabs').empty();
            $('#listadotabs').append(data);
        },
        error: function(){
            alert('Error en la conexión');
        }
    });
});

$(document).on('click', '.editGaleriaTab-submit', function() {

    var id = $(this).attr('data-id');

    var ids_tab = $('input[name="galeriatab_id[]"]').map(function(){
        return this.value;
    }).get();
    var nombres_tab = $('input[name="galeriatab_tab[]"]').map(function(){
        return this.value;
    }).get();

    var data = {};
    data._token = $('body').attr('data-token');
    data.ids_tab = ids_tab;
    data.nombres_tab= nombres_tab;
    data.idioma = $('body').attr('data-idioma');

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/editargaleriatabs',
        data: data,
        success: function(data){
            location.reload();
        },
        error: function(){
            alert('Error en la conexión');
        }
    });
});
//eliminartag
$(document).on('click', '.eliminargaleriatab', function() {
    var id = $(this).attr('data-id');

    var data = {};
    data._token = $('body').attr('data-token');
    data.id = id;

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/eliminargaleriatabs',
        data: data,
        success: function(data){
            if(data!=0){
                $('.desactivargaleriatab').removeClass("nomostrar");
                $('.boxs-tabs').addClass("nomostrar");
                $('.sieliminar').attr("id-tab",data)
            }
            else{
                $('#galeria-tab-box'+id).remove();
            }
        },
        error: function(){
            alert('Error en la conexión');
        }
    });
});

$(document).on('click', '.sieliminar', function() {
    var id_tab =$(this).attr('id-tab');
    var data = {};
    data._token = $('body').attr('data-token');
    data.id_tab = id_tab;

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/desactivargaleriatabs',
        data: data,
        success: function(data){
            $('.desactivargaleriatab').addClass("nomostrar");
            $('.boxs-tabs').removeClass("nomostrar");
        },
        error: function(){
            alert('Error en la conexión');
        }
    });
});

$(document).on('click', '.noeliminar', function() {

    $('.desactivargaleriatab').addClass("nomostrar");
    $('.boxs-tabs').removeClass("nomostrar");

});
