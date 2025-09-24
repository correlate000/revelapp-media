<?php

//functions.php
function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'main-menu' => 'Main Menu',
    'footer-menu'  => 'Footer Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );

add_action('init', function(){
    add_theme_support('post-thumbnails');
});

add_action('init', function() {
    register_post_type('feature',[
      'label' => '特集',
      'public' => true,
      'menu_position' => 10,
      'menu_icon' => 'dashicons-admin-home',
      'supports' => ['thumbnail','title','custom-fields'],
      'has_archive' => true,
      'show_in_rest' => true,
    ]);
  });

  add_action('init', function() {
    register_post_type('suggest',[
      'label' => 'おすすめ記事',
      'public' => true,
      'menu_position' => 10,
      'menu_icon' => 'dashicons-admin-home',
      'supports' => ['thumbnail','title','custom-fields'],
      'has_archive' => true,
      'show_in_rest' => true,
    ]);
  });

add_action('init', function() {
    register_post_type('video',[
        'label' => '動画',
        'public' => true,
        'menu_position' => 10,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => ['thumbnail','title','custom-fields'],
        'has_archive' => true,
        'show_in_rest' => true,
        'taxonomies' => array('video_cat', 'video_tag', 'category', 'post_tag')
    ]);
    });

add_action('init', function() {
	register_post_type('audio',[
			'label' => '音声',
			'public' => true,
			'menu_position' => 10,
			'menu_icon' => 'dashicons-admin-home',
			'supports' => ['thumbnail','title','custom-fields'],
			'has_archive' => true,
			'show_in_rest' => true,
			'taxonomies' => array('_cat', '_tag', 'category', 'post_tag')
	]);
	});

add_action('init', function() {
    register_post_type('books',[
        'label' => 'おすすめ書籍',
        'public' => true,
        'menu_position' => 10,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => ['thumbnail','title','custom-fields'],
        'has_archive' => true,
        'show_in_rest' => true,
    ]);
    });

add_action('init', function() {
    register_post_type('movie',[
        'label' => 'おすすめ映画',
        'public' => true,
        'menu_position' => 10,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => ['thumbnail','title','custom-fields'],
        'has_archive' => true,
        'show_in_rest' => true,
    ]);
    });

add_action('init', function() {
    register_post_type('series',[
        'label' => '連載',
        'public' => true,
        'menu_position' => 10,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => ['thumbnail','title','editor','custom-fields'],
        'has_archive' => true,
        'show_in_rest' => true,
        'taxonomies' => array('series_cat', 'series_tag', 'category', 'post_tag')
    ]);
    register_taxonomy('genre', 'series' ,[
        'label' => '連載カテゴリ',
        'hierarchical' => true,
        'show_in_rest' => true,
        'supports' => ['thumbnail','title','editor'],
    ]);
    });

    


function customize_menus(){
global $menu;
$menu[19] = $menu[10];  //メディアの移動
unset($menu[10]);
}
add_action( 'admin_menu', 'customize_menus' );


// 人気記事出力用
function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
			return "0 View";
	}
	return $count.' Views';
}
function setPostViews($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
	}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
	}
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// スクリプトの適切な登録と読み込み
function theme_scripts() {
    // フロントエンドのみでjQueryを登録解除・再登録
    if (!is_admin()) {
        // WordPressのデフォルトjQueryを登録解除
        wp_deregister_script('jquery');

        // カスタムjQueryを登録
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '3.4.1', true);

        // Swiperを登録
        wp_register_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

        // テーマのメインスクリプトを登録（jQueryに依存）
        wp_register_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'swiper'), '1.0.0', true);

        // スクリプトをエンキュー
        wp_enqueue_script('jquery');
        wp_enqueue_script('swiper');
        wp_enqueue_script('theme-script');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');

