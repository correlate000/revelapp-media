<div class="l-container">
    <div class="p-top_book_top c-head">
      <h2 class="p-top_book_top_title c-title">おすすめ映画</h2>
      <a href="<?php echo home_url(); ?>/movie" class="p-top_book_top_archive c-button">おすすめ映画を見る</a>
    </div>
    <ul class="p-top_book_cont c-content--col-6">

      <?php if( wp_is_mobile()) : ?>
        <!--ここにスマホ・タブレットのときのHTMLコードを記述-->
        <?php
        $args = array(
        'post_type' => 'movie',
        'posts_per_page' => 4, //ここを変数にして中身を分岐する
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
        while ($my_query->have_posts()) : $my_query->the_post();
        ?>
        <?php
        $image = wp_get_attachment_image_src(get_field('movie_img'), 'full');
        $img_alt = get_post(get_field('movie_img'));
        $alt = get_post_meta( $img_alt->ID, '_wp_attachment_image_alt', true );
        ?>
        <li class="p-top_book_cont_card c-textArea--col-6">
          <div class="p-top_book_cont_img c-textArea--col-6_img"><a href="<?php the_permalink();?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo $alt; ?>"></a></div>
          <p class="p-top_book_cont_card_title c-textArea--col-6_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
          <!--
            <p class="p-top_book_cont_card_number c-textArea--col-6_number">全2記事</p>
          -->
        </li>
      <?php endwhile; ?>
      <?php wp_reset_query();endif; ?>
    <?php else : ?>
      <!--ここにPCの時のHTMLコードを記述-->
      <?php
      $args = array(
      'post_type' => 'movie',
      'posts_per_page' => 6, //ここを変数にして中身を分岐する
      );
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()) :
      while ($my_query->have_posts()) : $my_query->the_post();
      ?>
      <?php
      $image = wp_get_attachment_image_src(get_field('movie_img'), 'full');
      $img_alt = get_post(get_field('movie_img'));
      $alt = get_post_meta( $img_alt->ID, '_wp_attachment_image_alt', true );
      ?>
      <li class="c-textArea_card p-top_book_cont_card c-textArea--col-6">
        <a class="c-textArea_card" href="<?php the_permalink();?>">
          <div class="p-top_book_cont_img c-textArea--col-6_img">
            <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt; ?>">
          </div>
        </a>
        <p class="p-top_book_cont_card_title c-textArea--col-6_title">
          <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </p>
        <!--
          <p class="p-top_book_cont_card_number c-textArea--col-6_number">全2記事</p>
        -->
      </li>
    <?php endwhile; ?>
    <?php wp_reset_query();endif; ?>
  <?php endif; ?>
  <li class="empty"></li>
  <li class="empty"></li>
  <li class="empty"></li>
  <li class="empty"></li>
  <li class="empty"></li>
</ul>
</div>
