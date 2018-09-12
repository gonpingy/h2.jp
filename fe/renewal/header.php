<?php
require_once(get_template_directory() . '/config.php');

// パスワード保護
if (post_password_required($post)) {
  echo get_the_password_form();
  exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HandiHouse project</title>

    <meta name="google-site-verification" content="RmDhfCF6U99ok34c8UnJBrZPQWzABjqohTFG_1PhFkA" />
    <meta name="description" content="HandiHouseproject、第2章が始まります。">
    <meta property="og:url" content="<?= get_current_link(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="HandiHouseproject will be REBORN">
    <meta property="og:site_name" content="HandiHouseproject">
    <meta property="og:description" content="HandiHouseproject、第2章が始まります。">
    <meta property="og:image" content="<?= DIR_IMG ?>/ogp.png">
    <meta property="og:locale" content="ja_JP">
    <link rel="icon" href="<?= DIR_IMG ?>/favicon.ico">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php // @todo TOP ?>
    <?php if(get_the_ID() == 17): ?>
    <script src="<?= DIR_JS ?>/jquery.cookie.js"></script>
    <?php endif; ?>
    <!-- CSS読み込み -->
    <link rel="stylesheet" href="<?= DIR_CSS ?>/normalize.css">
    <?php // @todo 会社情報 ?>
    <?php if(get_the_ID() == 25): ?>
    <link rel="stylesheet" href="<?= DIR_CSS ?>/featherlight.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?= DIR_CSS ?>/hhstyle.css">
    <?php if(get_the_ID() == 17): ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://www.youtube.com/iframe_api"></script>
    <?php endif; ?>

    <?php wp_head(); ?>
  </head>
  <body>

  <?php // @todo TOP ?>
  <?php if(get_the_ID() != 17): ?>
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
    <?php endif; ?>
