    <div id="page-top" class="page-top">
      <p><a id="move-page-top" class="move-page-top"></a></p>
    </div>

    <footer>
      <ul id="footer_nav">
        <li><a href="contact.html" class="btn_b">お問い合わせ</a></li>
        <li><a href="company.html#a_recruit" class="btn_b">JOIN US!</a></li>
        <li><a href="https://www.facebook.com/HandiHouseproject/" target="_blank"><img src="<?= DIR_IMG ?>/i_fb2.png" alt="HandiHouse facebook"></a></li>
        <li><a href="https://www.instagram.com/handihouseproject/" target="_blank"> <img src="<?= DIR_IMG ?>/i_insta2.png" alt="HandiHouse instagram"></a></li>
      </ul>
      <p><a href="index.html"><img src="<?= DIR_IMG ?>/hh_mark.png" alt="HandiHouse"></a></p>
      <p class="copyrights">© <?= date('Y') ?> HandiHouse project All Rights Reserved.</p>
    </footer>
  </div>

  <?php // @todo 会社情報 ?>
  <?php if(get_the_ID() == 25): ?>
  <script type="text/javascript" src="<?= DIR_JS ?>/featherlight.js"></script>
  <?php endif; ?>
  <?php // @todo VISION ?>
  <?php if(get_the_ID() == 23): ?>
  <script type="text/javascript" src="<?= DIR_JS ?>/jquery.inview.js"></script>
  <?php endif; ?>
  <script type="text/javascript" src="<?= DIR_JS ?>/handi.js"></script>
  <?php // @todo TOP or VISION ?>
  <?php if(get_the_ID() == 17 || get_the_ID() == 23): ?>
  <script type="text/javascript" src="<?= DIR_JS ?>/handi_slide.js"></script>
  <?php endif; ?>
</body>

</html>
