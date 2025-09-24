<?php get_header();?>
<main id="archive">
    <section class="l-section">
<div class="l-container">
    <div class=" c-head">
        <h2 class="c-title">連載</h2>
    </div>
    <div class="p-top_cat_cont c-content--col-2--square">
    <?php
    $taxonomy = 'genre'; 
    $args = array(
        'hide_empty'=> 0,
        'parent'=> 0,
        'number'=> 3,
        'orderby'=> 'id',
        'order'=> 'DESC'
    ); 
    $terms = get_terms( $taxonomy, $args ); 
    if( $terms )  { ?>
        <?php foreach( $terms as $term ) { 
        $cat_image = SCF::get_term_meta( $term->term_id, $taxonomy, 'series_cat_img' );
        $cf_sample = wp_get_attachment_image_src( $cat_image,'full' );
        $imgUrl = esc_url($cf_sample[0]);
    ?>
    <div class="c-content--col-2--square_wrap">
        <div class="p-top_cat_cont_left c-content--col-2--square--left c-textArea--col-2--big">
            <div class="p-top_cat_cont_left_img  c-textArea--col-2--big_img"><a href="<?php echo get_category_link( $term->term_id ); ?>"><img class="c-textArea_card" src="<?php echo $imgUrl; ?>" alt="<?php echo $term->name; ?>"></a></div>
        </div>
        <div class="p-top_cat_cont_right c-content--col-2--square--right">
            <div class="c-head--mbHalf">
                <div class="c-title--small">最新記事</div>
                <a href="<?php echo get_category_link( $term->term_id ); ?>" class="c-button">もっと見る</a>
            </div>
            <div class="c-textArea--col-2--small--reverse">
            <?php
            $i = 1;
        $custom_posts = get_posts(array(
            'post_type' => 'series', // 投稿タイプ
            'posts_per_page' => 3, // 表示件数
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
                
                    <a href="<?php the_permalink() ?>" class="p-top_cat_cont_right_card c-textArea--col-2--small c-textArea_card">
                        <div class="p-top_cat_cont_right_card_img c-textArea--col-2--small_img"><?php the_post_thumbnail(); ?></div>
                        <div class="c-textArea--col-2--small_text">
                        <p class=" c-textArea--col-2--small_text_top c-title--xs">NO.<?php echo $i++; ?></p>
                            <p class="p-top_cat_cont_right_title c-textArea--col-2--small_text_title"><?php the_title(); ?></p>
                            <p class="p-top_cat_cont_right_date c-textArea--col-2--small_text_date"><?php echo get_the_date('Y.m.d'); ?></p>
                            </div>
                                </a>
            <?php endforeach; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </div>
    <?php } ?>
<?php } ?>
</div>

<div class=" c-head">
    <h2 class="c-title">過去の連載一覧</h2>
</div>
<div class="p-top_book_cont c-content--col-4">
<?php
 $taxonomy = 'genre'; 
 $args = array(
     'hide_empty'=> 0,
     'parent'=> 0,
     'number'=> 12,
     'orderby'=> 'id',
    'order'=> 'DESC',
    'offset' => 3 
 ); 
 $terms = get_terms( $taxonomy, $args ); 
 if( $terms )  { ?>
 <?php foreach( $terms as $term ) { 
     $cat_image = SCF::get_term_meta( $term->term_id, $taxonomy, 'series_cat_img' );
     $cf_sample = wp_get_attachment_image_src( $cat_image,'full' );
     $imgUrl = esc_url($cf_sample[0]);
 ?>
    <a href="<?php echo get_category_link( $term->term_id ); ?>" class="c-textArea_card p-top_book_cont_card c-textArea--col-4">
        <div class="p-top_book_cont_img c-textArea--col-4_img"><img src="<?php echo $imgUrl; ?>" alt="<?php echo $term->name; ?>"></div>
        <p class="p-top_book_cont_card_title c-textArea--col-4_title"><?php echo $term->name; ?></p>
        <p class="p-top_book_cont_card_number c-textArea--col-4_detail"><?php echo $term->description ; ?></p>
        </a>
        <?php } ?>
<?php } ?>
    
</div>
                        </div>
                    </section>
                    <?php get_template_part('parts/section-breadcrumbs');?>
                </main>

                <?php get_footer();?>