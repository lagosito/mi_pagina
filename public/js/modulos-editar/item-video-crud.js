
function createItemVideo(tab, item, texto, video)
{
    var data = {};
    data._token = $('body').attr('data-token');
    data.tab = tab;
    data.item = item;
    data.texto = texto;
    data.video = video;
    data.id_proyecto = $('body').attr('data-idpry');

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/createitemvideo',
        data: data,
        success: function(data){
            $('.listado-videos-carousel').append('<div class="col-sm-4 item-video-box" id="item_video_carousel'+data.id+'">'
                +'<span class="hovervideo">'
                +'<span class="editar-item-video-box-botones">'
                +'<span class="editar-item-video fa fa-pencil" data-toggle="modal" data-target="#editarItemVideo" data-id="'+data.id+'"  data-item="'+item+'" data-tab="'+tab+'" data-imagen="'+video+'" data-texto="'+texto+'"></span>'
                +'<span class="fa fa-times eliminar-item-video"  data-id="'+data.id+'"></span>'
                +'</span>'
                +'<h1 class="titulo titulo-custom-color">'+item+'</h1>'
                +'<p class="parrafo comentario-custom-color">'+texto+'</p></span>'
                +'<div class="slickimagen">'
                +'<img src="//i.ytimg.com/vi/'+video+'/hqdefault.jpg" class="img-responsive">'
                +'</div></div>');

            $('#editarItemVideo').modal('hide');
        },
        error: function(){
            alert('Error en la conexión');
        }
    });
}
function UpdateItemVideo(id, item, texto, video)
{

    var data = {};
    data._token = $('body').attr('data-token');
    data.id = id;
    data.item = item;
    data.texto = texto;
    data.video = video;
    data.idioma = $('body').attr('data-idioma');
    data.id_proyecto = $('body').attr('data-idpry');

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/updateitemvideo',
        data: data,
        success: function(){
            $('#item_video_carousel'+id).find('.slickimagen').empty();
            $('#item_video_carousel'+id).find('.slickimagen').append('<img src="//i.ytimg.com/vi/'+video+'/hqdefault.jpg" class="img-responsive">');
            $('#item_video_carousel'+id).find('.editar-item-video').attr('data-item', item);
            $('#item_video_carousel'+id).find('.editar-item-video').attr('data-texto', texto);
            $('#item_video_carousel'+id).find('.editar-item-video').attr('data-imagen', video);
            $('#item_video_carousel'+id).find('.parrafo').text(texto);
            $('#item_video_carousel'+id).find('.titulo').text(item);
            $('#editarItemVideo').modal('hide');

        },
        error: function (xmlHttpRequest, textStatus, errorThrown){
            if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                return;
        }
    }, "json");

}
$(document).on('click', '.editar-item-video', function() {
  $('.label-cargando').addClass('nomostrar');

    $('#edit-item-video-name').val($(this).attr('data-item'));

    $('#id-item-video').val($(this).attr('data-id'));
    $('#id-tab-item-video').val($(this).attr('data-tab'));
    $('#edit-item-video-texto').val($(this).attr('data-texto'));
    $('#item-video-imagen').val($(this).attr('data-imagen'));

});
$(document).on('click', '.btn-save-item-video', function() {
    $('.label-cargando').removeClass('nomostrar');
    $('.nota-editar-img').addClass('nomostrar');

    var name = $('#edit-item-video-name').val();
    var texto = $('#edit-item-video-texto').val();
    var id = $('#id-item-video').val();
    var tab= $('#id-tab-item-video').val();
    var video = $('#item-video-imagen').val();

    if(id == '0')
    {
        createItemVideo(tab, name, texto, video);
    }
    else{
        UpdateItemVideo(id, name, texto, video);
    }
});
$(document).on('hidden.bs.modal', '#editarItem', function() {
    $('.label-cargando').addClass('nomostrar');
    $('.nota-editar-img').removeClass('nomostrar');
    $('#edit-item-name').val('');
});


$(document).on('click', '.eliminar-item-video', function() {

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
            $('#item_video_carousel'+id).remove();
        },
        error: function(){
            console.log('Error en la conexión');
        }
    });
});

