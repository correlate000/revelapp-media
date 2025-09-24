<?php get_header();?>

<main id="archive">
  <section class="l-section">
    <div class="l-container">
      <div class=" c-head">
        <h2 class="c-title">注目の書籍</h2>
      </div>
      <div class="p-top_book_cont c-content--col-6">
        <?php
        $paged = (int) get_query_var('paged');
        $args = array(
          'post_type' => array('books'),
          'posts_per_page' => 30,
          'paged' => $paged,
          'orderby' => 'post_date',
          'order' => 'DESC',
          'post_status' => 'publish',
        );
        $the_query = new WP_Query($args);
        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>
          <?php
          $image = wp_get_attachment_image_src(get_field('books_img'), 'full');
          $img_alt = get_post(get_field('books_img'));
          $alt = get_post_meta( $img_alt->ID, '_wp_attachment_image_alt', true );
          ?>
          <a href="<?php the_permalink();?>" class="p-top_book_cont_card c-textArea--col-6 c-textArea_card">
            <div class="p-top_book_cont_img c-textArea--col-6_img"><img src="<?php echo $image[0]; ?>" alt="<?php echo $alt; ?>"></div>
            <p class="p-top_book_cont_card_title c-textArea--col-6_title"><?php the_title(); ?></p>
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

    </div>

  </section>
  <?php get_template_part('parts/section-latest');?>
  <?php get_template_part('parts/section-suggest');?>
  <?php get_template_part('parts/section-rank');?>
  <?php get_template_part('parts/section-breadcrumbs');?>
</main>
<?php get_footer();?>
