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
          $paged = ($_GET['pg']) ? $_GET['pg'] : 1;
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

        <?php pagination($wp_query); ?>

        <?php wp_reset_postdata(); ?>
      </div>

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
