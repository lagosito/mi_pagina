//reemplazar modulos unicos(cabecera, pie)
$(document).on('click', '.replace-modulo', function() {

    $('#listmodulos').empty();
    var id_modulo = $(this).attr('data-id');
    var id_pry = $(this).attr('data-pry');
    var tipo = $(this).attr('data-tipo');

    $('#id_modulo_actual').val(id_modulo);
    $('#id_pry_new_modulo').val(id_pry);
    $('#tipo_modulo_nuevo').val(tipo);

    var data = {};
    data._token = $('body').attr('data-token');
    data.tipo = tipo;

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/obtenermodulosunicos',
        data: data,
        success: function (data) {
            $('#listmodulos').append(data);
            $('#replaceModulo').modal('show');
        },
        error: function () {
            alert('Error en la conexión');
        }
    });

});

$(document).on('click', '.modulo-unico', function() {
    $('#id_modulo_nuevo').val($(this).attr('data-id'));
    $('.marcoselect').removeClass('checked');
    $(this).parent().addClass('checked');
});

$(document).on('click', '.replaceModulo-button', function() {
    $('#listmodulosunicos').addClass('nomostrar');
    $('#confirmacion_replaceModulounico').removeClass('nomostrar');
});
$(document).on('click', '.cancel-replace-modulo', function() {
    $('#listmodulosunicos').removeClass('nomostrar');
    $('#confirmacion_replaceModulounico').addClass('nomostrar');
});

//end reemplazar modulos unicos(cabecera, pie)

//agregar modulos contenido
$(document).on('click', '.add-modulo-contenido', function() {

    $('#listmoduloscontenido').empty();
    var id_pry = $(this).attr('data-pry');
    var id_menu_url = $(this).attr('data-menu-url');

    $('#id_pry_mdcontenidos').val(id_pry);
    $('#id_menu_url_mdcontenidos').val(id_menu_url);

    var data = {};
    data._token = $('body').attr('data-token');

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/obtenercontenidos',
        data: data,
        success: function (data) {
            $('#listmoduloscontenido').append(data);
            $('#addModulosContenido').modal('show');
        },
        error: function () {
            alert('Error en la conexión');
        }
    });

});

$(document).on('click', '.contenido-new', function() {
    var idmodulo = $(this).attr('data-idmodulo');

    if ($(this).parent().hasClass('checked'))
    {
        $(this).parent().removeClass('checked');
        $(this).parent().find('input.mdseleccionados').removeAttr('checked');
    }
    else
    {
        $(this).parent().addClass('checked');
        $(this).parent().find('input.mdseleccionados').prop('checked', 'checked');
    }
});

//end agregar modulos contenido

//delete modulo
$(document).on('click', '.delete-modulo', function() {

    var id_modulo = $(this).attr('data-id');
    var id_pry = $(this).attr('data-pry');

    $('#id_modulo_to_delete').val(id_modulo);
    $('#id_pry_modulo_to_delete').val(id_pry);
});
//end delete modulo

//cabeceras internas
$(document).on('click', '.cabecera-internas', function() {

    $('#list-cabeceras-internas').empty();
    var id_pry = $(this).attr('data-pry');

    $('#id_pry_cabecerainterna').val(id_pry);

    var data = {};
    data._token = $('body').attr('data-token');

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/obtenercabecerasinternas',
        data: data,
        success: function (data) {
            $('#list-cabeceras-internas').append(data);
            $('#cabeceraInternas').modal('show');
        },
        error: function () {
            alert('Error en la conexión');
        }
    });

});

$(document).on('click', '.modulo-cabecera-interna', function() {
    $('#id_new_cabecerainterna').val($(this).attr('data-id'));
    $('.marcoselect').removeClass('checked');
    $(this).parent().addClass('checked');
});

$(document).on('click', '.cabecera-interna-button', function() {
    $('#listcabecerasinternas').addClass('nomostrar');
    $('#confirmacion_cabecera_interna').removeClass('nomostrar');
});
$(document).on('click', '.cancel-cabecera-interna', function() {
    $('#listcabecerasinternas').removeClass('nomostrar');
    $('#confirmacion_cabecera_interna').addClass('nomostrar');
});

//end cabeceras internas