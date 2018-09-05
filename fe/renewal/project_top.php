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

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
