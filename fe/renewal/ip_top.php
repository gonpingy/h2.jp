<?php
/*
 * Template Name: INDEPENDENT PROJECTS
 */
get_header();
?>

    <div id="pan">
      <a href="index.html">HOME</a>　>　<a href="project.html">PROJECT</a>　>　INDEPENDENT PROJECTS
    </div>
    <div class="contents_wrapper">
      <div id="ip_top" class="contents_area">
        <h2>ハンディの<span class="s1"> /</span><span class="sp_i"><br></span>
           <span class="s2">INDEPENDENT PROJECTS<span></h2>
        <?php foreach (SCF::get( 'INDEPENDENT PROJECT' ) as $i => $group): ?>
        <div id="ip<?= sprintf("%02d") ?>" class="anchor"></div>
        <div id="" class="content_info">
          <img src="<?= $group['photo'] ?>" alt="">
          <div class="content_info_d" id="">
          <h3><?= $group['title_en'] ?><br>
              <span><?= $group['title'] ?></span></h3>
            <h4><?= $group['overview'] ?></h4>
            <p><?= $group['description'] ?></p>
            <p class="address"><a href="<?= $group['link'] ?>" target="_blank">
              <?= $group['link'] ?> <img src="<?= DIR_IMG ?>/i_ip_link.png" alt=""></a></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

<?php get_footer(); ?>
