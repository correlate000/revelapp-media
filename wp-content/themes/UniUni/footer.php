<?php if (is_page('concept')): ?>
<?php else: ?>
  <div class="btn_concept">
    <a href="<?php echo home_url('concept'); ?>">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/character03_concept.svg" alt="コンセプト">
    </a>
  </div>
<?php endif; ?>

<footer class="l-footer">
  <div class="l-footer_container">
    <div class="l-footer_logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo.svg" alt=""></a></div>

    <?php get_template_part('parts/section-footer-sns');?>

    <nav class="l-footer_nav">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'footer-menu'
      ) );
      ?>
    </nav>
    <p class="l-footer_copyright">&copy;<?php echo date('Y'); ?> UniUni.</p>
  </div>
</footer>
</div>
<!-- JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js" defer></script>

<script>
<!--
function window_open(linkurl){
  window = window.open(linkurl,"","width=700,height=500,scrollbars=yes,status=no,toolbar=no,resizable=yes");
  window.focus();
}
//-->
</script>


<?php wp_footer(); ?>
</body>
</html>
