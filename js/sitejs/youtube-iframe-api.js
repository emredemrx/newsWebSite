
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var weburl =$('.videoHaberContainer').attr("data-website");
     
      var player1;
      var player2;
      var player3;
      
      var video1_id =$('#video1').attr("data-videoid");
      var video2_id =$('#video2').attr("data-videoid");
      var video3_id =$('#video3').attr("data-videoid");
      function onYouTubeIframeAPIReady() {
        
        player1 = new YT.Player('video1', {
          videoId: video1_id,
          playerVars: {
            'playsinline': 1,
            'autoplay': 0,
            'controls': 0,
            'autohide': 1,
            'wmode': 'opaque',
            'origin': weburl 
          },
          events: {
            'onStateChange': onPlayerStateChange
          }
        });
        player2 = new YT.Player('video2', {
          videoId: video2_id,
          playerVars: {
            'playsinline': 1,
            'autoplay': 0,
            'controls': 0,
            'autohide': 1,
            'wmode': 'opaque',
            'origin': weburl 
          },
          events: {
            'onStateChange': onPlayerStateChange
          }
        });
        player3 = new YT.Player('video3', {
          videoId: video3_id,
          playerVars: {
            'playsinline': 1,
            'autoplay': 0,
            'controls': 0,
            'autohide': 1,
            'wmode': 'opaque',
            'origin': weburl
          },
          events: {
            'onStateChange': onPlayerStateChange
          }
        });
      }
     

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
 