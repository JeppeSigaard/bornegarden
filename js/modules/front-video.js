function youtube_parser(url){
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
    var match = url.match(regExp);
    if (match&&match[7].length==11){
        return match[7];
    }else{
        alert("Url incorrecta");
    }
}

if($('.home .video-wrap').length){
        
    var $ytplayer = $('#ytplayer'),
        $playBtn = $('#video-play'),
        $wrapper = $('.video-wrap');
    
        function onPlayerReady(event) {
 
          // bind events
          var playButton = document.getElementById("video-play");
          playButton.addEventListener("click", function() {
            
            if($wrapper.hasClass('playing')){
                player.pauseVideo();
                $('.video-wrap').removeClass('playing');
            }
            else{
                player.playVideo();
                $('.video-wrap').addClass('playing');
            }
          });
        }

        // Inject YouTube API script
        var tag = document.createElement('script');
        tag.src = "//www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        function onYouTubePlayerAPIReady() {

            console.log('player ready');
            
            // create the global player from the specific iframe (#video)
            player = new YT.Player('ytplayer', {
                videoId: youtube_parser($ytplayer.attr('data-src')),
                modestbranding: 1,
                controls: 1,
                showinfo: 1,
                events: {
                    // call this function when player is ready to use
                    'onReady': onPlayerReady
                }
            });

        }

    }