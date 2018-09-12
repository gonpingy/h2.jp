<?php
/*
 * Template Name: COMPANY
 */
get_header();
?>

    <div id="pan">
      <a href="index.html">HOME</a>　>　COMPANY
    </div>

    <div class="contents_wrapper_mid">
      <div id="company" class="contents_area">
        <h2>COMPANY</h2>
        <dl>
          <dt>会社名</dt>
          <dd>株式会社HandiHouse project</dd>
          <dt>設立</dt>
          <dd>2018年6月1日</dd>
          <!--          <dt>取締役</dt>
          <dd>代表取締役社長　坂田裕貴</dd>-->
          <dt>事業内容</dt>
          <dd>建築・インテリアの企画、設計、施工<br>DIYワークショップの企画、実施<br>可動産（タイニーハウスなど）の企画、設計、施工<br>建築・建設のコンサルティング<br>これからの住まいの実験室「HandiLabo」の運営</dd>
          <dt>所在地</dt>
          <dd>〒230-0071 神奈川県横浜市鶴見区駒岡4-30-49</dd>
          <dt>受賞歴</dt>
          <dd>2013 SDレビュー入選<br>（Seaside Living / 中田製作所）<br>2014 第一回これからの建築士賞<br>（HandiHouse project）<br>2018 第四回これからの建築士賞<br>（断熱タイニーハウスプロジェクト）</dd>
        </dl>

        <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1026.6179111064612!2d139.6540429350098!3d35.53493020732365!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x506c279a37279f0b!2sHandiHouse+project!5e0!3m2!1sja!2sjp!4v1533697651404" width="495"
            height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div id="a_member" class="anchor"></div>
        <div id="member" class="contents_area">
          <h2>MEMBER</h2>
          <ul id="mem" class="pc">
            <?php foreach  (SCF::get('MEMBER') as $group): ?>
            <li>
              <div class="mimg"><a href="#" data-featherlight="
                <h4><?= $group['name'] ?><br><span><?= $group['name_en'] ?></span></h4>
                <p><?= $group['certification'] ?></p>
                <?= $group['description'] ?>
                  ">
                <img src="<?= $group['photo'] ?>" ></a>
                <h4><?= $group['name'] ?><br><span><?= $group['name_en'] ?></span></h4></div>
            </li>
            <?php endforeach; ?>
          </ul>
          <ul id="mem_sp" class="sp">
            <?php foreach  (SCF::get('MEMBER') as $group): ?>
            <li>
              <div class="mimg"><a href="#" data-featherlight="
                <h4><?= $group['name'] ?><br><span><?= $group['name_en'] ?></span></h4>
                <p><?= $group['certification'] ?></p>
                <?= $group['description'] ?>
                  ">
                <img src="<?= $group['photo'] ?>" ></a>
                <h4><?= $group['name'] ?><br><span><?= $group['name_en'] ?></span></h4></div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>

    <div id="member_img">
      <div id="img_info">
        <p>2016年1月。結成5周年イベントにて家や場つくりを共にした方々と。</p>
      </div>
    </div>

    <div id="a_recruit" class="anchor"></div>
    <div id="recruit">
      <div class="contents_wrapper_mid">
        <h2>RECRUIT</h2>
        <p>私たちと一緒にHandiHouseを<span class="sp_i"><br></span>盛り上げてくれるメンバーを募集しています。</p>
        <div id="recruit_msg">
          <p>HandiHouse projectは<br><a href="vision.html">VISION</a>に賛同してくれる仲間を<span class="sp_i"><br></span>随時募集しております。<br> ともに「家づくり」の舞台に立ち、
            <span class="sp_i"><br></span>最高のエンターテイメントを<span class="sp_i"><br></span>日本中に提供しましょう。<br> 個人の方でも企業の方でも、
            <span class="sp_i"><br></span>HandiHouse projectの仲間、<span class="sp_i"><br></span>住まい手と共に、<span class="pc_i"><br></span> 住まいづくりの舞台で
            <span class="sp_i"><br></span>セッションを楽しみたい方からの<span class="sp_i"><br></span>ご連絡お待ちしております。</p>
        </div>
        <p><a href="contact.html" class="btn_a">JOIN US!</a></p>
      </div>
    </div>

    <div class="contents_wrapper">

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
