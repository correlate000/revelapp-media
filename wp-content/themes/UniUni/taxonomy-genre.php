<?php get_header();?>

<main>
<section class="l-section--post">
    <div class="l-container--post">
        <div class="c-post_mv">
        <?php
        //クエリオブジェクト取得
        $query_object = get_queried_object();
        //タクソノミースラッグ取得
        $taxonomy_slug = $query_object->taxonomy;
        //タクソノミー情報取得
        $taxonomy = get_taxonomy($taxonomy_slug);
        //タクソノミー名取得
        $taxonomy_name = $taxonomy->label;

        $term_id = get_queried_object_id();
        $taxonomy_id = 'genre'; 
        $cat_image = SCF::get_term_meta( $term_id, $taxonomy_id, 'series_cat_img');
        $cf_sample = wp_get_attachment_image_src( $cat_image,'full' );
        $imgUrl = esc_url($cf_sample[0]);
        ?>
         <div class="c-post_mv_img--series"><img src="<?php echo $imgUrl; ?>" alt="<?php echo $taxonomy->label; ?>"></div> 
            <?php 
            $taxonomy_slug = "genre";
            $taxonomy = get_the_terms($post->ID,$taxonomy_slug);
            ?>      
            <div class=" c-head--series">
            <h2 class="c-title--series"><?php echo $taxonomy[0]->name; ?></h2>
            <a href="<?php echo home_url(); ?>/series" class="c-button--series">連載アーカイブページへ</a>
            </div>
            <p class="c-post_mv_series-desc"><?php echo strip_tags( term_description() ); ?></p>
        </div>
    </div>
</section>
            
    
    <section class="l-section--series-taxonomy-content">
        <div class="l-container--narrow">
        <div class="c-textArea--col-2--small--reverse">
            <?php
            $i = 1;
            $custom_posts = get_posts(array(
                'post_type' => 'series', // 投稿タイプ
                'posts_per_page' => -1, // 表示件数
                'orderby' => 'date', // 表示順の基準
                'order' => 'DESC', // 昇順・降順
                'tax_query' => array(
                    array(
                        'taxonomy' => 'genre', //タクソノミーを指定
                        'field' => 'slug', //ターム名をスラッグで指定する
                        'terms' => $term, //表示したいタームをスラッグで指定
                        'operator' => 'IN'
                    ),
                )
            ));
            global $post;
            if($custom_posts): foreach($custom_posts as $post): setup_postdata($post); ?>
            
            <a href="<?php the_permalink(); ?>" class="p-top_cat_cont_right_card c-textArea--col-2--small--seriesTax c-textArea_card">
                <div class="c-textArea--col-2--small--seriesTax_img"><?php the_post_thumbnail(); ?></div>
                <div class="c-textArea--col-2--small--seriesTax_text">
                <p class=" c-textArea--col-2--small_text_top c-title--sm">NO.<?php echo $i++; ?></p>
                    <p class="c-textArea--col-2--small--seriesTax_text_title"><?php the_title(); ?></p>
                    <p class="c-textArea--col-2--small--seriesTax_text_date"><?php the_time('Y/m/d') ?></p>
                </div>
                </a>
              
            <?php endforeach; wp_reset_postdata(); endif; ?>
        </div>
        </div>
    </section>
    <div class="contents_bottom">
<?php get_template_part('parts/section-swiper-series-post');?>
<?php get_template_part('parts/section-latest');?>
<?php get_template_part('parts/section-suggest');?>
<?php get_template_part('parts/section-rank');?>
</div>
</div>
<?php get_template_part('parts/section-breadcrumbs');?>
</main>

<?php get_footer();?>