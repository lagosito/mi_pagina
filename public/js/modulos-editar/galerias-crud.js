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