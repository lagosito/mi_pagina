//editar slider

$(document).on('click', '.editar-slider', function() {

    $('#itemslider').empty();
    var id_modulo = $(this).attr('data-id');
    var id_pry = $(this).attr('data-pry');
    var tam_recomendado = $('#container'+id_modulo).find('.slider-tam').attr('data-recomendacion');

    $('#id_modulo_slider').val(id_modulo);
    $('#id_pry_slider').val(id_pry);
    $('#imgslider_eliminado').val('0');
    $('#slider-tam-recomendado').text('');
    $('#slider-tam-recomendado').text(tam_recomendado);

    var tipo=0;
    if($(this).hasClass('slider-img-texto'))
    {
        $('.addSliderimg').addClass('slider-img-texto');
        tipo = 1;
    }
    else
    {
        $('.addSliderimg').removeClass('slider-img-texto');
        tipo=0;
    }

    var data = {};
    data._token = $('body').attr('data-token');
    data.id_modulo = id_modulo;
    data.id_proyecto = id_pry;

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/obtenerimgslider',
        data: data,
        success: function (data) {
            $('#itemslider').append(data);
            if(tipo==1)
            {
                $('.texto-img-slider').removeClass('nomostrar');
                $('.link-img-slider').removeClass('nomostrar');
            }
        },
        error: function () {
            alert('Error en la conexión');
        }
    });

});

$(document).on('click', '.addSliderimg', function() {

    var cantImgSlider = $(".imagethumbslider").length;

    var data = '<div class="col-sm-6" style="margin-bottom: 30px;"><div class="col-sm-12" id="nuevoThumbSlider'+cantImgSlider+'">'
        +'<div class="imagethumbslider">'
        +'<input type="text" class="form-control nomostrar" name="cantfiles[]">'
        +'<img src="' + $('body').attr('data-myurl')+'/img/no-image.png" alt="" id="imginicial" width="220" height="160">'
    +'<span class="btn btn-primary btn-remove-selected-fileslider" data-id="'+cantImgSlider+'">'
    +'<span class="fa fa-remove"></span>'
    +'</span>'
    +'<span class="btn btn-primary btn-file-slider">'
    +'<span class="fa fa-folder-open-o"></span> <input type="file" id="fileslider'+ cantImgSlider +'" class="fileslider" name="fileslider'+ cantImgSlider +'">'
    +'</span>'
    +'</div>'
    +'<input type="text" class="form-control" name="link[]" value="" placeholder="Link">'
    +'</div>';

    $('#itemslider').append(data);
});

$(document).on('change', '.btn-file-slider :file', function() {
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

/*document.querySelector('.fileslider').addEventListener('change', function(){

 });*/

$(document).on('click', '.btn-delete-slider', function() {

    var id_slider = $(this).attr('data-id');
    $('#imgslider_eliminado').val('1');

    var data = {};
    data._token = $('body').attr('data-token');
    data.id_slider = id_slider;

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/eliminarimgslider',
        data: data,
        success: function (data) {
            $('#imgThumbSlider'+ id_slider).parent().remove();
        },
        error: function () {
            alert('Error en la conexión');
        }
    });

});

$(document).on('click', '.btn-remove-selected-fileslider', function() {

    var id_nuevo_slider = $(this).attr('data-id');

    var div = $('#nuevoThumbSlider'+ id_nuevo_slider);
    var clon = '<div class="col-sm-6" id="nuevoThumbSlider'+ id_nuevo_slider +'">'
        +'<div class="imagethumbslider">'
        +'<input type="text" class="form-control nomostrar" name="cantfiles[]">'
        +'<img src="'+$('body').attr('data-myurl')+'/img/no-image.png" alt="" id="imginicial" width="220" height="160">'
    +'<span class="btn btn-primary btn-remove-selected-fileslider" data-id="'+ id_nuevo_slider +'">'
    +'<span class="fa fa-remove"></span>'
    +'</span>'
    +'<span class="btn btn-primary btn-file-slider">'
    +'<span class="fa fa-folder-open-o"></span> <input type="file" id="fileslider'+ id_nuevo_slider +'" class="fileslider" name="fileslider'+ id_nuevo_slider +'">'
    +'</span>'
    +'</div>'
    +'<input type="text" class="form-control" name="link[]" value="">'
    +'</div>';

    div.replaceWith(clon);

});

