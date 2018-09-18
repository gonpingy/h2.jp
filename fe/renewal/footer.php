    <div id="page-top" class="page-top">
      <p><a id="move-page-top" class="move-page-top"></a></p>
    </div>

    <footer>
      <ul id="footer_nav">
        <li><a href="<?= URL_CONTACT ?>" class="btn_b">お問い合わせ</a></li>
        <li><a href="<?= URL_COMPANY_RECRUIT ?>" class="btn_b">JOIN US!</a></li>
        <li><a href="<?= URL_FACEBOOK ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_fb2.png" alt="HandiHouse facebook"></a></li>
        <li><a href="<?= URL_INSTAGRAM ?>" target="_blank"> <img src="<?= DIR_IMG ?>/i_insta2.png" alt="HandiHouse instagram"></a></li>
      </ul>
      <p><a href="<?= URL_TOP ?>"><img src="<?= DIR_IMG ?>/hh_mark.png" alt="HandiHouse"></a></p>
      <p class="copyrights">© <?= date('Y') ?> HandiHouse project All Rights Reserved.</p>
    </footer>
  </div>

  <?php if(is_page_template('company.php')): ?>
  <script type="text/javascript" src="<?= DIR_JS ?>/featherlight.js"></script>
  <?php endif; ?>
  <?php if(is_page_template('vision.php')): ?>
  <script type="text/javascript" src="<?= DIR_JS ?>/jquery.inview.js"></script>
  <?php endif; ?>
  <script type="text/javascript" src="<?= DIR_JS ?>/handi.js"></script>
  <?php if(is_page_template('index.php') || is_page_template('vision.php')): ?>
  <script type="text/javascript" src="<?= DIR_JS ?>/handi_slide.js"></script>
  <?php endif; ?>
</body>

</html>
