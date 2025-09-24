<?php
/*
Template Name: コラム
Template Post Type: post
*/
?>

<?php get_header();?>

<main>
    <?php get_template_part('parts/section-post-mv');?>
    <?php get_template_part('parts/section-nav');?>
    <section class="l-section--content">
    <div class="l-container--post post-contents">
    <?php the_content(); ?>

    </div>
    <?php get_template_part('parts/section-article');?>


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
