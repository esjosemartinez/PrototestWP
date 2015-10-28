
 <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
<div class="video-wrapper hidden">
    <div id="player"></div>
</div>
    <script>
		
	$(window).load(function(){
     
  });
	  	 // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
			height: '576',
			width: '1024',
			videoId: '99k3u9ay1gs',
			playerVars: {
				'showinfo': 0
				},
			events: {
				'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange
			}
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        //event.target.playVideo();
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
	  
      function playVideo() {
        player.playVideo();
      }
      function pauseVideo() {
        player.pauseVideo();
      }
	  	  
	  
	$(window).load(function(){
	
	  
		$('.play').click(function(){
			var el = $(this);
			var id = el.attr('data-youtube');
			player.loadVideoById({'videoId': id,
               'startSeconds': 0,
               'suggestedQuality': 'large'});
			$('.video-wrapper').removeClass('hidden');
			//playVideo();
			
		});
		$('.video-wrapper').click(function(){
			$('.video-wrapper').addClass('hidden');
			player.pauseVideo();
		});
		
		
	});	
    </script>