<?php
the_author(); /* ループ外では何も表示されません */

while ( have_posts() ) :

  the_post();
  the_author(); /* ループ内では各記事の作成者としてユーザ名が表示されます */

endwhile;
 ?>
