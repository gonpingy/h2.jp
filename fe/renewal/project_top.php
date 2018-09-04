<?php
/*
 * Template Name: PROJECT
 */
get_header();
?>

  <div id="hhwrapper">
    <div id="header">
      <h1><a href="index.html"><img src="<?= DIR_IMG ?>/hh_logo.png" alt="HandiHouse"></a></h1>
      <ul id="g_nav" class="pc">
        <li><a href="vision.html">VISION</a></li>
        <li><a href="project.html">PROJECT</a></li>
        <li><a href="media.html">MEDIA</a></li>
        <li><a href="company.html">COMPANY</a></li>
        <li><a href="contact.html"><img src="<?= DIR_IMG ?>/i_contact.png" alt="CONTACT"></a></li>
        <li><a href="https://www.facebook.com/HandiHouseproject/" target="_blank"><img src="<?= DIR_IMG ?>/i_fb.png" alt="HandiHouse facebook"></a></li>
        <li><a href="https://www.instagram.com/handihouseproject/" target="_blank"><img src="<?= DIR_IMG ?>/i_insta.png" alt="HandiHouse instagram"></a></li>
      </ul>
      <div class="nav_drawer sp">
        <input id="nav_input" type="checkbox" class="nav_unshown">
        <label class="nav_open" for="nav_input"><span></span><span></span><span></span></label>
        <!--<label class="nav_unshown" id="nav_close" for="nav_input">xxx</label>-->
        <div id="nav_content">
          <ul>
            <li><a href="vision.html">VISION</a></li>
            <li><a href="project.html">PROJECT</a></li>
            <li><a href="project_c_top.html">- COLLABORATION PROJECT</a></li>
            <li><a href="project_i_top.html">- INDEPENDENT PROJECT</a></li>
            <li><a href="media.html">MEDIA</a></li>
            <li><a href="company.html">COMPANY</a></li>
            <li><a href="contact.html"><img src="<?= DIR_IMG ?>/i_contact_w.png" alt="CONTACT"></a></li>
            <li><a href="https://www.facebook.com/HandiHouseproject/" target="_blank"><img src="<?= DIR_IMG ?>/i_fb_w.png" alt="HandiHouse facebook"></a> <a href="https://www.instagram.com/handihouseproject/" target="_blank"><img src="<?= DIR_IMG ?>/i_insta_w.png" alt="HandiHouse instagram"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="pan">
      <a href="index.html">HOME</a>　>　PROJECT
    </div>
    <div id="doors">
      <a href="project_c_top.html" class="d01"></a><a href="project_i_top.html" class="d02"></a>
    </div>
    <div class="contents_wrapper">

      <div class="op">
        <h2>OUR PROJECT</h2></div>
      <ul id="op_nav">
        <li><a href="https://www.facebook.com/handilabo" target="_blank"><img src="<?= DIR_IMG ?>/op01.jpg" class="pc" alt="HANDI LABO"><img src="<?= DIR_IMG ?>/op01_sp.jpg" class="sp" alt="HANDI LABO"></a></li>
        <li><a href="https://seasideliving-zushi.com/" target="_blank"><img src="<?= DIR_IMG ?>/op02.jpg" class="pc" alt="SEASIDE LIVING"><img src="<?= DIR_IMG ?>/op02_sp.jpg" class="sp" alt="SEASIDE LIVING"></a></li>
        <li><a href="https://www.facebook.com/Apart.kitano.47/" target="_blank"><img src="<?= DIR_IMG ?>/op03.jpg" class="pc" alt="DIY APARTMENT"><img src="<?= DIR_IMG ?>/op03_sp.jpg" class="sp" alt="DIY APARTMENT"></a></li>
        <li><a href="https://www.facebook.com/zushinonose/" target="_blank"><img src="<?= DIR_IMG ?>/op04.jpg" class="pc" alt="ZUSHI NONOSE"><img src="<?= DIR_IMG ?>/op04_sp.jpg" class="sp" alt="ZUSHI VILLAGE"></a></li>
      </ul>
    </div>

<?php
// フッタ表示
get_footer();
?>
