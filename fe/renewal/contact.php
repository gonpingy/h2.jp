<?php
/*
 * Template Name: CONTACT
 */
if (function_exists( 'wpcf7_enqueue_scripts')) {
  wpcf7_enqueue_scripts();
}

if (function_exists('wpcf7_enqueue_styles')) {
  wpcf7_enqueue_styles();
}

get_header();
?>

    <div class="contents_wrapper">
      <div id="contact" class="contents_area">
        <h2>CONTACT</h2>
        <?= do_shortcode( '[contact-form-7 id="47" title="CONTACT"]' ); ?>
        <?php
        /*
<p>お仕事のご依頼、ご相談、取材等の<span class="sp_i"><br></span>お問い合わせは下記フォームより<span class="sp_i"><br></span>ご連絡下さい。</p>

<p><label for="contact_name">お名前　<span class="require">必須</span></label><br>[text contact_name id:contact_name akismet:author size:50]</p>

<p><label for="contact_company">御社名（法人の方）</label><br>[text contact_company id:contact_company size:50]</p>

<p><label for="contact_mail">メールアドレス</label>　<span class="require">必須</span><br>[email* contact_mail id:contact_mail size:120]</p>

<p><label for="contact_phone">お電話番号</label>　<span class="require">必須</span><br>[text contact_phone id:contact_phone size:50]</p>

<p><label for="contact_text">お問い合わせ内容</label>　<span class="require">必須</span><br><small>※お仕事をご依頼のお客様へ<br>物件情報（住所、面積、構造）やご予算などお分りになる範囲でご記入下さい。</small>[textarea contact_text id:contact_text rows:10 cols:50]

<p><a id="submit" href="javascript:$('form').submit();" class="btn_a nouse">送信</a></p>
         */
        ?>
        <p>
          土日祝日のお問い合わせに関しましては、翌平日営業日以降のご返信となります。<br> また、お問い合わせ内容により、お返事に数日頂く場合がございます。あらかじめご了承ください。
          <br> 弊社より送信するお客様への電子メールは、お客様個人宛にお客様のお問い合わせにお答えさせていただく目的でお送りするものです。
        </p>
        <div class="confirm" style="display: none">
          <p>お問い合わせいただき<span class="sp_i"><br></span>ありがとうございました。<br>１週間以内にご登録いただいた<span class="sp_i"><br></span>メールアドレス宛に<span class="sp_i"><br></span>返信させていただきます。</p>
          <p>※受信制限をしている方は、<span class="sp_i"><br></span>info@handihouse.jpからのメールを<span class="sp_i"><br></span>受信できるよう設定をお願いします。</p>
          <div class=""><a href="<?= URL_TOP ?>" class="btn_a">TOP</a></div>
        </div>
      </div>

<script>
$(function() {
  $('form input, form textarea').on('input keyup blur', function() {
    if ($('input[name="contact_name"]').val() != ''
    && $('input[name="contact_mail"]').val() != ''
    && $('input[name="contact_phone"]').val() != ''
    && $('textarea[name="contact_text"]').val() != '') {
      $('#submit').removeClass('nouse');
    } else {
      $('#submit').addClass('nouse');
    }
  });

  if ($('div.wpcf7-mail-sent-ok').length > 0) {
    $('div.wpcf7, #contact > p').hide();
    $('div.confirm').show();
  }
});
</script>
<style>
div.wpcf7-mail-sent-ok, div.wpcf7-validation-errors, form.sent p {
  display:none;
}
</style>

<?php get_template_part('2018/module/our_project'); ?>

<?php get_footer(); ?>
