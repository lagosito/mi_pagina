
function createCollageItem(tab, item)
{
    var data = new FormData();
    var file = document.getElementById('file-collage');

    if (file.files.length>0)
    {
        data.append('file', file.files[0]);
    }


    data.append('tab', tab);
    data.append('item', item);
    data.append('id_proyecto', $('body').attr('data-idpry'));
    data.append('_token', $('body').attr('data-token'));

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/createcollageitem',
        processData: false,
        contentType: false,
        data: data,
        success: function (data) {
            location.reload();
        },
        error: function (xmlHttpRequest, textStatus, errorThrown){
            if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                return;
        }
    }, "json");

}
function UpdateCollageItem(id, item)
{
    var data = new FormData();
    var file = document.getElementById('file-collage');

    if (file.files.length>0)
    {
        data.append('file', file.files[0]);
    }

    data.append('id', id);
    data.append('item', item);
    data.append('id_proyecto', $('body').attr('data-idpry'));
    data.append('idioma', $('body').attr('data-idioma'));
    data.append('_token', $('body').attr('data-token'));

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/updatecollageitem',
        processData: false,
        contentType: false,
        data: data,
        success: function (data) {
            location.reload();

        },
        error: function (xmlHttpRequest, textStatus, errorThrown){
            if(xmlHttpRequest.readyState==0 || xmlHttpRequest.status ==0)
                return;
        }
    }, "json");

}
$(document).on('click', '.editar-collage-item', function() {
    var ruta = $('body').attr('data-myurl')+'/upload/'+$('body').attr('data-idpry')+'/galeria/';
    var ruta_new_pic = $('body').attr('data-myurl')+'/img/pic-fondo.png';
    $('.label-cargando').addClass('nomostrar');

    $('#edit-collage-name').val($(this).attr('data-item'));

    $('#id-collageitem').val($(this).attr('data-id'));
    $('#id-collagetab').val($(this).attr('data-tab'));

    if($(this).attr('data-id')=='0') {
        $('#box-collageitem').find('img').attr('src', ruta_new_pic);
    }
    else{
        $('#box-collageitem').find('img').attr('src', ruta + $(this).attr('data-imagen'));
    }


});
$(document).on('click', '.btn-save-collage', function() {
    $('.label-cargando').removeClass('nomostrar');
    $('.nota-editar-img').addClass('nomostrar');

    var texto = $('#edit-collage-name').val();
    var id = $('#id-collageitem').val();
    var tab= $('#id-collagetab').val();

    if(id == '0')
    {
        createCollageItem(tab, texto);
    }
    else{
        UpdateCollageItem(id, texto);
    }
});
$(document).on('hidden.bs.modal', '#editarCollageItem', function() {
    $('.label-cargando').addClass('nomostrar');
    $('.nota-editar-img').removeClass('nomostrar');
    $('#edit-collage-name').val('');
    $("#file-collage").replaceWith($("#file-collage").clone());
});

$(document).on('change', '.btn-file-collage :file', function() {
    var reader = new FileReader();

    reader.onload = function(e) {

        $('#box-collageitem').find('img')
            .attr('src', e.target.result)
            .css('width', '100%');
    };

    reader.readAsDataURL(this.files[0]);

});


$(document).on('click', '.eliminar-collage-item', function() {

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

