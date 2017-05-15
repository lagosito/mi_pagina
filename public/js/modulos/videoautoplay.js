autoPlay = function(){

    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "//www.youtube.com/embed/" + $("#youtube-player-h_autoplay").attr('data-id') + "?autoplay=1&loop=1&playlist=" + $("#youtube-player-h_autoplay").attr('data-id') + "&border=0&wmode=opaque&enablejsapi=1&controls=1&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    $("#youtube-player-h_autoplay div").replaceWith(iframe);

    document.getElementById('youtube-iframe').contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*')
    $("#youtube-player-h_autoplay").addClass('pause-autovideo');
    $("#youtube-player-h_autoplay").removeClass('play-autovideo');


};