<?php
/*
 * Template Name: COLLABORATION PROJECTS
 */
get_header();

?>

    <div class="contents_wrapper">
      <div id="cp_top" class="contents_area">
        <h2>ハンディと<span class="s1"> /</span><span class="sp_i"><br></span> <span class="s2">COLLABORATION PROJECTS<span></h2>
        <ul id="genre_nav">
          <li class="selected"><a href="./">ALL</a></li>
          <li><a href="./?category=HOUSE">HOUSE</a></li>
          <li><a href="./?category=MANSION">MANSION</a></li>
          <li><a href="./?category=SHOP">SHOP</a></li>
          <li><a href="./?category=OTHERS">OTHERS</a></li>
        </ul>

        <ul id="cp_list">
          <?php
          $paged = ($_GET['start']) ? $_GET['start'] : 1;
          $category_name = ($_GET['category']) ? $_GET['category'] : '';
          $args = array(
            'post_type' => 'page',
            'post_parent' => $post->ID,
            'category_name' => $category_name,
            'orderby' => 'menu_order'
          );
          $wp_query = new WP_Query($args);

          while ($wp_query->have_posts()):
            $wp_query->the_post();

            $member = [member_last_name($wp_query->post->member1)];

            if ($wp_query->post->member2 != 'なし') {
              $member[] = member_last_name($wp_query->post->member2);
            }
          ?>
          <li>
            <div class="cpimg"><a href="project_c_detail.html"><img src="<?= $wp_query->post->photo ?>" ></a></div>
            <div class="content_info"><span class="date"><?= $wp_query->post->date ?></span> <span class="genre"><?= get_the_category()[0]->name ?></span></div>
            <h3><?= the_title() ?></h3>
            <div class="cp_member">
              <img src="<?= member_to_photo($wp_query->post->member1) ?>">
              <?php if (count($member) == 2): ?>
              <img src="<?= member_to_photo($wp_query->post->member2) ?>">
              <?php endif; ?>
              <br>担当<br><?= implode('・', $member) ?>
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
