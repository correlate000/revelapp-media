<?php
/**
 * Template Name: ランキング 歴代 */
?>

<?php get_header(); ?>

<main id="archive">
    <section class="l-section">
        <div class="l-container">
            <div class=" c-head--rank">
                <h2 class="c-title">人気記事一覧</h2>
                <ul class="tab--no-link">
                    <li class="tab--no-link_list"><a class="tab--rank_new_list" href="<?php echo home_url(); ?>/ranking-latest">新着</a></li>
                    <li class="tab--no-link_list active"><a class="tab--rank_successive_list" href="<?php echo home_url(); ?>/ranking-all">歴代</a></li>
                </ul>
            </div>
            <div class="c-content--col-3">
            
            <?php
            // views post metaで記事のPV情報を取得する
            setPostViews(get_the_ID());
            $paged = (int) get_query_var('paged');
            if ( !is_paged()) {
                $i = 1;
            }else {
                $i =24*($paged -1) +1;
                }
            $args = array(
                'post_type' => array('post', 'series'),
                'paged' => $paged,
                'meta_key' => 'post_views_count',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'posts_per_page' => 24
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post(); ?>
            <a href="<?php the_permalink() ?>" class="c-textArea_card c-textArea--col-3">
                <span class="c-textArea--col-3_number"><?php echo $i++; ?></span>
                <div class="c-textArea--col-3_img"><?php the_post_thumbnail(); ?></div>
                <div class="c-textArea--col-3_title"><?php the_title(); ?></div>
                <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
                </a>
            <?php endwhile; endif; ?>
            </div>
            <div class="pagenation">
            <?php
if ($query->max_num_pages > 1) {
	echo paginate_links(array(
		'base' => get_pagenum_link(1) . '%_%',
		'format' => 'page/%#%/',
		'current' => max(1, $paged),
		'total' => $query->max_num_pages,
        'prev_text' => '<',
        'next_text' => '>',                         
	));
}
?>
            </div>
 <?php wp_reset_postdata(); ?>
    </section>
    <?php get_template_part('parts/section-latest');?>
    <?php get_template_part('parts/section-suggest');?>
       
                    
</main>
                <?php get_template_part('parts/section-breadcrumbs');?>
                <?php get_footer(); ?>