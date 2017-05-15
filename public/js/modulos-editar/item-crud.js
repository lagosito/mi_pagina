
function createItem(tab, item, texto)
{
    var data = new FormData();
    var file = document.getElementById('file-item');

    if (file.files.length>0)
    {
        data.append('file', file.files[0]);
    }

    data.append('tab', tab);
    data.append('item', item);
    data.append('texto', texto);
    data.append('id_proyecto', $('body').attr('data-idpry'));
    data.append('_token', $('body').attr('data-token'));

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/createitem',
        processData: false,
        contentType: false,
        data: data,
        success: function (data) {

           var  ruta = $('body').attr('data-myurl')+'/upload/' + $('body').attr('data-idpry') + '/galeria/';

            if($($('.item-box').last().siblings('div')).length==0 && $('.item-box').length>0)
            {
                $('.item-box').last().parent().append('<div class="col-md-6 item-box" id="item_beneficios'+data.id+'">'
                        +'<span class="editar-item-box">'
                    +'<span class="editar-item-box-botones">'
                +'<span class="editar-item btn btn-info" data-toggle="modal" data-target="#editarItem" data-id="'+data.id+'"  data-item="'+item+'" data-tab="'+tab+'" data-imagen="'+data.imagen+'" data-texto="'+texto+'" data-nuevo="1">Editar</span>'
                +'<span class="btn btn-danger eliminar-item"  data-id="'+data.id+'">Eliminar</span>'
                +'</span></span>'
                    +'<div class="col-sm-4 imagen">'
                    +'<img class="img-responsive img-original" src="'+ruta+data.imagen+'"/>'
                    +'</div>'
                    +'<div class="col-sm-8 textos">'
                    +'<div class="subtitulo subtitulo-custom-color">'
                    +'<h3>'
                    +item
                    +'</h3>'
                    +'</div>'
                    +'<div class="parrafo comentario-custom-color" style="margin-top:7px">'
                    +'<p>'+texto+'</p></div></div></div>');
            }
            else{
                $('.listado-b').append('<div class="col-md-12 par"><div class="col-md-6 item-box" id="item_beneficios'+data.id+'">'
                    +'<span class="editar-item-box">'
                    +'<span class="editar-item-box-botones">'
                    +'<span class="editar-item fa fa-pencil" data-toggle="modal" data-target="#editarItem" data-id="'+data.id+'"  data-item="'+item+'" data-tab="'+tab+'" data-imagen="'+data.imagen+'" data-texto="'+texto+'"  data-nuevo="1"></span>'
                    +'<span class="fa fa-times eliminar-item"  data-id="'+data.id+'"></span>'
                    +'</span></span>'
                    +'<div class="col-sm-4 imagen">'
                    +'<img class="img-responsive img-original" src="'+ruta+data.imagen+'"/>'
                    +'</div>'
                    +'<div class="col-sm-8 textos">'
                    +'<div class="subtitulo subtitulo-custom-color">'
                    +'<h3>'
                    +item
                    +'</h3>'
                    +'</div>'
                    +'<div class="parrafo comentario-custom-color" style="margin-top:7px">'
                    +'<p>'+texto+'</p></div></div></div></div>');
            }
            $('#editarItem').modal('hide');
            /*location.reload();*/
        },
        error: function (xmlHttpRequest, textStatus, errorThrown){
            if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                return;
        }
    }, "json");

}
function UpdateItem(id, item, texto)
{
    var data = new FormData();
    var file = document.getElementById('file-item');

    if (file.files.length>0)
    {
        data.append('file', file.files[0]);
    }

    data.append('id', id);
    data.append('item', item);
    data.append('texto', texto);
    data.append('id_proyecto', $('body').attr('data-idpry'));
    data.append('idioma', $('body').attr('data-idioma'));
    data.append('_token', $('body').attr('data-token'));

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/updateitem',
        processData: false,
        contentType: false,
        data: data,
        success: function (data) {
            var  ruta = $('body').attr('data-myurl')+'/upload/' + $('body').attr('data-idpry') + '/galeria/';
            $('#item_beneficios'+data.id).find('.imagen img').attr('src', ruta+data.imagen);
            $('#item_beneficios'+data.id).find('.subtitulo h3').text(item);
            $('#item_beneficios'+data.id).find('.parrafo p').text(texto);
            if($('#item_beneficios'+data.id).find('.editar-item').attr('data-nuevo')!='1')
            {
                $('#item_beneficios'+data.id).find('.parrafo').css('margin-top','-15px');
            }

            $('#item_beneficios'+data.id).find('.editar-item').attr('data-item', item);
            $('#item_beneficios'+data.id).find('.editar-item').attr('data-texto', texto);
            $('#item_beneficios'+data.id).find('.editar-item').attr('data-imagen', data.imagen);
            $('#editarItem').modal('hide');

        },
        error: function (xmlHttpRequest, textStatus, errorThrown){
            if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                return;
        }
    }, "json");

}
$(document).on('click', '.editar-item', function() {
    var ruta = $('body').attr('data-myurl')+'/upload/'+$('body').attr('data-idpry')+'/galeria/';
    var ruta_new_pic = $('body').attr('data-myurl')+'/img/pic-fondo.png';
    $('.label-cargando').addClass('nomostrar');

    $('#edit-item-name').val($(this).attr('data-item'));

    $('#id-item').val($(this).attr('data-id'));
    $('#id-tab-item').val($(this).attr('data-tab'));
    $('#edit-texto-item').val($(this).attr('data-texto'));

    if($(this).attr('data-id')=='0') {
        $('#box-item').find('img').attr('src', ruta_new_pic);
    }
    else{
        $('#box-item').find('img').attr('src', ruta + $(this).attr('data-imagen'));
    }


});
$(document).on('click', '.btn-save-item', function() {
    $('.label-cargando').removeClass('nomostrar');
    $('.nota-editar-img').addClass('nomostrar');

    var name = $('#edit-item-name').val();
    var texto = $('#edit-texto-item').val();
    var id = $('#id-item').val();
    var tab= $('#id-tab-item').val();

    if(id == '0')
    {
        createItem(tab, name, texto);
    }
    else{
        UpdateItem(id, name, texto);
    }
});
$(document).on('hidden.bs.modal', '#editarItem', function() {
    $('.label-cargando').addClass('nomostrar');
    $('.nota-editar-img').removeClass('nomostrar');
    $('#edit-item-name').val('');
    $("#file-item").replaceWith($("#file-item").clone());
});

$(document).on('change', '.btn-file-item :file', function() {
    var reader = new FileReader();

    reader.onload = function(e) {

        $('#box-item').find('img')
            .attr('src', e.target.result)
            .css('width', '100%');
    };

    reader.readAsDataURL(this.files[0]);

});


$(document).on('click', '.eliminar-item', function() {

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
            location.reload();
        },
        error: function(){
            console.log('Error en la conexión');
        }
    });
});

