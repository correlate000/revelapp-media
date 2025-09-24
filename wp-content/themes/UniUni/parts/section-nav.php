<?php
$post = get_post( get_the_ID() );
$slug = $post->post_name;
$category = get_the_category();
$cat_slug = $category[0]->category_nicename;
?>

<?php
if (is_page_template('single-post-column.php')): ?>
<!--
<section class="l-section--local-nav">
      <div class="l-container--post">
        <div class="local-nav">
            <ul class="local-nav_wrap center">

                <li class="local-nav_list"><a href="<?php echo home_url(); ?>/audio/<?php echo $slug; ?>">音声 で聞きたい方はこちら</a></li>
            </ul>
        </div>
      </div>
  </section>
-->
<?php elseif (is_page_template('single-post-dialog.php')) :?>
    <section class="l-section--local-nav">
      <div class="l-container--post">
        <div class="local-nav">
            <ul class="local-nav_wrap">
                <li class="local-nav_list"><a href="<?php echo home_url(); ?>/audio/<?php echo $slug; ?>">音声 で聞きたい方はこちら</a></li>
                <li class="local-nav_list"><a href="<?php echo home_url(); ?>/video/<?php echo $slug; ?>">動画 で楽しみたい方はこちら</a></li>
            </ul>
        </div>
      </div>
  </section>

  <?php elseif (is_page_template('single-audio-column.php')) :?>
    <section class="l-section--local-nav">
      <div class="l-container--post">
        <div class="local-nav">
            <ul class="local-nav_wrap center">
                <li class="local-nav_list"><a href="<?php echo home_url(); ?>/<?php echo $cat_slug; ?>/<?php echo $slug; ?>">文章 で読みたい方はこちら</a></li>
            </ul>
        </div>
      </div>
  </section>

  <?php elseif (is_page_template('single-audio-dialog.php')) :?>
    <section class="l-section--local-nav">
      <div class="l-container--post">
        <div class="local-nav">
            <ul class="local-nav_wrap">
                <li class="local-nav_list"><a href="<?php echo home_url(); ?>/video/<?php echo $slug; ?>">動画 で楽しみたい方はこちら</a></li>
                <li class="local-nav_list"><a href="<?php echo home_url(); ?>/<?php echo $cat_slug; ?>/<?php echo $slug; ?>">文章 で読みたい方はこちら</a></li>
            </ul>
        </div>
      </div>
  </section>

<?php else : ?>
    <section class="l-section--local-nav">
      <div class="l-container--post">
        <div class="local-nav">
            <ul class="local-nav_wrap">
                <li class="local-nav_list"><a href="<?php echo home_url(); ?>/audio/<?php echo $slug; ?>">音声 で聞きたい方はこちら</a></li>
                <li class="local-nav_list"><a href="<?php echo home_url(); ?>/<?php echo $cat_slug; ?>/<?php echo $slug; ?>">文章 で読みたい方はこちら</a></li>
            </ul>
        </div>
      </div>
  </section>
<?php endif; ?>
