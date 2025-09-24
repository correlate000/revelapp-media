<?php get_header();?>

<!--ローディング画面表示-->
<?php //get_template_part('parts/spalsh');?>

<main id="top">

  <section class="l-mv">
    <!--メインビジュアル-->
    <?php get_template_part('parts/section-top-mv');?>
    <!--PRエリア-->
    <?php //get_template_part('parts/section-top-feature');?>
  </section>

  <!--新着記事＆ランキング-->
  <section class="p-top_new-and-rank l-section--new-and-rank" id="area-3">
    <div class="l-container">
      <div class="c-content--col-2">
        <!--新着記事-->
        <?php get_template_part('parts/section-top-new');?>
        <!--ランキング-->
        <?php get_template_part('parts/section-top-rank');?>
      </div>
    </div>
  </section>


  <!--連載-->
  <section class="p-top_serialization l-section--serialization">
    <?php //get_template_part('parts/section-top-rensai');?>
  </section>



  <!--カテゴリページ-->
  <?php //get_template_part('parts/section-top_cat-news');?>
  <?php get_template_part('parts/section-top_cat-taikendan');?>


  <?php get_template_part('parts/section-top_cat-art');?>
  <?php get_template_part('parts/section-top_cat-health');?>
  <?php get_template_part('parts/section-top_cat-minority');?>
  <?php //get_template_part('parts/section-top_cat-job');?>
  <?php //get_template_part('parts/section-top_cat-lifestyle');?>
  <?php //get_template_part('parts/section-top_cat-trend');?>
  <?php //get_template_part('parts/section-top_cat-technology');?>



</main>


<?php get_footer(); ?>
