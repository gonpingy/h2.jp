<?php
/*
 * Template Name: COLLABORATION PROJECTS
 */
get_header();

$map = [
  'ALL' => ['url' => './', 'selected' => ''],
  'HOME' => ['url' => './?category=HOME', 'selected' => ''],
  'MANSION' => ['url' => './?category=MANSION', 'selected' => ''],
  'SHOP' => ['url' => './?category=SHOP', 'selected' => ''],
  'OTHERS' => ['url' => './?category=OTHERS', 'selected' => ''],
];
$category_name = ($_GET['category']) ? $_GET['category'] : '';

if (isset($map[$category_name])) {
  $map[$category_name]['selected'] = ' class="selected"';
} else {
  $map['ALL']['selected'] = ' class="selected"';
}
?>

    <div class="contents_wrapper">
      <div id="cp_top" class="contents_area">
        <h2>ハンディと<span class="s1"> /</span><span class="sp_i"><br></span> <span class="s2">COLLABORATION PROJECTS<span></h2>
        <ul id="genre_nav">
          <?php foreach ($map as $key => $value): ?>
          <li<?= $value['selected'] ?>><a href="<?= $value['url'] ?>"><?= $key ?></a></li>
          <?php endforeach; ?>
        </ul>

        <ul id="cp_list">
          <?php
          $paged = ($_GET['start']) ? $_GET['start'] : 1;
          $args = array(
            'post_type' => 'page',
            'post_parent' => $post->ID,
            'posts_per_page' => 14,
            'category_name' => $category_name,
            'orderby' => 'menu_order ASC'
          );
          $wp_query = new WP_Query($args);
          $i = 0;

          while ($wp_query->have_posts()):
            $wp_query->the_post();
            $i++;

            $member = [member_last_name($wp_query->post->member1)];

            if ($wp_query->post->member2 != 'なし') {
              $member[] = member_last_name($wp_query->post->member2);
            }
          ?>
          <li>
            <div class="cpimg"><a href="<?= $wp_query->post->guid ?>"><img src="<?= $wp_query->post->photo ?>" ></a></div>
            <div class="content_info"><span class="date"><?= $wp_query->post->date ?></span> <span class="genre"><?= get_the_category()[0]->name ?></span></div>
            <h3><?= the_title() ?></h3>
            <div class="cp_member">
              <?php if ($i <= 2): ?>
              <img src="<?= member_to_photo($wp_query->post->member1) ?>">
              <?php if (count($member) == 2): ?>
              <img src="<?= member_to_photo($wp_query->post->member2) ?>">
              <?php endif; ?>
              <br>担当<br><?= implode('・', $member) ?>
              <?php else: ?>

              <p>
                <img src="<?= member_to_photo($wp_query->post->member1) ?>">
                <?php if (count($member) == 2): ?>
                <img src="<?= member_to_photo($wp_query->post->member2) ?>">
                <?php endif; ?>
              </p>
              <p>担当<span class="sp_i"> </span><span class="pc_i"><br></span><?= implode('・', $member) ?></p>
              <?php endif; ?>
            </div>
            <div class="sp readmore"><a href="<?= $wp_query->post->guid ?>">READ MORE&nbsp;&nbsp;></a></div>
          </li>
          <?php endwhile; ?>
        </ul>

        <ul id="page_nav">
          <li class="hide"><a href=""><img src="<?= DIR_IMG ?>/page_p.png"alt="prev"></a></li>
          <li class="current"><a href="">1</a></li>
          <li><a href="">2</a></li>
          <li><a href="">3</a></li>
          <li><a href="">4</a></li>
          <li><a href="">5</a></li>
          <li class=""><a href=""><img src="<?= DIR_IMG ?>/page_n.png"alt="next"></a></li>
        </ul>
      </div>

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
