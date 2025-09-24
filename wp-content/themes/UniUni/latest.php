<?php
/**
 * Template Name: 新着記事一覧 */
?>

<?php get_header(); ?>

<main id="archive">
    <section class="l-section">
        <div class="l-container">
            <div class=" c-head">
                <h2 class="c-title">新着記事一覧</h2>
            </div>
            <div class="c-content--col-3">
            <?php
$paged = (int) get_query_var('paged');
$args = array(
    'post_type' => array('post', 'series'),
    'posts_per_page' => 24,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_status' => 'publish',
    'exclude' => '149'
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
    <a href="<?php the_permalink();?>" class="c-textArea_card c-textArea--col-3">
        <div class="c-textArea--col-3_img"><?php the_post_thumbnail(); ?></div>
        <div class="c-textArea--col-3_title"><?php the_title(); ?></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
</a>
    <?php endwhile; endif; ?>
</div>
<div class="pagenation">
<?php
if ($the_query->max_num_pages > 1) {
	echo paginate_links(array(
		'base' => get_pagenum_link(1) . '%_%',
		'format' => 'page/%#%/',
		'current' => max(1, $paged),
		'total' => $the_query->max_num_pages,
        'prev_text' => '<',
        'next_text' => '>',
	));
}
?>
</div>
<?php wp_reset_postdata(); // 直前のクエリを復元す ?>


                        </div>
                    </section>
<?php get_template_part('parts/section-suggest');?>
<?php get_template_part('parts/section-rank');?>
<?php get_template_part('parts/section-breadcrumbs');?>
                </main>

                <?php get_footer(); ?>