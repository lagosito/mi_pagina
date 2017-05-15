
var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player_c8;
var player_c12;
var player_c16;
var player_h4;

onYouTubeIframeAPIReady = function () {

    if ( document.getElementById('player_c8')) {
        var id_c8 = document.getElementById('player_c8').getAttribute('data-id-video');
        player_c8 = new YT.Player('player_c8', {
            width: 500,
            height: 300,
            videoId: id_c8,  // youtube video id
            playerVars: {
                'autoplay': 0,
                'rel': 0,
                'showinfo': 0
            },
            events: {
                'onStateChange': onPlayerStateChange_c8
            }
        });
    }

    if ( document.getElementById('player_c12')) {
        var id_c12 = document.getElementById('player_c12').getAttribute('data-id-video');
        player_c12 = new YT.Player('player_c12', {
            videoId: id_c12,  // youtube video id
            playerVars: {
                'autoplay': 0,
                'rel': 0,
                'showinfo': 0
            },
            events: {
                'onStateChange': onPlayerStateChange_c12
            }
        });
    }

    if ( document.getElementById('player_c16')) {
        var id_c16 = document.getElementById('player_c16').getAttribute('data-id-video');
        player_c16 = new YT.Player('player_c16', {
            videoId: id_c16,  // youtube video id
            width: 550,
            height: 350,
            playerVars: {
                'autoplay': 0,
                'rel': 0,
                'showinfo': 0
            },
            events: {
                'onStateChange': onPlayerStateChange_c16
            }
        });
    }

    if ( document.getElementById('player_h4')) {
        var id_h4 = document.getElementById('player_h4').getAttribute('data-id-video');
        player_h4 = new YT.Player('player_h4', {
            videoId: id_h4,  // youtube video id
            width: '100%',
            height: '100%',
            playerVars: {
                'autoplay': 0,
                'rel': 0,
                'showinfo': 0
            },
            events: {
                'onStateChange': onPlayerStateChange_h4
            }
        });
    }

};

function onPlayerStateChange_c8(event) {
    if (event.data == YT.PlayerState.ENDED) {
        $('.linkvideo_c8').fadeIn('normal');
    }
    else{
        $('.linkvideo_c8').fadeOut('normal');
    }
}
function onPlayerStateChange_c12(event) {
    if (event.data == YT.PlayerState.ENDED) {
        $('.linkvideo_c12').fadeIn('normal');
    }
    else{
        $('.linkvideo_c12').fadeOut('normal');
    }
}
function onPlayerStateChange_c16(event) {
    if (event.data == YT.PlayerState.ENDED) {
        $('.linkvideo_c16').fadeIn('normal');
    }
    else{
        $('.linkvideo_c16').fadeOut('normal');
    }
}

function onPlayerStateChange_h4(event) {
    if (event.data == YT.PlayerState.ENDED) {
        $('.linkvideo_h4').fadeIn('normal');
    }
    else{
        $('.linkvideo_h4').fadeOut('normal');
    }
}