<?php get_header();?>
<?php
$post = $wp_query->post;

// newsカテゴリであれば以下のテンプレートを呼び出す
if ( in_category('news') ):
	include(TEMPLATEPATH. '/single-post-news.php'); // 作成したnews用の単一記事テンプレート

// newsカテゴリでなければ、このままsingle.phpを使用
else: ?>

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
<div class="contents_bottom">
<?php get_template_part('parts/section-page-link');?>

<?php get_template_part('parts/section-category');?>
<?php get_template_part('parts/section-latest');?>
<?php get_template_part('parts/section-suggest');?>
</section>
<?php get_template_part('parts/section-rank');?>
</div>
<?php get_template_part('parts/section-breadcrumbs');?>
</main>

              <?php endif; ?>

                <?php get_footer();?>
