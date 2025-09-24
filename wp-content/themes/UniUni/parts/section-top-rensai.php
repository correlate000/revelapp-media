<div class="l-container--swiper">
  <div class="p-top_serialization_top c-head">
    <h2 class="p-top_serialization_top_title c-title">連載</h2>
    <a href="<?php echo home_url(); ?>/series" class="p-top_serialization_top_archive c-button">連載記事を見る</a>
  </div>
  <div class="p-top_serialization_swiper">
    <div class="swiper-container slider_serialization">
      <div class="swiper-wrapper">
        <?php
        $taxonomy = 'genre';
        $args = array(
        'hide_empty'=> 0,
        'parent'=> 0,
        'number'=> 5,
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
            <a href="<?php echo get_category_link( $term->term_id ); ?>" class="c-textArea_card swiper-slide">
              <div class="c-textArea--slider">
                <div class="c-textArea--slider_img"><img src="<?php echo $imgUrl; ?>" alt="<?php echo $term->name; ?>"></div>
              </div>
            </a>
          <?php } ?>
        <?php } ?>
      </div>
      <!-- <div class="swiper-pagination"></div> -->
    </div>
    <div class="swiper-button-next--series"></div>
    <div class="swiper-button-prev--series"></div>
  </div>
</div>
