<?php
/**
 * Template Name: ランキング 新着 */
?>

<?php get_header(); ?>

<main id="archive">
<section class="l-section">
    <div class="l-container">
        <div class=" c-head--rank">
            <h2 class="c-title">人気記事一覧</h2>
            <ul class="tab--no-link">
                <li class="tab--no-link_list active"><a class="tab--rank_new_list" href="<?php echo home_url(); ?>/ranking-latest">新着</a></li>
                <li class="tab--no-link_list"><a class="tab--rank_successive_list" href="<?php echo home_url(); ?>/ranking-all">歴代</a></li>
            </ul>
        </div>
        <div class="c-content--col-3 c-wpp-list">
        <?php
 $wpp = array (
 'range' => 'weekly',
 'limit' => 18,
 'post_type' => 'series , post',
 'title_length' => '35',
 'stats_comments' => '0',
 'stats_date' => '1',
 'stats_date_format' => 'Y/m/d',
 'stats_views' => '1',
 'thumbnail_width' => '680',
 'thumbnail_height' => '383',
 'post_html' => '<div class="c-textArea_card c-textArea--col-3 wpp_thumb_wrapper">
     <div class="c-textArea--col-3_img">{thumb}</div>
     <div class="c-textArea--col-3_title">{title}</div>
     <div class="c-textArea--col-3_date">{date}</div>
         </div>',
); ?>


<?php wpp_get_mostpopular($wpp); ?>
        <?php
        $paged = (int) get_query_var('paged');
        if ( !is_paged()) {
            $i = 1;
        }else {
            $i =24*($paged -1) +1;
            }
        $args = array(
        'numberposts' => 24,
        'meta_key' => 'pv_count_week',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        ); 
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>
    <a class="c-textArea_card c-textArea--col-3">
    <span class="c-textArea--col-3_number"><?php echo $i++; ?></span>
        <div class="c-textArea--col-3_img"><?php the_post_thumbnail(); ?></div>
        <div class="c-textArea--col-3_title"><?php the_title(); ?></div>
        <div class="c-textArea--col-3_date"><?php echo get_the_date('Y.m.d'); ?></div>
            </a>
    <?php endwhile; endif; wp_reset_postdata(); ?>
</section>
   
    <?php get_template_part('parts/section-latest');?>
    <?php get_template_part('parts/section-suggest');?>
                    
                </main>
                <?php get_template_part('parts/section-breadcrumbs');?>
                <?php get_footer(); ?>