$('#editSlider').on('hidden.bs.modal', function () {
    if($('#imgslider_eliminado').val()=='1')
    {
        location.reload();
    }

});
//end editar slider

//editar slider img-texto

$(document).on('click', '.editar-slider-img-texto', function() {

    $('#item-sliderimgtexto').empty();
    var id_modulo = $(this).attr('data-id');
    var id_pry = $(this).attr('data-pry');
    var tam_recomendado = $('#container'+id_modulo).find('.slider-tam').attr('data-recomendacion');
    
    $('#id_modulo_sliderimgtexto').val(id_modulo);
    $('#id_pry_sliderimgtexto').val(id_pry);
    $('#slider_imgtexto_eliminado').val('0');
    $('#idioma_slider_imgtexto').val($('body').attr('data-idioma'));
    $('#slider-tam-recomendado').text('');
    $('#slider-tam-recomendado').text(tam_recomendado);

    var holder1 = $('#container' + $('#id_modulo_sliderimgtexto').val()).find('.holders').attr('data-holder1');
    var holder2 = $('#container' + $('#id_modulo_sliderimgtexto').val()).find('.holders').attr('data-holder2');
    var holder3 = $('#container' + $('#id_modulo_sliderimgtexto').val()).find('.holders').attr('data-holder3');

    var data = {};
    data._token = $('body').attr('data-token');
    data.id_modulo = id_modulo;
    data.id_proyecto = id_pry;
    data.idioma = $('body').attr('data-idioma');
    data.holder1 = holder1;
    data.holder2 = holder2;
    data.holder3 = holder3;

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/obtenerimgtextoslider',
        data: data,
        success: function (data) {
            $('#item-sliderimgtexto').append(data);
        },
        error: function () {
            alert('Error en la conexión');
        }
    });

});

$(document).on('click', '.addSliderimgtexto', function() {

    var cantImgSlider = $(".imagethumbslider").length;
    var holder1 = $('#container' + $('#id_modulo_sliderimgtexto').val()).find('.holders').attr('data-holder1');
    var holder2 = $('#container' + $('#id_modulo_sliderimgtexto').val()).find('.holders').attr('data-holder2');
    var holder3 = $('#container' + $('#id_modulo_sliderimgtexto').val()).find('.holders').attr('data-holder3');

    var data = '<div class="col-sm-12" style="margin-bottom: 30px;padding:0"><div class="col-sm-6" id="nuevoThumbSlider'+cantImgSlider+'">'
        +'<input type="text" class="form-control nomostrar" name="cantfiles[]">'
        +'<div class="imagethumbslider">'
        +'<img src="'+$('body').attr('data-myurl')+'/img/no-image.png" alt="" id="imginicial" width="220" height="160">'
    +'<span class="btn btn-primary btn-remove-selected-fileslider" data-id="'+cantImgSlider+'">'
    +'<span class="fa fa-remove"></span>'
    +'</span>'
    +'<span class="btn btn-primary btn-file-slider">'
    +'<span class="fa fa-folder-open-o"></span> <input type="file" id="fileslider'+ cantImgSlider +'" class="fileslider" name="fileslider'+ cantImgSlider +'">'
    +'</span>'
    +'</div>'
    +'</div>'
    +'<div class="col-sm-6">'
    +'<textarea class="form-control" name="texto-img-slider[]" placeholder="'+holder1+'" style="margin-bottom: 3px;">'
    +'</textarea>'
    +'<textarea class="form-control" name="texto2-img-slider[]" placeholder="'+holder2+'" style="margin-bottom: 3px;">'
    +'</textarea>'
    +'<textarea class="form-control" name="link-img-slider[]" placeholder="'+holder3+'" style="margin-bottom: 3px;">'
    +'</textarea>'
    +'</div></div>';

    $('#item-sliderimgtexto').append(data);
});

