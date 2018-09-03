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
    <?php if(get_the_ID() == 17): ?>
    <script src="<?= DIR_JS ?>/jquery.cookie.js"></script>
    <?php endif; ?>
    <!-- CSS読み込み -->
    <link rel="stylesheet" href="<?= DIR_CSS ?>/normalize.css">
    <link rel="stylesheet" href="<?= DIR_CSS ?>/hhstyle.css">
    <?php if(get_the_ID() == 17): ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://www.youtube.com/iframe_api"></script>
    <?php else: ?>
    <link rel="stylesheet" href="<?= DIR_CSS ?>/para_bg.css" />
    <?php endif; ?>

    <?php wp_head(); ?>
  </head>
  <body>
