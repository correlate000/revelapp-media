<?php
/*
Template Name: ニュース記事
Template Post Type: post
*/
?>

<?php get_header();?>

<main>
    <?php get_template_part('parts/section-post-mv');?>
    <section class="l-section--content">
    <div class="l-container--post post-contents">
    <?php the_content(); ?>
    </div>
    
    <div class="l-section">
      <div class="l-container--post">
        <div class="c-article">
          <div class="c-article_inner">
            <div class="c-article_cat">
              <p class="c-article_cat_title">記事カテゴリ</p>

              <?php
              $category = get_the_category();
              $cat = $category[0];
              ?>

              <?php
              $category = get_the_category();

              if (!empty( $category )) { ?>
                <ul class="c-article_cat_cont">

                  <?php
                  foreach($category as $cat){

                    echo '<li class="c-article_cat_cont_list"><a class="c-button--cat" href="' . esc_url(get_category_link($cat)) . '"class="c-article_cat_cont_list_link">' . $cat->cat_name . '</a></li>';

                  } ?>

                </ul>
              <?php } ?>
            </div>
            <div class="c-article_tag">
              <p class="c-article_tag_title">記事タグ</p>
              <?php the_tags( '<ul class="c-article_tag_cont"><li class="c-article_tag_cont_list">', '</li><li class="c-article_tag_cont_list">', '</li></ul>' ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
<?php get_template_part('parts/section-share');?>
<?php get_template_part('parts/section-post-sns-fixed');?>
</div>
<?php get_template_part('parts/section-page-link');?>
<div class="contents_bottom">
<?php get_template_part('parts/section-category');?>
<?php get_template_part('parts/section-latest');?>
<?php get_template_part('parts/section-suggest');?>
</section>
<?php get_template_part('parts/section-rank');?>
</div>
<?php get_template_part('parts/section-breadcrumbs');?>
</main>

                <?php get_footer();?>
