<?php get_header();?>

<main>
    <?php get_template_part('parts/section-post-video');?>
    <?php get_template_part('parts/section-nav');?>
    <?php get_template_part('parts/section-share');?>
    <?php get_template_part('parts/section-post-sns-fixed');?>
    </div>
    <?php get_template_part('parts/section-page-link');?>
    <div class="contents_bottom">
<section class="l-section--recommended">
    <div class="l-container">
        <div class=" c-head">
            <h2 class="c-title">関連動画</h2>
        </div>
        <?php
  $categories = get_the_category();
  $category_ID = array();
  foreach($categories as $category):
    array_push( $category_ID, $category -> cat_ID);
  endforeach ;
  $args = array(
    'post_type' => 'video',
    'post__not_in' => array($post -> ID),
    'posts_per_page'=> 3,
    'category__in' => $category_ID,
    'orderby' => 'desc',
  );
  $query = new WP_Query($args); 
?>
        <div class="c-content--col-3">
        <?php if( $query -> have_posts() ): while ($query -> have_posts()): $query -> the_post(); ?>
            <a href="<?php the_permalink() ?>" class="c-textArea--col-3 c-textArea_card">
                <div class="c-textArea--col-3_img c-textArea_videoThumb"><?php echo get_the_post_thumbnail(); ?></div>
                <div class="c-textArea--col-3_title"><?php the_title(); ?></div>
                <div class="c-textArea--col-3_date"><?php echo get_the_date( 'Y.m.d' ); ?></div></a>
        <?php endwhile; else:?>
            <p>関連動画はありません。</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php get_template_part('parts/section-latest');?>
<?php get_template_part('parts/section-suggest');?>
<?php get_template_part('parts/section-rank');?>
</div>
<?php get_template_part('parts/section-breadcrumbs');?>
</main>
<?php get_footer();?>