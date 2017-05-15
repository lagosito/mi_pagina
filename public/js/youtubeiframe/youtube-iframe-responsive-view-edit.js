(function() {
    var v = document.getElementsByClassName("youtube-player");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = labnolThumb(v[n].dataset.id, v[n].dataset.modulo);
        v[n].appendChild(p);
    }
})();

function labnolThumb(id, modulo) {
    return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg">' +
        '<div class="fa fa-play playsimbol fondo-boton edit-IDvideo-play" id="idvideo-play' + modulo +'" data-pk="'+ modulo+'" data-video="' +id +'" data-toggle="popover" data-trigger="click" data-popover-content="#popoverIDvideo-play" title="" ></div>';
}