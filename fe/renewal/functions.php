<?php
//テーマのセットアップ
// titleタグをhead内に生成する
add_theme_support( 'title-tag' );
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

function get_current_link() {
 return (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}

function pagination($pages = '', $range = 2) {
  $showitems = ($range * 2) + 1;

  global $paged;
  if(empty($paged)) $paged = 1;

  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;

    if(!$pages) {
      $pages = 1;
    }
  }

  if(1 != $pages) {
    echo '<ul id="page_nav">';

    if ($paged > 1 && $showitems < $pages) {
      echo sprintf('<li><a href=""><img src="%s" alt="prev"></a></li>', DIR_IMG . '/page_p.png');
    }

    for ($i = 1; $i <= $pages; $i++) {
      if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
        if ($paged == $i) {
          echo sprintf('<li class="current"><a href="">%d</a></li>', $i);
        } else {
          echo sprintf('<li><a href="">%d</a></li>', $i);
        }
      }
    }

    if ($paged < $pages && $showitems < $pages) {
      echo sprintf('<li><a href=""><img src="%s" alt="next"></a></li>', DIR_IMG . '/page_n.png');
    }

    echo '</ul>';
  }
}
