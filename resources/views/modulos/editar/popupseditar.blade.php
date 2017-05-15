<div class="popover hidden" id="popoversocial" >
    <div class="arrow" style="left: 50%;"></div>
    <h3 class="popover-title">Seleccione red social</h3>
    <div class="popover-content">
        <div>
            <div class="form-group">
                <div>
                    <div class="editable-input">
                        <select class="form-control input-medium list-social">
                            @foreach($sociales as $icono)
                                <option class="optsocial" data-icono="{{$icono->icono}}" value="{{$icono->id}}">{{$icono->marca}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br/>
                    <div class="editable-input">
                        <br/>
                        <label>URL: </label>
                        <input class=" form-control input-large" value="" id="urlsocial" name="urlsocial">
                    </div>
                    <input name="id_socialicono" class="nomostrar" id="id_socialicono" value=""/>
                    <input name="icono" class="nomostrar" id="icono" value=""/>
                    <input name="id_red_social" class="nomostrar" id="id_red_social" value=""/>

                    <div class="editable-buttons">
                        <br/>
                        <button type="button" class="btn blue editable-submit editsocial-submit">
                            <i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn default editable-cancel" onclick="$('.popover').popover('hide');">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popover hidden" id="popovericonos" >
    <div class="arrow" style="left: 50%;"></div>
    <h3 class="popover-title">Seleccione icono</h3>
    <div class="popover-content">
        <div>
            <div class="form-group">
                <div>
                    <div class="editable-input">
                        <select id="select-fa-icons" class="form-control input-medium list-fa-icons" style="font-family: 'FontAwesome', 'sans-serif';">
                            <option value="fa-align-left">&#xf036; fa-align-left</option>
                            <option value="fa-align-right">&#xf038; fa-align-right</option>
                            <option value="fa-amazon">&#xf270; fa-amazon</option>
                            <option value="fa-ambulance">&#xf0f9; fa-ambulance</option>
                            <option value="fa-anchor">&#xf13d; fa-anchor</option>
                            <option value="fa-android">&#xf17b; fa-android</option>
                            <option value="fa-angellist">&#xf209; fa-angellist</option>
                            <option value="fa-angle-double-down">&#xf103; fa-angle-double-down</option>
                            <option value="fa-angle-double-left">&#xf100; fa-angle-double-left</option>
                            <option value="fa-angle-double-right">&#xf101; fa-angle-double-right</option>
                            <option value="fa-angle-double-up">&#xf102; fa-angle-double-up</option>

                            <option value="fa-angle-left">&#xf104; fa-angle-left</option>
                            <option value="fa-angle-right">&#xf105; fa-angle-right</option>
                            <option value="fa-angle-up">&#xf106; fa-angle-up</option>
                            <option value="fa-apple">&#xf179; fa-apple</option>
                            <option value="fa-archive">&#xf187; fa-archive</option>
                            <option value="fa-area-chart">&#xf1fe; fa-area-chart</option>
                            <option value="fa-arrow-circle-down">&#xf0ab; fa-arrow-circle-down</option>
                            <option value="fa-arrow-circle-left">&#xf0a8; fa-arrow-circle-left</option>
                            <option value="fa-arrow-circle-o-down">&#xf01a; fa-arrow-circle-o-down</option>
                            <option value="fa-arrow-circle-o-left">&#xf190; fa-arrow-circle-o-left</option>
                            <option value="fa-arrow-circle-o-right">&#xf18e; fa-arrow-circle-o-right</option>
                            <option value="fa-arrow-circle-o-up">&#xf01b; fa-arrow-circle-o-up</option>
                            <option value="fa-arrow-circle-right">&#xf0a9; fa-arrow-circle-right</option>
                            <option value="fa-arrow-circle-up">&#xf0aa; fa-arrow-circle-up</option>
                            <option value="fa-arrow-down">&#xf063; fa-arrow-down</option>
                            <option value="fa-arrow-left">&#xf060; fa-arrow-left</option>
                            <option value="fa-arrow-right">&#xf061; fa-arrow-right</option>
                            <option value="fa-arrow-up">&#xf062; fa-arrow-up</option>
                            <option value="fa-arrows">&#xf047; fa-arrows</option>
                            <option value="fa-arrows-alt">&#xf0b2; fa-arrows-alt</option>
                            <option value="fa-arrows-h">&#xf07e; fa-arrows-h</option>
                            <option value="fa-arrows-v">&#xf07d; fa-arrows-v</option>
                            <option value="fa-asterisk">&#xf069; fa-asterisk</option>
                            <option value="fa-at">&#xf1fa; fa-at</option>
                            <option value="fa-automobile">&#xf1b9; fa-automobile</option>
                            <option value="fa-backward">&#xf04a; fa-backward</option>
                            <option value="fa-balance-scale">&#xf24e; fa-balance-scale</option>
                            <option value="fa-ban">&#xf05e; fa-ban</option>
                            <option value="fa-bank">&#xf19c; fa-bank</option>
                            <option value="fa-bar-chart">&#xf080; fa-bar-chart</option>
                            <option value="fa-bar-chart-o">&#xf080; fa-bar-chart-o</option>

                            <option value="fa-battery-full">&#xf240; fa-battery-full</option>
                            <option value="fa-beer">&#xf0fc; fa-beer</option>
                            <option value="fa-behance">&#xf1b4; fa-behance</option>
                            <option value="fa-behance-square">&#xf1b5; fa-behance-square</option>
                            <option value="fa-bell">&#xf0f3; fa-bell</option>
                            <option value="fa-bell-o">&#xf0a2; fa-bell-o</option>
                            <option value="fa-bell-slash">&#xf1f6; fa-bell-slash</option>
                            <option value="fa-bell-slash-o">&#xf1f7; fa-bell-slash-o</option>
                            <option value="fa-bicycle">&#xf206; fa-bicycle</option>
                            <option value="fa-binoculars">&#xf1e5; fa-binoculars</option>
                            <option value="fa-birthday-cake">&#xf1fd; fa-birthday-cake</option>
                            <option value="fa-bitbucket">&#xf171; fa-bitbucket</option>
                            <option value="fa-bitbucket-square">&#xf172; fa-bitbucket-square</option>
                            <option value="fa-bitcoin">&#xf15a; fa-bitcoin</option>
                            <option value="fa-black-tie">&#xf27e; fa-black-tie</option>
                            <option value="fa-bold">&#xf032; fa-bold</option>
                            <option value="fa-bolt">&#xf0e7; fa-bolt</option>
                            <option value="fa-bomb">&#xf1e2; fa-bomb</option>
                            <option value="fa-book">&#xf02d; fa-book</option>
                            <option value="fa-bookmark">&#xf02e; fa-bookmark</option>
                            <option value="fa-bookmark-o">&#xf097; fa-bookmark-o</option>
                            <option value="fa-briefcase">&#xf0b1; fa-briefcase</option>
                            <option value="fa-btc">&#xf15a; fa-btc</option>
                            <option value="fa-bug">&#xf188; fa-bug</option>
                            <option value="fa-building">&#xf1ad; fa-building</option>
                            <option value="fa-building-o">&#xf0f7; fa-building-o</option>
                            <option value="fa-bullhorn">&#xf0a1; fa-bullhorn</option>
                            <option value="fa-bullseye">&#xf140; fa-bullseye</option>
                            <option value="fa-bus">&#xf207; fa-bus</option>
                            <option value="fa-cab">&#xf1ba; fa-cab</option>
                            <option value="fa-calendar">&#xf073; fa-calendar</option>
                            <option value="fa-camera">&#xf030; fa-camera</option>
                            <option value="fa-car">&#xf1b9; fa-car</option>
                            <option value="fa-caret-up">&#xf0d8; fa-caret-up</option>
                            <option value="fa-cart-plus">&#xf217; fa-cart-plus</option>
                            <option value="fa-cc">&#xf20a; fa-cc</option>
                            <option value="fa-cc-amex">&#xf1f3; fa-cc-amex</option>
                            <option value="fa-cc-jcb">&#xf24b; fa-cc-jcb</option>
                            <option value="fa-cc-paypal">&#xf1f4; fa-cc-paypal</option>
                            <option value="fa-cc-stripe">&#xf1f5; fa-cc-stripe</option>
                            <option value="fa-cc-visa">&#xf1f0; fa-cc-visa</option>
                            <option value="fa-chain">&#xf0c1; fa-chain</option>
                            <option value="fa-check">&#xf00c; fa-check</option>
                            <option value="fa-chevron-left">&#xf053; fa-chevron-left</option>
                            <option value="fa-chevron-right">&#xf054; fa-chevron-right</option>
                            <option value="fa-chevron-up">&#xf077; fa-chevron-up</option>
                            <option value="fa-child">&#xf1ae; fa-child</option>
                            <option value="fa-chrome">&#xf268; fa-chrome</option>
                            <option value="fa-circle">&#xf111; fa-circle</option>
                            <option value="fa-circle-o">&#xf10c; fa-circle-o</option>
                            <option value="fa-circle-o-notch">&#xf1ce; fa-circle-o-notch</option>
                            <option value="fa-circle-thin">&#xf1db; fa-circle-thin</option>
                            <option value="fa-clipboard">&#xf0ea; fa-clipboard</option>
                            <option value="fa-clock-o">&#xf017; fa-clock-o</option>
                            <option value="fa-clone">&#xf24d; fa-clone</option>
                            <option value="fa-close">&#xf00d; fa-close</option>
                            <option value="fa-cloud">&#xf0c2; fa-cloud</option>
                            <option value="fa-cloud-download">&#xf0ed; fa-cloud-download</option>
                            <option value="fa-cloud-upload">&#xf0ee; fa-cloud-upload</option>
                            <option value="fa-cny">&#xf157; fa-cny</option>
                            <option value="fa-code">&#xf121; fa-code</option>
                            <option value="fa-code-fork">&#xf126; fa-code-fork</option>
                            <option value="fa-codepen">&#xf1cb; fa-codepen</option>
                            <option value="fa-coffee">&#xf0f4; fa-coffee</option>
                            <option value="fa-cog">&#xf013; fa-cog</option>
                            <option value="fa-cogs">&#xf085; fa-cogs</option>
                            <option value="fa-columns">&#xf0db; fa-columns</option>
                            <option value="fa-comment">&#xf075; fa-comment</option>
                            <option value="fa-comment-o">&#xf0e5; fa-comment-o</option>
                            <option value="fa-commenting">&#xf27a; fa-commenting</option>
                            <option value="fa-commenting-o">&#xf27b; fa-commenting-o</option>
                            <option value="fa-comments">&#xf086; fa-comments</option>
                            <option value="fa-comments-o">&#xf0e6; fa-comments-o</option>
                            <option value="fa-compass">&#xf14e; fa-compass</option>
                            <option value="fa-compress">&#xf066; fa-compress</option>
                            <option value="fa-connectdevelop">&#xf20e; fa-connectdevelop</option>
                            <option value="fa-contao">&#xf26d; fa-contao</option>
                            <option value="fa-copy">&#xf0c5; fa-copy</option>
                            <option value="fa-copyright">&#xf1f9; fa-copyright</option>
                            <option value="fa-creative-commons">&#xf25e; fa-creative-commons</option>
                            <option value="fa-credit-card">&#xf09d; fa-credit-card</option>
                            <option value="fa-crop">&#xf125; fa-crop</option>
                            <option value="fa-crosshairs">&#xf05b; fa-crosshairs</option>
                            <option value="fa-css3">&#xf13c; fa-css3</option>
                            <option value="fa-cube">&#xf1b2; fa-cube</option>
                            <option value="fa-cubes">&#xf1b3; fa-cubes</option>
                            <option value="fa-cut">&#xf0c4; fa-cut</option>
                            <option value="fa-cutlery">&#xf0f5; fa-cutlery</option>
                            <option value="fa-dashboard">&#xf0e4; fa-dashboard</option>
                            <option value="fa-dashcube">&#xf210; fa-dashcube</option>
                            <option value="fa-database">&#xf1c0; fa-database</option>
                            <option value="fa-dedent">&#xf03b; fa-dedent</option>
                            <option value="fa-delicious">&#xf1a5; fa-delicious</option>
                            <option value="fa-desktop">&#xf108; fa-desktop</option>
                            <option value="fa-deviantart">&#xf1bd; fa-deviantart</option>
                            <option value="fa-diamond">&#xf219; fa-diamond</option>
                            <option value="fa-digg">&#xf1a6; fa-digg</option>
                            <option value="fa-dollar">&#xf155; fa-dollar</option>
                            <option value="fa-download">&#xf019; fa-download</option>
                            <option value="fa-dribbble">&#xf17d; fa-dribbble</option>
                            <option value="fa-dropbox">&#xf16b; fa-dropbox</option>
                            <option value="fa-drupal">&#xf1a9; fa-drupal</option>
                            <option value="fa-edit">&#xf044; fa-edit</option>
                            <option value="fa-eject">&#xf052; fa-eject</option>
                            <option value="fa-ellipsis-h">&#xf141; fa-ellipsis-h</option>
                            <option value="fa-ellipsis-v">&#xf142; fa-ellipsis-v</option>
                            <option value="fa-empire">&#xf1d1; fa-empire</option>
                            <option value="fa-envelope">&#xf0e0; fa-envelope</option>
                            <option value="fa-envelope-o">&#xf003; fa-envelope-o</option>
                            <option value="fa-eur">&#xf153; fa-eur</option>
                            <option value="fa-euro">&#xf153; fa-euro</option>
                            <option value="fa-exchange">&#xf0ec; fa-exchange</option>
                            <option value="fa-exclamation">&#xf12a; fa-exclamation</option>
                            <option value="fa-exclamation-circle">&#xf06a; fa-exclamation-circle</option>
                            <option value="fa-exclamation-triangle">&#xf071; fa-exclamation-triangle</option>
                            <option value="fa-expand">&#xf065; fa-expand</option>
                            <option value="fa-expeditedssl">&#xf23e; fa-expeditedssl</option>
                            <option value="fa-external-link">&#xf08e; fa-external-link</option>
                            <option value="fa-external-link-square">&#xf14c; fa-external-link-square</option>
                            <option value="fa-eye">&#xf06e; fa-eye</option>
                            <option value="fa-eye-slash">&#xf070; fa-eye-slash</option>
                            <option value="fa-eyedropper">&#xf1fb; fa-eyedropper</option>
                            <option value="fa-facebook">&#xf09a; fa-facebook</option>
                            <option value="fa-facebook-f">&#xf09a; fa-facebook-f</option>
                            <option value="fa-facebook-official">&#xf230; fa-facebook-official</option>
                            <option value="fa-facebook-square">&#xf082; fa-facebook-square</option>
                            <option value="fa-fast-backward">&#xf049; fa-fast-backward</option>
                            <option value="fa-fast-forward">&#xf050; fa-fast-forward</option>
                            <option value="fa-fax">&#xf1ac; fa-fax</option>
                            <option value="fa-feed">&#xf09e; fa-feed</option>
                            <option value="fa-female">&#xf182; fa-female</option>
                            <option value="fa-fighter-jet">&#xf0fb; fa-fighter-jet</option>
                            <option value="fa-file">&#xf15b; fa-file</option>
                            <option value="fa-file-archive-o">&#xf1c6; fa-file-archive-o</option>
                            <option value="fa-file-audio-o">&#xf1c7; fa-file-audio-o</option>
                            <option value="fa-file-code-o">&#xf1c9; fa-file-code-o</option>
                            <option value="fa-file-excel-o">&#xf1c3; fa-file-excel-o</option>
                            <option value="fa-file-image-o">&#xf1c5; fa-file-image-o</option>
                            <option value="fa-file-movie-o">&#xf1c8; fa-file-movie-o</option>
                            <option value="fa-file-o">&#xf016; fa-file-o</option>
                            <option value="fa-file-pdf-o">&#xf1c1; fa-file-pdf-o</option>
                            <option value="fa-file-photo-o">&#xf1c5; fa-file-photo-o</option>
                            <option value="fa-file-picture-o">&#xf1c5; fa-file-picture-o</option>
                            <option value="fa-file-powerpoint-o">&#xf1c4; fa-file-powerpoint-o</option>
                            <option value="fa-file-sound-o">&#xf1c7; fa-file-sound-o</option>
                            <option value="fa-file-text">&#xf15c; fa-file-text</option>
                            <option value="fa-file-text-o">&#xf0f6; fa-file-text-o</option>
                            <option value="fa-file-video-o">&#xf1c8; fa-file-video-o</option>
                            <option value="fa-file-word-o">&#xf1c2; fa-file-word-o</option>
                            <option value="fa-file-zip-o">&#xf1c6; fa-file-zip-o</option>
                            <option value="fa-files-o">&#xf0c5; fa-files-o</option>
                            <option value="fa-film">&#xf008; fa-film</option>
                            <option value="fa-filter">&#xf0b0; fa-filter</option>
                            <option value="fa-fire">&#xf06d; fa-fire</option>
                            <option value="fa-fire-extinguisher">&#xf134; fa-fire-extinguisher</option>
                            <option value="fa-firefox">&#xf269; fa-firefox</option>
                            <option value="fa-flag">&#xf024; fa-flag</option>
                            <option value="fa-flag-checkered">&#xf11e; fa-flag-checkered</option>
                            <option value="fa-flag-o">&#xf11d; fa-flag-o</option>
                            <option value="fa-flash">&#xf0e7; fa-flash</option>
                            <option value="fa-flask">&#xf0c3; fa-flask</option>
                            <option value="fa-flickr">&#xf16e; fa-flickr</option>
                            <option value="fa-floppy-o">&#xf0c7; fa-floppy-o</option>
                            <option value="fa-folder">&#xf07b; fa-folder</option>
                            <option value="fa-folder-o">&#xf114; fa-folder-o</option>
                            <option value="fa-folder-open">&#xf07c; fa-folder-open</option>
                            <option value="fa-folder-open-o">&#xf115; fa-folder-open-o</option>
                            <option value="fa-font">&#xf031; fa-font</option>
                            <option value="fa-fonticons">&#xf280; fa-fonticons</option>
                            <option value="fa-forumbee">&#xf211; fa-forumbee</option>
                            <option value="fa-forward">&#xf04e; fa-forward</option>
                            <option value="fa-foursquare">&#xf180; fa-foursquare</option>
                            <option value="fa-frown-o">&#xf119; fa-frown-o</option>
                            <option value="fa-futbol-o">&#xf1e3; fa-futbol-o</option>
                            <option value="fa-gamepad">&#xf11b; fa-gamepad</option>
                            <option value="fa-gavel">&#xf0e3; fa-gavel</option>
                            <option value="fa-gbp">&#xf154; fa-gbp</option>
                            <option value="fa-ge">&#xf1d1; fa-ge</option>
                            <option value="fa-gear">&#xf013; fa-gear</option>
                            <option value="fa-gears">&#xf085; fa-gears</option>
                            <option value="fa-genderless">&#xf22d; fa-genderless</option>
                            <option value="fa-get-pocket">&#xf265; fa-get-pocket</option>
                            <option value="fa-gg">&#xf260; fa-gg</option>
                            <option value="fa-gg-circle">&#xf261; fa-gg-circle</option>
                            <option value="fa-gift">&#xf06b; fa-gift</option>
                            <option value="fa-git">&#xf1d3; fa-git</option>
                            <option value="fa-git-square">&#xf1d2; fa-git-square</option>
                            <option value="fa-github">&#xf09b; fa-github</option>
                            <option value="fa-github-alt">&#xf113; fa-github-alt</option>
                            <option value="fa-github-square">&#xf092; fa-github-square</option>
                            <option value="fa-gittip">&#xf184; fa-gittip</option>
                            <option value="fa-glass">&#xf000; fa-glass</option>
                            <option value="fa-globe">&#xf0ac; fa-globe</option>
                            <option value="fa-google">&#xf1a0; fa-google</option>
                            <option value="fa-google-plus">&#xf0d5; fa-google-plus</option>
                            <option value="fa-google-plus-square">&#xf0d4; fa-google-plus-square</option>
                            <option value="fa-google-wallet">&#xf1ee; fa-google-wallet</option>
                            <option value="fa-graduation-cap">&#xf19d; fa-graduation-cap</option>
                            <option value="fa-gratipay">&#xf184; fa-gratipay</option>
                            <option value="fa-group">&#xf0c0; fa-group</option>
                            <option value="fa-h-square">&#xf0fd; fa-h-square</option>
                            <option value="fa-hacker-news">&#xf1d4; fa-hacker-news</option>
                            <option value="fa-hand-grab-o">&#xf255; fa-hand-grab-o</option>
                            <option value="fa-hand-lizard-o">&#xf258; fa-hand-lizard-o</option>
                            <option value="fa-hand-o-down">&#xf0a7; fa-hand-o-down</option>
                            <option value="fa-hand-o-left">&#xf0a5; fa-hand-o-left</option>
                            <option value="fa-hand-o-right">&#xf0a4; fa-hand-o-right</option>
                            <option value="fa-hand-o-up">&#xf0a6; fa-hand-o-up</option>
                            <option value="fa-hand-paper-o">&#xf256; fa-hand-paper-o</option>
                            <option value="fa-hand-peace-o">&#xf25b; fa-hand-peace-o</option>
                            <option value="fa-hand-pointer-o">&#xf25a; fa-hand-pointer-o</option>
                            <option value="fa-hand-rock-o">&#xf255; fa-hand-rock-o</option>
                            <option value="fa-hand-scissors-o">&#xf257; fa-hand-scissors-o</option>
                            <option value="fa-hand-spock-o">&#xf259; fa-hand-spock-o</option>
                            <option value="fa-hand-stop-o">&#xf256; fa-hand-stop-o</option>
                            <option value="fa-hdd-o">&#xf0a0; fa-hdd-o</option>
                            <option value="fa-header">&#xf1dc; fa-header</option>
                            <option value="fa-headphones">&#xf025; fa-headphones</option>
                            <option value="fa-heart">&#xf004; fa-heart</option>
                            <option value="fa-heart-o">&#xf08a; fa-heart-o</option>
                            <option value="fa-heartbeat">&#xf21e; fa-heartbeat</option>
                            <option value="fa-history">&#xf1da; fa-history</option>
                            <option value="fa-home">&#xf015; fa-home</option>
                            <option value="fa-hospital-o">&#xf0f8; fa-hospital-o</option>
                            <option value="fa-hotel">&#xf236; fa-hotel</option>
                            <option value="fa-hourglass">&#xf254; fa-hourglass</option>
                            <option value="fa-hourglass-1">&#xf251; fa-hourglass-1</option>
                            <option value="fa-hourglass-2">&#xf252; fa-hourglass-2</option>
                            <option value="fa-hourglass-3">&#xf253; fa-hourglass-3</option>
                            <option value="fa-hourglass-end">&#xf253; fa-hourglass-end</option>
                            <option value="fa-hourglass-half">&#xf252; fa-hourglass-half</option>
                            <option value="fa-hourglass-o">&#xf250; fa-hourglass-o</option>
                            <option value="fa-hourglass-start">&#xf251; fa-hourglass-start</option>
                            <option value="fa-houzz">&#xf27c; fa-houzz</option>
                            <option value="fa-html5">&#xf13b; fa-html5</option>
                            <option value="fa-i-cursor">&#xf246; fa-i-cursor</option>
                            <option value="fa-ils">&#xf20b; fa-ils</option>
                            <option value="fa-image">&#xf03e; fa-image</option>
                            <option value="fa-inbox">&#xf01c; fa-inbox</option>
                            <option value="fa-indent">&#xf03c; fa-indent</option>
                            <option value="fa-industry">&#xf275; fa-industry</option>
                            <option value="fa-info">&#xf129; fa-info</option>
                            <option value="fa-info-circle">&#xf05a; fa-info-circle</option>
                            <option value="fa-inr">&#xf156; fa-inr</option>
                            <option value="fa-instagram">&#xf16d; fa-instagram</option>
                            <option value="fa-institution">&#xf19c; fa-institution</option>
                            <option value="fa-internet-explorer">&#xf26b; fa-internet-explorer</option>
                            <option value="fa-intersex">&#xf224; fa-intersex</option>
                            <option value="fa-ioxhost">&#xf208; fa-ioxhost</option>
                            <option value="fa-italic">&#xf033; fa-italic</option>
                            <option value="fa-joomla">&#xf1aa; fa-joomla</option>
                            <option value="fa-jpy">&#xf157; fa-jpy</option>
                            <option value="fa-jsfiddle">&#xf1cc; fa-jsfiddle</option>
                            <option value="fa-key">&#xf084; fa-key</option>
                            <option value="fa-keyboard-o">&#xf11c; fa-keyboard-o</option>
                            <option value="fa-krw">&#xf159; fa-krw</option>
                            <option value="fa-language">&#xf1ab; fa-language</option>
                            <option value="fa-laptop">&#xf109; fa-laptop</option>
                            <option value="fa-lastfm">&#xf202; fa-lastfm</option>
                            <option value="fa-lastfm-square">&#xf203; fa-lastfm-square</option>
                            <option value="fa-leaf">&#xf06c; fa-leaf</option>
                            <option value="fa-leanpub">&#xf212; fa-leanpub</option>
                            <option value="fa-legal">&#xf0e3; fa-legal</option>
                            <option value="fa-lemon-o">&#xf094; fa-lemon-o</option>
                            <option value="fa-level-down">&#xf149; fa-level-down</option>
                            <option value="fa-level-up">&#xf148; fa-level-up</option>
                            <option value="fa-life-bouy">&#xf1cd; fa-life-bouy</option>
                            <option value="fa-life-buoy">&#xf1cd; fa-life-buoy</option>
                            <option value="fa-life-ring">&#xf1cd; fa-life-ring</option>
                            <option value="fa-life-saver">&#xf1cd; fa-life-saver</option>
                            <option value="fa-lightbulb-o">&#xf0eb; fa-lightbulb-o</option>
                            <option value="fa-line-chart">&#xf201; fa-line-chart</option>
                            <option value="fa-link">&#xf0c1; fa-link</option>
                            <option value="fa-linkedin">&#xf0e1; fa-linkedin</option>
                            <option value="fa-linkedin-square">&#xf08c; fa-linkedin-square</option>
                            <option value="fa-linux">&#xf17c; fa-linux</option>
                            <option value="fa-list">&#xf03a; fa-list</option>
                            <option value="fa-list-alt">&#xf022; fa-list-alt</option>
                            <option value="fa-list-ol">&#xf0cb; fa-list-ol</option>
                            <option value="fa-list-ul">&#xf0ca; fa-list-ul</option>
                            <option value="fa-location-arrow">&#xf124; fa-location-arrow</option>
                            <option value="fa-lock">&#xf023; fa-lock</option>
                            <option value="fa-long-arrow-down">&#xf175; fa-long-arrow-down</option>
                            <option value="fa-long-arrow-left">&#xf177; fa-long-arrow-left</option>
                            <option value="fa-long-arrow-right">&#xf178; fa-long-arrow-right</option>
                            <option value="fa-long-arrow-up">&#xf176; fa-long-arrow-up</option>
                            <option value="fa-magic">&#xf0d0; fa-magic</option>
                            <option value="fa-magnet">&#xf076; fa-magnet</option>

                            <option value="fa-mars-stroke-v">&#xf22a; fa-mars-stroke-v</option>
                            <option value="fa-maxcdn">&#xf136; fa-maxcdn</option>
                            <option value="fa-meanpath">&#xf20c; fa-meanpath</option>
                            <option value="fa-medium">&#xf23a; fa-medium</option>
                            <option value="fa-medkit">&#xf0fa; fa-medkit</option>
                            <option value="fa-meh-o">&#xf11a; fa-meh-o</option>
                            <option value="fa-mercury">&#xf223; fa-mercury</option>
                            <option value="fa-microphone">&#xf130; fa-microphone</option>
                            <option value="fa-mobile">&#xf10b; fa-mobile</option>
                            <option value="fa-motorcycle">&#xf21c; fa-motorcycle</option>
                            <option value="fa-mouse-pointer">&#xf245; fa-mouse-pointer</option>
                            <option value="fa-music">&#xf001; fa-music</option>
                            <option value="fa-navicon">&#xf0c9; fa-navicon</option>
                            <option value="fa-neuter">&#xf22c; fa-neuter</option>
                            <option value="fa-newspaper-o">&#xf1ea; fa-newspaper-o</option>
                            <option value="fa-opencart">&#xf23d; fa-opencart</option>
                            <option value="fa-openid">&#xf19b; fa-openid</option>
                            <option value="fa-opera">&#xf26a; fa-opera</option>
                            <option value="fa-outdent">&#xf03b; fa-outdent</option>
                            <option value="fa-pagelines">&#xf18c; fa-pagelines</option>
                            <option value="fa-paper-plane-o">&#xf1d9; fa-paper-plane-o</option>
                            <option value="fa-paperclip">&#xf0c6; fa-paperclip</option>
                            <option value="fa-paragraph">&#xf1dd; fa-paragraph</option>
                            <option value="fa-paste">&#xf0ea; fa-paste</option>
                            <option value="fa-pause">&#xf04c; fa-pause</option>
                            <option value="fa-paw">&#xf1b0; fa-paw</option>
                            <option value="fa-paypal">&#xf1ed; fa-paypal</option>
                            <option value="fa-pencil">&#xf040; fa-pencil</option>
                            <option value="fa-pencil-square-o">&#xf044; fa-pencil-square-o</option>
                            <option value="fa-phone">&#xf095; fa-phone</option>
                            <option value="fa-photo">&#xf03e; fa-photo</option>
                            <option value="fa-picture-o">&#xf03e; fa-picture-o</option>
                            <option value="fa-pie-chart">&#xf200; fa-pie-chart</option>
                            <option value="fa-pied-piper">&#xf1a7; fa-pied-piper</option>
                            <option value="fa-pied-piper-alt">&#xf1a8; fa-pied-piper-alt</option>
                            <option value="fa-pinterest">&#xf0d2; fa-pinterest</option>
                            <option value="fa-pinterest-p">&#xf231; fa-pinterest-p</option>
                            <option value="fa-pinterest-square">&#xf0d3; fa-pinterest-square</option>
                            <option value="fa-plane">&#xf072; fa-plane</option>
                            <option value="fa-play">&#xf04b; fa-play</option>
                            <option value="fa-play-circle">&#xf144; fa-play-circle</option>
                            <option value="fa-play-circle-o">&#xf01d; fa-play-circle-o</option>
                            <option value="fa-plug">&#xf1e6; fa-plug</option>
                            <option value="fa-plus">&#xf067; fa-plus</option>
                            <option value="fa-plus-circle">&#xf055; fa-plus-circle</option>
                            <option value="fa-plus-square">&#xf0fe; fa-plus-square</option>
                            <option value="fa-plus-square-o">&#xf196; fa-plus-square-o</option>
                            <option value="fa-power-off">&#xf011; fa-power-off</option>
                            <option value="fa-print">&#xf02f; fa-print</option>
                            <option value="fa-puzzle-piece">&#xf12e; fa-puzzle-piece</option>
                            <option value="fa-qq">&#xf1d6; fa-qq</option>
                            <option value="fa-qrcode">&#xf029; fa-qrcode</option>
                            <option value="fa-question">&#xf128; fa-question</option>
                            <option value="fa-question-circle">&#xf059; fa-question-circle</option>
                            <option value="fa-quote-left">&#xf10d; fa-quote-left</option>
                            <option value="fa-quote-right">&#xf10e; fa-quote-right</option>
                            <option value="fa-ra">&#xf1d0; fa-ra</option>
                            <option value="fa-random">&#xf074; fa-random</option>
                            <option value="fa-rebel">&#xf1d0; fa-rebel</option>
                            <option value="fa-recycle">&#xf1b8; fa-recycle</option>
                            <option value="fa-reddit">&#xf1a1; fa-reddit</option>
                            <option value="fa-reddit-square">&#xf1a2; fa-reddit-square</option>
                            <option value="fa-refresh">&#xf021; fa-refresh</option>
                            <option value="fa-registered">&#xf25d; fa-registered</option>
                            <option value="fa-remove">&#xf00d; fa-remove</option>
                            <option value="fa-renren">&#xf18b; fa-renren</option>
                            <option value="fa-reorder">&#xf0c9; fa-reorder</option>
                            <option value="fa-repeat">&#xf01e; fa-repeat</option>
                            <option value="fa-reply">&#xf112; fa-reply</option>
                            <option value="fa-reply-all">&#xf122; fa-reply-all</option>
                            <option value="fa-retweet">&#xf079; fa-retweet</option>
                            <option value="fa-rmb">&#xf157; fa-rmb</option>
                            <option value="fa-road">&#xf018; fa-road</option>
                            <option value="fa-rocket">&#xf135; fa-rocket</option>
                            <option value="fa-rotate-left">&#xf0e2; fa-rotate-left</option>
                            <option value="fa-rotate-right">&#xf01e; fa-rotate-right</option>
                            <option value="fa-rouble">&#xf158; fa-rouble</option>
                            <option value="fa-rss">&#xf09e; fa-rss</option>
                            <option value="fa-rss-square">&#xf143; fa-rss-square</option>
                            <option value="fa-rub">&#xf158; fa-rub</option>
                            <option value="fa-ruble">&#xf158; fa-ruble</option>
                            <option value="fa-rupee">&#xf156; fa-rupee</option>
                            <option value="fa-safari">&#xf267; fa-safari</option>
                            <option value="fa-sliders">&#xf1de; fa-sliders</option>
                            <option value="fa-slideshare">&#xf1e7; fa-slideshare</option>
                            <option value="fa-smile-o">&#xf118; fa-smile-o</option>
                            <option value="fa-sort-asc">&#xf0de; fa-sort-asc</option>
                            <option value="fa-sort-desc">&#xf0dd; fa-sort-desc</option>
                            <option value="fa-sort-down">&#xf0dd; fa-sort-down</option>
                            <option value="fa-spinner">&#xf110; fa-spinner</option>
                            <option value="fa-spoon">&#xf1b1; fa-spoon</option>
                            <option value="fa-spotify">&#xf1bc; fa-spotify</option>
                            <option value="fa-square">&#xf0c8; fa-square</option>
                            <option value="fa-square-o">&#xf096; fa-square-o</option>
                            <option value="fa-star">&#xf005; fa-star</option>
                            <option value="fa-star-half">&#xf089; fa-star-half</option>
                            <option value="fa-stop">&#xf04d; fa-stop</option>
                            <option value="fa-subscript">&#xf12c; fa-subscript</option>
                            <option value="fa-tablet">&#xf10a; fa-tablet</option>
                            <option value="fa-tachometer">&#xf0e4; fa-tachometer</option>
                            <option value="fa-tag">&#xf02b; fa-tag</option>
                            <option value="fa-tags">&#xf02c; fa-tags</option>
                        </select>
                    </div>
                    <br/>

                    <input name="id_md_icono" class="nomostrar" id="id_md_icono" value=""/>
                    <input name="icono" class="nomostrar" id="fa_icono" value=""/>
                    <input name="campo" class="nomostrar" id="fa_icono_campo" value=""/>

                    <div class="editable-buttons">
                        <br/>
                        <button type="button" class="btn blue editable-submit editicono-submit">
                            <i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn default editable-cancel" onclick="$('.popover').popover('hide');">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popover hidden" id="popovertitulomodulo" >
    <div class="arrow" style="left: 50%;"></div>
    <h3 class="popover-title">Ingrese título</h3>
    <div class="popover-content">
        <div>
            <div class="form-group">
                <div>
                    <div class="editable-input">
                        <br/>
                        <label>Título: </label>
                        <input class=" form-control input-large" value="" id="etiqueta_titulomodulo" name="etiqueta_titulomodulo">
                    </div>
                    <input name="etiqueta_idmodulo" class="nomostrar" id="etiqueta_idmodulo" value="" style="margin-bottom: 10px" />
                    <br>
                    <input name="etiqueta_item_menu" id="etiqueta_item_menu" type="checkbox" value=""/> Incluir en menú
                    <br>
                    <div class="editable-buttons">
                        <br/>
                        <button type="button" class="btn blue editable-submit edit-titulomodulo-submit">
                            <i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn default editable-cancel" onclick="$('.popover').popover('hide');">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popover hidden" id="popoverlinkareferencia" >
    <div class="arrow" style="left: 50%;"></div>
    <h3 class="popover-title">Edición de botón</h3>
    <div class="popover-content">
        <div>
            <div class="form-group">
                <div>
                    <div class="editable-input">
                        <br/>
                        <label>Texto botón: </label>
                        <input class=" form-control input-large" value="" id="texto_link_referencia" name="texto_link_referencia">
                    </div>
                    <br/>
                    <div class="editable-input">
                        <br/>
                        <label>Tipo de botón: </label><br>
                        <input type="text" class="hidden" id="value_url_externo">

                        <input type="radio" name="es_url_externo" value="0" id="es_ancla" style="width: 15px!important;" checked="">Sección
                        <input type="radio" name="es_url_externo" value="0" id="es_url_externo" style="width: 15px!important;">Url externo
                        <input type="radio" name="es_url_externo" value="0" id="es_download" style="width: 15px!important;">Archivo<br/><br/>
                        <label class="url-interno">Título sección: <i style="font-size: 11px; font-style: italic;">*Home</i></label>
                        <label class="url-externo nomostrar">Url: <i style="font-size: 11px; font-style: italic;">*http://mipagina.pe/</i></label>
                        <div class="url-download nomostrar">
                            <label class="">Archivo cargado:</label>
                            <a class="edit-upload-file" data-toggle="modal" data-target="#editFile"  data-pk="" data-url=""><i class="fa fa-upload"></i></a>
                        </div>
                        <input class=" form-control input-large" value="" id="url_link_referencia" name="url_link_referencia">
                    </div>
                    <input name="id_link_referencia" class="nomostrar" id="id_link_referencia" value=""/>
                    <input name="name_link_referencia" class="nomostrar" id="name_link_referencia" value=""/>

                    <div class="editable-buttons">
                        <br/>
                        <button type="button" class="btn blue editable-submit editlink-referencia-submit">
                            <i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn default editable-cancel" onclick="$('.popover').popover('hide');">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popover hidden" id="popoverlinkvideo-play" >
    <div class="arrow" style="left: 50%;"></div>
    <h3 class="popover-title">Edición de video</h3>
    <div class="popover-content">
        <div>
            <div class="form-group">
                <div>
                    <div class="editable-input">
                        <label>Url del video: </label>
                        <p style="font-style: italic; font-size: 10px"> *https://www.youtube.com/...</p>
                        <br/>
                        <input class=" form-control input-large" value="" id="video_linkvideo-play" name="video_linkvideo-play">
                    </div>
                    <br/>
                    <input name="id_linkvideo-play" class="nomostrar" id="id_linkvideo-play" value=""/>

                    <div class="editable-buttons">
                        <br/>
                        <button type="button" class="btn blue editable-submit edit-linkvideo-play-submit">
                            <i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn default editable-cancel" onclick="$('.popover').popover('hide');">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popover hidden" id="popoverIDvideo-play" >
    <div class="arrow" style="left: 50%;"></div>
    <h3 class="popover-title">Edición de video</h3>
    <div class="popover-content">
        <div>
            <div class="form-group">
                <div>
                    <div class="editable-input">
                        <span style="font-size: 12px">IMPORTANTE: Sólo copiar el ID del video según indica el rectángulo.</span>
                        <span style="font-style: italic; font-size: 12px"> *https://www.youtube.com/watch?v=</span>
                        <span style="border: 1px solid red; font-weight: bold; font-size: 12px">d4bpg65VXD0</span>
                        <br/>
                        <br/>
                        <label>Id del video: </label>
                        <input class=" form-control input-large" value="" id="video_idvideo-play" name="video_idvideo-play">
                    </div>
                    <br/>
                    <input name="id_idvideo-play" class="nomostrar" id="id_idvideo-play" value=""/>

                    <div class="editable-buttons">
                        <br/>
                        <button type="button" class="btn blue editable-submit edit-idvideo-play-submit">
                            <i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn default editable-cancel" onclick="$('.popover').popover('hide');">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editarimagen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" style="text-align: center; font-family: 'MontserratBold', sans-serif">EDICIÓN DE IMAGEN </h4>
            </div>
            <div class="modal-body">
                <div class="container contenedor-edit-img" style="width: 100%;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12 nota-editar-img">
                                <i style="font-family: 'Lato', sans-serif ">*La imagen guardada será recortada al tamaño del cuadrante interior.</i>
                            </div>

                            <div class="croppie-box" id="croppie-box">

                            </div>
                            <input class="nomostrar" value="" id="id-modulo-estructura"/>
                            <input class="nomostrar" value="" id="id-pry-editimg"/>

                            <span class="btn btn-primary btn-file">
                                <span class="fa fa-folder-open-o"></span> <input type="file" id="file" class="file" name="file">
                            </span>
                             <span class="btn blue editable-submit btn-save-cropimg">
                                <i class="fa fa-check"></i>
                            </span>
                            <div class="col-md-12" align="center">
                                <div class="alert alert-success alert-dismissable nomostrar label-cargando col-md-6 col-md-offset-3" style="background: none">
                                    <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> La imagen se está guardando...</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="editarlogo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" style="text-align: center; font-family: 'MontserratBold', sans-serif">EDICIÓN DE IMAGEN </h4>
            </div>
            <div class="modal-body">
                <div class="container contenedor-edit-img" style="width: 100%">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12 nota-editar-img">
                                <i style="font-family: 'Lato', sans-serif ">*La imagen guardada será recortada al tamaño del cuadrante interior.</i>
                            </div>
                            <div class="croppie-box-logo" id="croppie-box-logo">
                            </div>
                            <input class="nomostrar" value="" id="id-modulo">
                            <input class="nomostrar" value="" id="id-pry-editlogo"/>

                            <span class="btn btn-primary btn-openfile-logo">
                                <span class="fa fa-folder-open-o"></span> <input type="file" id="openfile-logo" class="file" name="file">
                            </span>
                            <input class="form-control" value="" id="link-logo" placeholder="Link" style="width: 80%" />
                             <span class="btn blue editable-submit btn-save-croplogo">
                                <i class="fa fa-check"></i>
                            </span>
                            <div class="col-md-12" align="center">
                                <div class="alert alert-success alert-dismissable nomostrar label-cargando col-md-6 col-md-offset-3" style="background: none">
                                    <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> La imagen se está guardando...</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="addGaleriaTab" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Nuevo Tab</h4>
            </div>
            <div class="modal-body" align="center">
                <input class="nomostrar" value="" id="newGaleriaTab_id_modulo" name="newGaleriaTab_id_modulo">
                <div class="editable-input">
                    <br/>
                    <label>Nombre Tab: </label>
                    <input class=" form-control input-large" value="" id="newGaleriaTab" name="newGaleriaTab">
                </div>
                <div class="editable-buttons" style="margin-left: -10px;">
                    <br/>
                    <button type="button" class="btn blue editable-submit newGaleriaTab-submit">
                        <i class="fa fa-check"> Guardar</i>
                    </button>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="editGaleriaTab" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edición de Tabs</h4>
            </div>
            <div class="modal-body" align="center">
                <div class="boxs-tabs">
                    <div class="listadotabs" id="listadotabs">

                    </div>
                    <div class="editable-buttons" style="margin-left: -10px;">
                        <br/>
                        <button type="button" class="btn blue editable-submit editGaleriaTab-submit">
                            <i class="fa fa-check"> Guardar</i>
                        </button>
                        <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                            <i class="fa fa-times"> Cancelar</i>
                        </button>
                    </div>
                </div>
                <div class="desactivargaleriatab nomostrar">
                    <h4>Este tab tiene contenidos ¿Desea Desactivarlo de todas formas?</h4>
                    <br><br>
                    <button type="button" class="sieliminar btn btn-primary">Sí, Eliminar</button>
                    <button type="button" class="noeliminar btn">No, Cancelar</button>
                </div>
            </div>

        </div>
    </div>
</div>
<div id="editSlider" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        {!! Form::open(array('url' => Request::segment(1).'/saveslider', 'files' => true)) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edición de Slider</h4>
            </div>
            <input class="nomostrar" value="" id="id_modulo_slider" name="id_modulo_slider">
            <input class="nomostrar" value="" id="id_pry_slider" name="id_pry_slider">
            <input class="nomostrar" id="imgslider_eliminado" value="0">
            <div class="modal-body" align="center">
                <div class="items-slider" id="itemslider">

                </div>
                <div class="editable-buttons">
                    <br/>
                    <p style="font-style: italic;font-size: 10pt;" id="slider-tam-recomendado"></p>
                    <br/>
                    <button type="button" class="btn addSliderimg"><span class="fa fa-plus"> Nueva imagen</span></button>

                    <button type="submit" class="btn blue editable-submit editSlider-submit">
                        <i class="fa fa-check"> Guardar</i>
                    </button>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
</div>
<div id="replaceModulo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        {!! Form::open(array('url' => Request::segment(1).'/reemplazarmodulo', 'files' => true)) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="titulo_replaceModulo">Reemplazar modulo</h4>
            </div>
            <input class="nomostrar" value="" id="id_modulo_actual" name="id_modulo_actual">
            <input class="nomostrar" value="" id="id_pry_new_modulo" name="id_pry_new_modulo">
            <input class="nomostrar" value="" id="id_modulo_nuevo" name="id_modulo_nuevo">
            <input class="nomostrar" value="" id="tipo_modulo_nuevo" name="tipo_modulo_nuevo">
            <div class="modal-body" align="center">
                <div id="listmodulosunicos">
                    <div class="list-modulos col-md-12" id="listmodulos">

                    </div>
                    <div class="editable-buttons">
                        <button type="button" class="btn blue editable-submit replaceModulo-button">
                            <i class="fa fa-check"> Agregar</i>
                        </button>
                        <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                            <i class="fa fa-times"> Cancelar</i>
                        </button>
                    </div>
                </div>
                <div id="confirmacion_replaceModulounico" class="nomostrar">
                    <h4>
                        ¿Está seguro que desea reemplazar el modulo actual?. Todo su contenido será eliminado y reemplazado por el nuevo modulo seleccionado.
                    </h4>
                    <div>
                        <br/>
                        <button type="submit" class="btn btn-primary">Sí, reemplazar</button>
                        <button type="button" class="btn default cancel-replace-modulo">No, Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div id="addModulosContenido" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        {!! Form::open(array('url' => Request::segment(1).'/agregarmodulos', 'files' => true)) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Agregar bloques de contenido</h4>
            </div>
            <input class="nomostrar" value="" id="id_pry_mdcontenidos" name="id_pry_mdcontenidos">
            <input class="nomostrar" value="" id="id_menu_url_mdcontenidos" name="id_menu_url_mdcontenidos">
            <div class="modal-body" align="center">
                <div class="col-md-12" id="listmoduloscontenido">

                </div>
                <div class="editable-buttons">
                    <button type="submit" class="btn blue editable-submit addModulo-submit">
                        <i class="fa fa-check"> Agregar</i>
                    </button>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div id="confirm_delete_modulo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        {!! Form::open(array('url' => Request::segment(1).'/eliminarmodulocontenido', 'files' => true)) !!}
        <div class="modal-content">
            <input class="nomostrar" value="" id="id_modulo_to_delete" name="id_modulo_to_delete">
            <input class="nomostrar" value="" id="id_pry_modulo_to_delete" name="id_pry_modulo_to_delete">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Eliminación de bloque de contenido</h4>
            </div>
            <div class="modal-body" align="center">
                <h4>¿Confirma que desea eliminar el bloque de contenido y todos sus elementos asociados?</h4>

            </div>
            <div class="modal-footer">
                <button type="submit"  class="btn btn-primary">Sí, Eliminar</button>
                <button type="button" data-dismiss="modal" class="btn">No, Cancelar</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div id="customCss" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        {!! Form::open(array('url' => Request::segment(1).'/savecustomcss', 'files' => true)) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" style="text-align: center; font-family: 'MontserratBold', sans-serif">Custom CSS</h4>
            </div>
            <div class="modal-body">
                <div class="container" style="width: 100%;">
                    <div class="col-sm-12" style="height: 80vh">
                        <textarea style="width: 100%; height: 100%" name="custom_css" id="custom_css_text"></textarea>
                        <input name="id_pry_custom_css" class="nomostrar" id="id_pry_custom_css"/>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn blue editable-submit">
                    <i class="fa fa-check"> Guardar</i>
                </button>
                <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                    <i class="fa fa-times"> Cancelar</i>
                </button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div id="menuUrls" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        {!! Form::open(array('url' => Request::segment(1).'/savemenuurls', 'files' => true)) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sub página</h4>
            </div>

            <input class="nomostrar" value="{{$proyecto->id}}" id="id_pry_menu_url" name="id_pry_menu_url">
            <input class="nomostrar" id="idioma_menu_url" name="idioma" value="{{$idioma}}">
            <div class="boxs-subpagina">
                <div class="modal-body" align="center">
                    <div class="items-menu-url" id="items_menu_url">
                        <?php $urls = \App\Console\Commands\Funciones::getMenuurls($proyecto->id, $idioma)?>
                        @foreach($urls as $url)
                            <div class="form-inline">
                                <input class="nomostrar" value="{{$url->id}}" name="id_menu_url[]">
                                <input class="form-control input-url" value="{{$url->titulo}}" name="titulo_menu_url[]">
                                <input class="form-control input-url" value="{{$url->url}}" name="url_menu_url[]">
                                <a href="javascript:;" class="eliminarsubpagina" data-id="{{$url->id}}" data-pry="{{$proyecto->id}}" data-cliente="{{$proyecto->id_cliente}}"><i class="fa fa-times" aria-hidden="true"></i></a></a>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="editable-buttons">
                        <button type="button" class="btn nueva-url-menu"><span class="fa fa-plus"> Nueva sub página</span></button>

                        <button type="submit" class="btn blue editable-submit">
                            <i class="fa fa-check"> Guardar</i>
                        </button>
                        <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                            <i class="fa fa-times"> Cancelar</i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="deseaeliminarsubpagina nomostrar ">
                <div class="modal-body" align="center">
                    <h4>Esta sub pagina tiene contenidos ¿Desea Desactivarlo de todas formas?</h4>
                    <br><br>
                    <button type="button" class="sieliminarsubpagina btn btn-primary">Sí, Eliminar</button>
                    <button type="button" class="noeliminarsubpagina btn">No, Cancelar</button>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
</div>
<div id="editGooglemap" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        {!! Form::open(array('url' => Request::segment(1).'/savegooglemap', 'files' => true)) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" style="text-align: center; font-family: 'MontserratBold', sans-serif">Google maps</h4>
            </div>
            <div class="container" style="width: 100%;">
                <div class="modal-body">
                    <div class="row">

                        <input name="id_google_map" class="nomostrar" id="id_google_map"/>
                        <div class="col-sm-12">
                            <p style="font-size: 13px">* Busque una dirección o arrastre el marcador (<i class="fa fa-map-marker" style="color: red; font-style: normal;"></i>)
                                para obtener las coordenadas.
                            </p>
                            <br/>
                            <div class="input-group">
                                <input id="direccion-maps" type="text" name="direccion-maps" style="width: 100%; height: 33px; border: 1px solid lightgrey;"/>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" onclick="codeAddress()"><i class="fa fa-search"></i></a>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <br/>
                            <label style="font-weight: bold; font-size: 15px">Latitud:</label>
                            <input type="text" id="latitud-maps" name="latitud-maps" style="width: 100%; height: 33px; border: 1px solid lightgrey;" required/>
                        </div>
                        <div class="col-sm-6">
                            <br/>
                            <label style="font-weight: bold;font-size: 15px">Longitud:</label>
                            <input type="text" id="longitud-maps" name="longitud-maps" style="width: 100%; height: 33px; border: 1px solid lightgrey;" required/>
                        </div>
                        <div class="col-sm-12">
                            <br/>
                            <div id="mapCanvas"></div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn blue editable-submit">
                        <i class="fa fa-check"> Guardar</i>
                    </button>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
</div>
<div id="editSliderTexto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        {!! Form::open(array('url' => Request::segment(1).'/saveslidertextos', 'files' => true)) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edición de Slider</h4>
            </div>
            <input class="nomostrar" value="" id="id_modulo_slider_texto" name="id_modulo_slider_texto">
            <input class="nomostrar" value="" id="id_pry_slider_texto" name="id_pry_slider_texto">
            <input class="nomostrar" value="" id="idioma_slider_texto" name="idioma">
            <input class="nomostrar" id="textoslider_eliminado" value="0">
            <div class="modal-body" align="center">
                <div class="items-slider-texto" id="itemslidertexto">

                </div>
                <div class="editable-buttons">
                    <br/>
                    <br/>
                    <button type="button" class="btn addSlidertexto"><span class="fa fa-plus"> Nuevo texto</span></button>

                    <button type="submit" class="btn blue editable-submit editSliderTexto-submit">
                        <i class="fa fa-check"> Guardar</i>
                    </button>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
</div>
<div id="cabeceraInternas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        {!! Form::open(array('url' => Request::segment(1).'/cabecerainternas', 'files' => true)) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="titulo_replaceModulo">Reemplazar modulo</h4>
            </div>
            <input class="nomostrar" value="" id="id_pry_cabecerainterna" name="id_pry_cabecerainterna">
            <input class="nomostrar" value="" id="id_new_cabecerainterna" name="id_new_cabecerainterna">
            <div class="modal-body" align="center">
                <div id="listcabecerasinternas">
                    <div class="list-cabeceras-internas col-md-12" id="list-cabeceras-internas">

                    </div>
                    <div class="editable-buttons">
                        <button type="button" class="btn blue editable-submit cabecera-interna-button">
                            <i class="fa fa-check"> Agregar</i>
                        </button>
                        <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                            <i class="fa fa-times"> Cancelar</i>
                        </button>
                    </div>
                </div>
                <div id="confirmacion_cabecera_interna" class="nomostrar">
                    <h4>
                        Se agregará una nueva cabecera para las secciones internas; si ya existe una, se reemplazará todo su contenido. ¿Desea continuar?
                    </h4>
                    <div>
                        <br/>
                        <button type="submit" class="btn btn-primary">Sí, Continuar</button>
                        <button type="button" class="btn default cancel-cabecera-interna">No, Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div id="editarimagenrayos" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" style="text-align: center; font-family: 'MontserratBold', sans-serif">EDICIÓN DE IMAGEN </h4>
            </div>
            {!! Form::open(array('url' => Request::segment(1).'/saveimgrayos', 'files' => true)) !!}
            <div class="modal-body">
                <div class="container contenedor-edit-img-rayos" style="width: 100%;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <span style="font-weight: bold">Imagen pantalla ordenador.</span>
                                <br>
                                <input type="text" class="form-control nomostrar" name="id_md_img_rayo" id="id_md_img_rayo" value="">
                                <input type="text" class="form-control nomostrar" name="id_rayo_pry" id="id_rayo_pry" value="">
                                <div class="image-rayo">
                                    <img src="" alt=""  style="width: 100%; height: 200px" id="img_rayo_ordenador">
                                    <span class="btn btn-primary btn-file-rayo">
                                        <span class="fa fa-folder-open-o"></span> <input type="file" id="file_rayo" class="file-rayo" name="file_rayo">
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span style="font-weight: bold">Imagen pantalla móvil.</span>
                                <br>
                                <div class="image-rayo">
                                    <img src="" alt=""  style="width: 100%; height: 200px" id="img_rayo_movil">
                                    <span class="btn btn-primary btn-file-rayo">
                                        <span class="fa fa-folder-open-o"></span> <input type="file" id="file_rayo_movil" class="file-rayo" name="file_rayo_movil">
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-12" align="center">
                                <div class="alert alert-success alert-dismissable nomostrar label-cargando col-md-6 col-md-offset-3" style="background: none">
                                    <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> La imagen se está guardando...</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn blue editable-submit">
                    <i class="fa fa-check"> Guardar</i>
                </button>
                <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                    <i class="fa fa-times"> Cancelar</i>
                </button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<div id="editSlider-ImgTexto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        {!! Form::open(array('url' => Request::segment(1).'/savesliderimgtexto', 'files' => true)) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edición de Slider</h4>
            </div>
            <input class="nomostrar" value="" id="id_modulo_sliderimgtexto" name="id_modulo_slider">
            <input class="nomostrar" value="" id="id_pry_sliderimgtexto" name="id_pry_slider">
            <input class="nomostrar" id="slider_imgtexto_eliminado" value="0">
            <input class="nomostrar" id="idioma_slider_imgtexto" name="idioma">
            <div class="modal-body" align="center">
                <div class="items-slider" id="item-sliderimgtexto">

                </div>
                <div class="editable-buttons">
                    <br/>
                    <p style="font-style: italic;font-size: 10pt;" id="slider-tam-recomendado"></p>
                    <br/>
                    <button type="button" class="btn addSliderimgtexto"><span class="fa fa-plus"> Nueva imagen</span></button>

                    <button type="submit" class="btn blue editable-submit editSlider-submit">
                        <i class="fa fa-check"> Guardar</i>
                    </button>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
</div>
<div id="guardando-modal" class="modal fade modal-center" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-center">
        <div class="modal-content">
            <div class="modal-body" align="center" style="height: 75px;">
                <div class="alert alert-success alert-dismissable label-cargando col-md-6 col-md-offset-3" style="background: none; display: block!important;">
                    <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> Guardando modulo...</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="tipografiaPersonalizada" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tipografías</h4>
            </div>
            <div class="modal-body" style="clear: both">
                <div class="col-md-12">
                    <label style="font-weight: bold;">Nueva tipografía</label>
                </div>
                <div class="col-md-12" style="padding: 0;margin-top:15px;">
                    <div class="col-md-12" >
                        <label style="font-weight: bold;font-size:13px">Tipografía para títulos*:</label>
                    </div>
                    <div class="col-md-12" >
                        <input type="text" class="form-control" id="input-tipografia-titulo"/>
                    </div>
                </div>
                <div class="col-md-12" style="padding: 0;margin-top:15px;font-size:13px">
                    <div class="col-md-12" >
                        <label style="font-weight: bold;">Tipografía para parrafos*:</label>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="input-tipografia-parrafo"/>
                    </div>
                </div>
                <div class="col-md-12">
                    <p style="font-style: italic; font-size: 13px;margin-top:5px">*Ejemplo: https://fonts.googleapis.com/css?family=Raleway</p>
                </div>
                <div class="col-md-12" style="margin-top:15px;">
                    <button type="button" class="btn green add-tipografia">
                        <i class="fa fa-plus"> Agregar</i>
                    </button>
                </div>

                <div class="col-md-12" style="margin-top: 30px;margin-bottom:30px">
                    <h4 style="font-weight: bold; margin-bottom:15px">Seleccione Tipografia</h4>
                    <select class="form-control" size="5" id="listado-tipografias">

                    </select>
                    <div class="alert alert-danger alert-dismissable alert-tipografia-personalizada col-md-12 hidden" style="background-color: transparent; text-align: left;border:none;margin-bottom: 0;padding: 5px;">
                        <label>Seleccione una tipografía</label>
                    </div>
                </div>
                <br>
            </div>
            <div class="modal-footer" style="clear: both">

                <div class="editable-buttons" style="margin-left: -10px;">
                    <button type="button" class="btn blue editable-submit set-tipografia">
                        <i class="fa fa-check"> Elegir</i>
                    </button>
                    <button type="button" class="btn blue delete-tipografia" style="background-color: red;color:white">
                        <i class="fa fa-trash-o"> Eliminar</i>
                    </button>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="editarIframe" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        {!! Form::open(array('url' => Request::segment(1).'/editiframe', 'files' => true)) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edición</h4>
            </div>
            <input class="nomostrar" value="" id="id_modulo_iframe" name="id">
            <div class="modal-body" align="center">
                <label>Url:</label>
                <input type="text" class="form-control" id="url_iframe" name="url"  value="">
                <div class="editable-buttons" style="margin-top: 15px">

                    <button type="submit" class="btn blue editable-submit iframe-submit">
                        <i class="fa fa-check"> Guardar</i>
                    </button>
                    <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                        <i class="fa fa-times"> Cancelar</i>
                    </button>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
</div>
<div id="editFile" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Subir archivo </h4>
            </div>
            <div class="modal-body" style="padding: 0">
                <input class="hidden"  id="id_upload_file" name="id" value="">
                <div  class="row">
                    <div class="col-sm-12">
                        <!--div class="col-md-12" style="margin-top:15px">
                            <label style="font-weight: bold;"">Texto botón:</label>
                            <input type="text" id="text_upload_file" value="" class="form-control">
                        </div-->
                        <div class="col-md-12" style="margin-top:15px">
                            <label style="font-weight: bold;">Archivo:</label>
                            <div class="input-group">
                                <span class="input-group-btn file-upload">
                                    <input type="text" id="file_name" class="form-control" readonly style="width: 85%">
                                    <span class="btn btn-primary btn-file-upload fa fa-upload">
                                        {!!trans('messages.file')!!}<input type="file" id="input_fileupload">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12" align="center">
                    <div class="alert alert-success alert-dismissable hidden label-cargando col-md-6 col-md-offset-3" style="background: none">
                        <label style="text-align: center"><i class="fa fa-spin fa-spinner"></i> {!!trans('messages.saving')!!}...</label>
                    </div>
                </div>
                <button type="button" class="btn blue editable-submit edit-upload-file-submit">
                    <i class="fa fa-check"></i>
                </button>
                <button type="button" class="btn default editable-cancel" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
    </div>
</div>