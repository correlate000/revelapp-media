<section class="l-section">
    <div class="l-container--full--border">
        <div class="c-page-link_wrap">
            <ul class="c-page-link">
                <li class="c-page-link_list">
                <?php if (get_previous_post()):?>
                <?php previous_post_link('%link', '前の記事へ'); ?>
                <?php endif; ?>
                </li>
                <li class="c-page-link_list"><a class="c-page-link_list_archive" href="<?php echo home_url(); ?>/<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>">一覧へ戻る</a></li>
                <li class="c-page-link_list">
                <?php if (get_next_post()):?>
                <?php next_post_link('%link', '次の記事へ'); ?>
                <?php endif; ?>
                </li>
               
            </ul>
        </div>
    </div>
</section>