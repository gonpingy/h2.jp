<?php
if (is_page_template('teaser.php')) {
  require_once(get_template_directory() . '/teaser/header.php');
} else {

require_once(get_template_directory() . '/config.php');

// パスワード保護
if (post_password_required($post)) {
  echo get_the_password_form();
  exit;
}

$og_title = SCF::get('og_title');
$og_description = SCF::get('og_description');

if (is_page_template('index.php')) {
  $title = 'HandiHouse project';
} else {
  $title = sprintf('%s | HandiHouse project', get_the_title());;
}

if (empty($og_title)) {
  $og_title = get_the_title();
}

if (empty($og_description)) {
  $og_description = get_the_title();
}
}
?>

<?php if (!is_page_template('teaser.php')): ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <meta name="google-site-verification" content="RmDhfCF6U99ok34c8UnJBrZPQWzABjqohTFG_1PhFkA" />
    <meta name="description" content="家づくりに関わるみんなが同じステージに立ち、みんなのセッションから生み出される「世界にひとつだけの家」家づくりというライブを、一緒に楽しみ尽くす。その先には、住むほどに愛が育つ家があるはずだから。それがHandiHouse projectの「家づくり」です。">
    <meta property="og:url" content="<?= get_current_link(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $og_title ?>">
    <meta property="og:site_name" content="HandiHouseproject">
    <meta property="og:description" content="<?= $og_description ?>">
    <meta property="og:image" content="<?= DIR_IMG ?>/ogp.png">
    <meta property="og:locale" content="ja_JP">
    <link rel="icon" href="<?= DIR_IMG ?>/favicon.ico">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php if (is_page_template('index.php')): ?>
    <script src="<?= DIR_JS ?>/jquery.cookie.js"></script>
    <?php endif; ?>
    <!-- CSS読み込み -->
    <link rel="stylesheet" href="<?= DIR_CSS ?>/normalize.css">
    <?php if (is_page_template('company.php')): ?>
    <link rel="stylesheet" href="<?= DIR_CSS ?>/featherlight.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?= DIR_CSS ?>/hhstyle.css">
    <?php if (is_page_template('index.php')): ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://www.youtube.com/iframe_api"></script>
    <?php endif; ?>

    <?php wp_head(); ?>
  </head>
  <body>

  <?php if (!is_page_template('index.php')): ?>
  <div id="hhwrapper">

    <div id="header">
      <h1><a href="<?= URL_TOP ?>"><img src="<?= DIR_IMG ?>/hh_logo.png" alt="HandiHouse"></a></h1>
      <ul id="g_nav" class="pc">
        <li><a href="<?= URL_VISION ?>">VISION</a></li>
        <li><a href="<?= URL_PROJECT ?>">PROJECT</a></li>
        <li><a href="<?= URL_MEDIA ?>">MEDIA</a></li>
        <li><a href="<?= URL_COMPANY ?>">COMPANY</a></li>
        <li><a href="<?= URL_CONTACT ?>"><img src="<?= DIR_IMG ?>/i_contact.png" alt="CONTACT"></a></li>
        <li><a href="<?= URL_FACEBOOK ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_fb.png" alt="HandiHouse facebook"></a></li>
        <li><a href="<?= URL_INSTAGRAM ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_insta.png" alt="HandiHouse instagram"></a></li>
      </ul>
      <div class="nav_drawer sp">
        <input id="nav_input" type="checkbox" class="nav_unshown">
        <label class="nav_open" for="nav_input"><span></span><span></span><span></span></label>
        <div id="nav_content">
          <ul>
            <li><a href="<?= URL_VISION ?>">VISION</a></li>
            <li><a href="<?= URL_PROJECT ?>">PROJECT</a></li>
            <li><a href="<?= URL_COLLABORATION_PROJECTS ?>">- COLLABORATION PROJECT</a></li>
            <li><a href="<?= URL_INDEPENDENT_PROJECTS ?>">- INDEPENDENT PROJECT</a></li>
            <li><a href="<?= URL_MEDIA ?>">MEDIA</a></li>
            <li><a href="<?= URL_COMPANY ?>">COMPANY</a></li>
            <li><a href="<?= URL_CONTACT ?>"><img src="<?= DIR_IMG ?>/i_contact_w.png" alt="CONTACT"></a></li>
            <li><a href="<?= URL_FACEBOOK ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_fb_w.png" alt="HandiHouse facebook"></a> <a href="<?= URL_INSTAGRAM ?>" target="_blank"><img src="<?= DIR_IMG ?>/i_insta_w.png" alt="HandiHouse instagram"></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="pan">
      <?php if (is_page_template('ip_top.php') || is_page_template('cp_top.php')): ?>
      <a href="<?= URL_TOP ?>">HOME</a>　>　<a href="<?= URL_PROJECT ?>">PROJECT</a>　>　<?= get_the_title() ?>
      <?php elseif (is_page_template('cp_detail.php')): ?>
      <a href="<?= URL_PROJECT ?>">PROJECT</a>　>　<a href="<?= URL_COLLABORATION_PROJECTS ?>">COLLABORATION PROJECTS</a> > <?= get_the_title() ?>
      <?php else: ?>
      <a href="<?= URL_TOP ?>">HOME</a>　>　<?= get_the_title() ?>
      <?php endif; ?>
    </div>
    <?php endif; ?>
<?php endif; ?>
