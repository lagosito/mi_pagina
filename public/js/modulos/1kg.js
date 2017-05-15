kg1 = function(){
    var clickVentana = $('.container1kg .aboutsdiv').on('click', function(event) {
        $('.ventana').fadeIn( 300 );
    });
    var cerrar = $('.ventana').on('click', function(event) {
        $('.ventana').fadeOut( 300 );
    });
    var abrirventana= $('.imagen-logo-fixed').on('click', function(event) {
        $('.ventanatemporal').fadeIn( 300 );
    });
    var cerrarventana= $('.ventanatemporal').on('click', function(event) {
        $('.ventanatemporal').fadeOut( 300 );
    });
    elminarVentana = function(){
        setTimeout(function(){$('.ventanatemporal').fadeOut( 300 );
            }, 10000);
    };
    crea_funcion = function(datas){
        alert(datas);
    }

}
