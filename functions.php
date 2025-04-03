<?php

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css' );
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
    wp_enqueue_style( 'lightgallery', 'https://cdn.jsdelivr.net/npm/lightgallery@2.8.3/css/lightgallery-bundle.min.css');
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap');

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true);
    wp_enqueue_script('jquery');
    
    wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.bundle.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'swiperJS', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'lightgalleryJS', 'https://cdn.jsdelivr.net/npm/lightgallery@2.8.3/lightgallery.umd.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true );


	 // Прокидуємо всі поля з ACF (буде тягнутись з головної)
	 $home_id = get_option('page_on_front');
	 global $phone, $phone_show, $instagram, $telegram, $viber, $address_name, $address_link, $mail;
	 $phone = get_field('phone', $home_id); 
	 $phone_show = get_field('phone_show', $home_id);
	 $instagram = get_field('instagram', $home_id);
	 $telegram = get_field('telegram', $home_id);
	 $viber = get_field('viber', $home_id);
	 $address_name = get_field('address_name', $home_id);
	 $address_link = get_field('address_link', $home_id);
	 $mail = get_field('mail', $home_id);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}





?>

