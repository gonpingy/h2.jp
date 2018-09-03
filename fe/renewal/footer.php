      <footer><p class="copyrights"><small>© <?= date('Y') ?> HandiHouse project All Rights Reserved.</small></p></footer>
    </div>

    <script src="<?= DIR_JS_TEASER ?>/parallax-background.min.js" ></script>
    <script type="text/javascript" src="<?= DIR_JS_TEASER ?>/jquery.inview.js"></script>
    <script>
    $(function() {
      $('.cbefore').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if(isInView){
          $(this).stop().addClass('cshow');
        }
        else{
        //  $(this).stop().removeClass('cshow');
        }
      });
    });
    $(function() {
      $('.cbefore2').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
          $(this).stop().addClass('cshow2');
      });
    });
    </script>
    <script>
      //クリックで表示
    $(function(){
      $('a[href^="#"]').click(function(){
        var speed = 1500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
      });
    });
    </script>
    <script>
    $(function() {
    	$(window).on('load resize', function() {
    		$('.parallax').parallaxBackground();
    	});
    });
    </script>
  </body>
</html>
