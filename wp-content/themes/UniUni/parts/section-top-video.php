  <div class="p-top_video_cont l-container--swiper">
    <div class="p-top_video_top c-head">
      <h2 class="p-top_video_top_title c-title">動画</h2>
      <a href="<?php echo home_url(); ?>/video" class="p-top_video_top_archive c-button">動画一覧を見る</a>
    </div>
    <div class="p-top_video_swiper">
      <div class="swiper-container slider_video">
        <div class="swiper-wrapper">
          <?php
          $video_posts = get_posts('post_type=video&posts_per_page=5');
          if ( !empty($video_posts) ): ?>

          <?php
          foreach ( $video_posts as $post ):
          setup_postdata($post); ?>
          <a href="<?php the_permalink();?>" class="c-textArea_card swiper-slide">
            <div class="c-textArea--slider">
              <div class="c-textArea--slider_img c-textArea_videoThumb"><?php the_post_thumbnail(); ?></div>
              <div class="c-textArea--slider_title"><?php the_title();?></div>
              <div class="c-textArea--slider_date"><?php the_time('Y/m/d') ?></div>
            </div>
          </a>
        <?php endforeach;
        wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
    <!-- <div class="swiper-pagination"></div> -->
  </div>
  <div class="swiper-button-next--video"></div>
  <div class="swiper-button-prev--video"></div>
</div>
