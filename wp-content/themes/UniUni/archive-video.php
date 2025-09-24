<?php get_header();?>

                <main id="archive">
                    <section class="l-section">
                        <div class="l-container">
                            <div class=" c-head">
                                <h2 class="c-title">動画一覧</h2>
                            </div>
                            <div class="c-content--col-3">
                            <?php
$paged_1 = (int) get_query_var('paged');
$args = array(
    'post_type' => array('video'),
    'posts_per_page' => 24,
	'paged' => $paged_1,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_status' => 'publish',
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
    <a href="<?php the_permalink();?>" class="c-textArea_card c-textArea--col-3">
        <div class="c-textArea--col-3_img c-textArea_videoThumb"><?php the_post_thumbnail(); ?></div>
        <div class="c-textArea--col-3_title"><?php the_title();?></div>
        <div class="c-textArea--col-3_date"><?php the_time('Y/m/d') ?></div>
    </a>
    <?php endwhile; endif; ?>
    <div class="empty"></div>
    <div class="empty"></div>
    <div class="empty"></div>
    <div class="empty"></div>
    <div class="empty"></div>
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

<!-- <ul class="Pagination">
    <li class="Pagination__previous disabled"><a tabindex="0" role="button" aria-disabled="true" aria-label="Previous page" rel="prev">Previous</a></li>
    <li class="Pagination__link selected"><a role="button" tabindex="0" aria-label="Page 1 is your current page" aria-current="page">1</a></li>
    <li class="Pagination__link"><a role="button" tabindex="0" aria-label="Page 2">2</a></li>
    <li class="Pagination__link"><a role="button" tabindex="0" aria-label="Page 3">3</a></li>
    <li class="Pagination__link"><a role="button" tabindex="0" aria-label="Page 4">4</a></li>
    <li class="Pagination__link"><a role="button" tabindex="0">…</a></li>
    <li class="Pagination__link"><a role="button" tabindex="0" aria-label="Page 95">95</a></li>
    <li class="Pagination__next"><a tabindex="0" role="button" aria-disabled="false" aria-label="Next page" rel="next">Next</a></li>
</ul> -->
                        </div>
                    </section>
                    <?php get_template_part('parts/section-latest');?>
                    <?php get_template_part('parts/section-suggest');?>
                    <?php get_template_part('parts/section-rank');?>
                    <?php get_template_part('parts/section-breadcrumbs');?>
                </main>

                <?php get_footer();?>