$(document).on('click', '.btn-delete-sliderimg-texto', function() {

    var id_slider = $(this).attr('data-id');
    $('#slider_imgtexto_eliminado').val('1');

    var data = {};
    data._token = $('body').attr('data-token');
    data.id_slider = id_slider;

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/eliminarimgslider',
        data: data,
        success: function (data) {
            $('#imgThumbSlider'+ id_slider).parent().remove();
        },
        error: function () {
            alert('Error en la conexión');
        }
    });

});



$('#editSlider-ImgTexto').on('hidden.bs.modal', function () {
    if($('#slider_imgtexto_eliminado').val()=='1')
    {
        location.reload();
    }

});
//end editar slider img-texto


//editar slider texto

$(document).on('click', '.editar-slider-texto', function() {

    $('#itemslidertexto').empty();
    var id_modulo = $(this).attr('data-id');

    $('#id_modulo_slider_texto').val(id_modulo);
    $('#textoslider_eliminado').val('0');
    $('#idioma_slider_texto').val($('body').attr('data-idioma'));

    var data = {};
    data._token = $('body').attr('data-token');
    data.id_modulo = id_modulo;
    data.idioma = $('body').attr('data-idioma');

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/obtenertextoslider',
        data: data,
        success: function (data) {

            $('#itemslidertexto').append(data);
            $('.textarea-editable').wysihtml5({
                stylesheets: [$('body').attr('data-myurl')+'/css/wysihtml5/stylesheet.css'],
                toolbar: {
                    "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
                    "emphasis": true, //Italics, bold, etc. Default true
                    "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                    "html": false, //Button which allows you to edit the generated HTML. Default false
                    "link": true, //Button to insert a link. Default true
                    "image": false, //Button to insert an image. Default true,
                    "color": true, //Button to change color of font
                    "blockquote": false, //Blockquote
                    "size":'sm' //default: none, other options are xs, sm, lg

                }
            });
        },
        error: function () {
            alert('Error en la conexión');
        }
    });

});

$(document).on('click', '.addSlidertexto', function() {

    var cantTextoSlider = $(".slider-texto").length;

    var data = '<div class="col-sm-12 slider-texto">'
        +'<input type="text" class="form-control nomostrar" name="canttextos[]">'
        +'<textarea id="texto-slider-nuevo'+cantTextoSlider+'" class="textarea-editable" name="slider_textos[]"></textarea>'
        +'</div>';


    $('#itemslidertexto').append(data);
    $('#texto-slider-nuevo'+cantTextoSlider).wysihtml5({
        stylesheets: [$('body').attr('data-myurl')+'/css/wysihtml5/stylesheet.css'],
        toolbar: {
            "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
            "emphasis": true, //Italics, bold, etc. Default true
            "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
            "html": false, //Button which allows you to edit the generated HTML. Default false
            "link": true, //Button to insert a link. Default true
            "image": false, //Button to insert an image. Default true,
            "color": true, //Button to change color of font
            "blockquote": false, //Blockquote
            "size":'sm' //default: none, other options are xs, sm, lg
        }
    });
    $('iframe .wysihtml5-sandbox').css('width', '100%');
});


$(document).on('click', '.btn-delete-slider-texto', function() {

    var id_slider = $(this).attr('data-id');
    $('#textoslider_eliminado').val('1');

    var data = {};
    data._token = $('body').attr('data-token');
    data.id_slider = id_slider;

    $.ajax({
        type: "POST",
        url: $('body').attr('data-urlsegment')+'/eliminartextoslider',
        data: data,
        success: function (data) {
            $('#textareaSlider'+ id_slider).remove();
        },
        error: function () {
            alert('Error en la conexión');
        }
    });

});

$('#editSlidertexto').on('hidden.bs.modal', function () {
    if($('#textoslider_eliminado').val()=='1')
    {
        location.reload();
    }

});
//end editar slider texto