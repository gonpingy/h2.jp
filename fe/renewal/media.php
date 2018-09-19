<?php
/*
 * Template Name: MEDIA
 */
get_header();

$map = [
  'ALL' => ['url' => './', 'selected' => ''],
  'MAGAZINE' => ['url' => './?category=MAGAZINE', 'selected' => ''],
  'WEB' => ['url' => './?category=WEB', 'selected' => ''],
  'AWARD' => ['url' => './?category=AWARD', 'selected' => ''],
  'LECTURE' => ['url' => './?category=LECTURE', 'selected' => ''],
];
$category_name = ($_GET['category']) ? $_GET['category'] : '';

if (isset($map[$category_name])) {
  $map[$category_name]['selected'] = ' class="selected"';
} else {
  $map['ALL']['selected'] = ' class="selected"';
}
?>

    <div class="contents_wrapper">
      <div id="media" class="contents_area">
        <h2>MEDIA</h2>
        <ul id="genre_nav">
          <?php foreach ($map as $key => $value): ?>
          <li<?= $value['selected'] ?>><a href="<?= $value['url'] ?>"><?= $key ?></a></li>
          <?php endforeach; ?>
        </ul>

        <?php
          $paged = ($_GET['page']) ? $_GET['page'] : 1;
          $category_name = ($_GET['category']) ? $_GET['category'] : '';
          $args = array(
            'paged' => $paged,
            'post_type' => 'post',
            'posts_per_page' => 10,
            'category_name' => $category_name,
            'orderby' => 'date'
          );
          $wp_query = new WP_Query($args);

          while ($wp_query->have_posts()):
            $wp_query->the_post();
        ?>
        <div class="media_content">
          <div class="content_info"><span class="date"><?= get_the_date(); ?></span> <span class="genre"><?= get_the_category()[0]->name; ?></span></div>
          <h3><?= get_the_title(); ?></h3>
          <p><?= nl2br(get_the_content()); ?></p>
        </div>
        <?php endwhile; ?>

<ul id="page_nav">
  <li><a href=""><img src="<?= DIR_IMG ?>/page_p.png"alt="prev"></a></li>
          <li class="current"><a href="">1</a></li>
          <li><a href="">2</a></li>
          <li><a href="">3</a></li>
          <li><a href="">4</a></li>
          <li><a href="">5</a></li>
          <li><a href=""><img src="<?= DIR_IMG ?>/page_n.png"alt="next"></a></li>
        </ul>
      </div>
        <?php
          //if (function_exists('pagination')) {
          //  pagination($wp_query->max_num_pages);
          //}
        ?>

        <?php wp_reset_postdata(); ?>
      </div>

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
