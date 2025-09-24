
<?php
/*
Template Name: 対談
Template Post Type: audio
*/
?>

<?php get_header();?>

<main>
<?php get_template_part('parts/section-audio');?>
<style> .standfm-embed-iframe { height: 190px; } @media only screen and (max-device-width: 480px) { .standfm-embed-iframe { height: 230px; } } </style>

  <section class="l-section--content">
  <div class="l-container--post post-contents">
    <div style="margin-bottom:20px;">
      <?php the_field('埋め込みコード'); ?>
    </div>

  <p>
  <?php the_field('テキストエリア'); ?>
  </p>
  </div>
  </section>
  <?php get_template_part('parts/section-nav');?>
<?php get_template_part('parts/section-share');?>
<?php get_template_part('parts/section-post-sns-fixed');?>
</div>
<?php get_template_part('parts/section-page-link');?>
<div class="contents_bottom">
<?php get_template_part('parts/section-category');?>
<?php get_template_part('parts/section-latest');?>
<?php get_template_part('parts/section-suggest');?>
</section>
<?php get_template_part('parts/section-rank');?>
</div>
<?php get_template_part('parts/section-breadcrumbs');?>
</main>

<?php get_footer();?>
