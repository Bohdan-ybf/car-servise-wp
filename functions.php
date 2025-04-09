<?php

add_action('wp_enqueue_scripts', function() {
    // Подключаем стили
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css');
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style('lightgallery', 'https://cdn.jsdelivr.net/npm/lightgallery@2.8.3/css/lightgallery-bundle.min.css');
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap');

    // Отключаем стандартный jQuery и подключаем свой
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true);
    wp_enqueue_script('jquery');

    // Подключаем скрипты
    wp_enqueue_script('bootstrapJS', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('swiperJS', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('lightgalleryJS', 'https://cdn.jsdelivr.net/npm/lightgallery@2.8.3/lightgallery.umd.min.js', array('jquery'), false, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);
});

// Загружаем ACF-поля с главной страницы
add_action('wp', function() {
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


// Завантажуємо ACF-поля з Car Page (ID = 72)
add_action('wp', function() {
    $car_page_id = 72;

    global $sm_polishing, $md_polishing, $bis_polishing, $prem_polishing, $cros_polishing,
           $sm_body_wrapping, $md_body_wrapping, $bis_body_wrapping, $prem_body_wrapping, $cros_body_wrapping,
           $sm_details, $md_details, $bis_details, $prem_details, $cros_details,
           $sm_under_engine, $md_under_engine, $bis_under_engine, $prem_under_engine, $cros_under_engine,
           $sm_anti_rain, $md_anti_rain, $bis_anti_rain, $prem_anti_rain, $cros_anti_rain,
           $sm_antichrome, $md_antichrome, $bis_antichrome, $prem_antichrome, $cros_antichrome,
           $sm_optics_restoration, $md_optics_restoration, $bis_optics_restoration, $prem_optics_restoration, $cros_optics_restoration,
           $sm_protective_coatings, $md_protective_coatings, $bis_protective_coatings, $prem_protective_coatings, $cros_protective_coatings,
           $sm_cleaning_salon, $md_cleaning_salon, $bis_cleaning_salon, $prem_cleaning_salon, $cros_cleaning_salon,
           $sm_skin_restoration, $md_skin_restoration, $bis_skin_restoration, $prem_skin_restoration, $cros_skin_restoration,
           $sm_drowning, $md_drowning, $prem_drowning, $cros_drowning,
           $sm_dry_coating, $md_dry_coating, $bis_dry_coating, $prem_dry_coating, $cros_dry_coating,
           $sm_zakhist_glossy, $md_zakhist_glossy, $bis_zakhist_glossy, $prem_zakhist_glossy, $cros_zakhist_glossy,
           $sm_ozonation, $md_ozonation, $bis_ozonation, $prem_ozonation, $cros_ozonation, $sm_cleaning_bitumen, $sm_hard_wax, $sm_cleaning_seats, $sm_leather_interior, $sm_resavr;

    $sm_polishing = get_field('sm_polishing', $car_page_id);
    $md_polishing = get_field('md_polishing', $car_page_id);
    $bis_polishing = get_field('bis_polishing', $car_page_id);
    $prem_polishing = get_field('prem_polishing', $car_page_id);
    $cros_polishing = get_field('cros_polishing', $car_page_id);

    $sm_body_wrapping = get_field('sm_body_wrapping', $car_page_id);
    $md_body_wrapping = get_field('md_body_wrapping', $car_page_id);
    $bis_body_wrapping = get_field('bis_body_wrapping', $car_page_id);
    $prem_body_wrapping = get_field('prem_body_wrapping', $car_page_id);
    $cros_body_wrapping = get_field('cros_body_wrapping', $car_page_id);

    $sm_details = get_field('sm_details', $car_page_id);
    $md_details = get_field('md_details', $car_page_id);
    $bis_details = get_field('bis_details', $car_page_id);
    $prem_details = get_field('prem_details', $car_page_id);
    $cros_details = get_field('cros_details', $car_page_id);

    $sm_under_engine = get_field('sm_under_engine', $car_page_id);
    $md_under_engine = get_field('md_under_engine', $car_page_id);
    $bis_under_engine = get_field('bis_under_engine', $car_page_id);
    $prem_under_engine = get_field('prem_under_engine', $car_page_id);
    $cros_under_engine = get_field('cros_under_engine', $car_page_id);

    $sm_anti_rain = get_field('sm_anti_rain', $car_page_id);
    $md_anti_rain = get_field('md_anti_rain', $car_page_id);
    $bis_anti_rain = get_field('bis_anti_rain', $car_page_id);
    $prem_anti_rain = get_field('prem_anti_rain', $car_page_id);
    $cros_anti_rain = get_field('cros_anti_rain', $car_page_id);

    $sm_antichrome = get_field('sm_antichrome', $car_page_id);
    $md_antichrome = get_field('md_antichrome', $car_page_id);
    $bis_antichrome = get_field('bis_antichrome', $car_page_id);
    $prem_antichrome = get_field('prem_antichrome', $car_page_id);
    $cros_antichrome = get_field('cros_antichrome', $car_page_id);

    $sm_optics_restoration = get_field('sm_optics_restoration', $car_page_id);
    $md_optics_restoration = get_field('md_optics_restoration', $car_page_id);
    $bis_optics_restoration = get_field('bis_optics_restoration', $car_page_id);
    $prem_optics_restoration = get_field('prem_optics_restoration', $car_page_id);
    $cros_optics_restoration = get_field('cros_optics_restoration', $car_page_id);

    $sm_protective_coatings = get_field('sm_protective_coatings', $car_page_id);
    $md_protective_coatings = get_field('md_protective_coatings', $car_page_id);
    $bis_protective_coatings = get_field('bis_protective_coatings', $car_page_id);
    $prem_protective_coatings = get_field('prem_protective_coatings', $car_page_id);
    $cros_protective_coatings = get_field('cros_protective_coatings', $car_page_id);

    $sm_cleaning_salon = get_field('sm_cleaning_salon', $car_page_id);
    $md_cleaning_salon = get_field('md_cleaning_salon', $car_page_id);
    $bis_cleaning_salon = get_field('bis_cleaning_salon', $car_page_id);
    $prem_cleaning_salon = get_field('prem_cleaning_salon', $car_page_id);
    $cros_cleaning_salon = get_field('cros_cleaning_salon', $car_page_id);

    $sm_skin_restoration = get_field('sm_skin_restoration', $car_page_id);
    $md_skin_restoration = get_field('md_skin_restoration', $car_page_id);
    $bis_skin_restoration = get_field('bis_skin_restoration', $car_page_id);
    $prem_skin_restoration = get_field('prem_skin_restoration', $car_page_id);
    $cros_skin_restoration = get_field('cros_skin_restoration', $car_page_id);

    $sm_drowning = get_field('sm_drowning', $car_page_id);
    $md_drowning = get_field('md_drowning', $car_page_id);
    $prem_drowning = get_field('prem_drowning', $car_page_id);
    $cros_drowning = get_field('cros_drowning', $car_page_id);

    $sm_dry_coating = get_field('sm_dry_coating', $car_page_id);
    $md_dry_coating = get_field('md_dry_coating', $car_page_id);
    $bis_dry_coating = get_field('bis_dry_coating', $car_page_id);
    $prem_dry_coating = get_field('prem_dry_coating', $car_page_id);
    $cros_dry_coating = get_field('cros_dry_coating', $car_page_id);

    $sm_zakhist_glossy = get_field('sm_zakhist_glossy', $car_page_id);
    $md_zakhist_glossy = get_field('md_zakhist_glossy', $car_page_id);
    $bis_zakhist_glossy = get_field('bis_zakhist_glossy', $car_page_id);
    $prem_zakhist_glossy = get_field('prem_zakhist_glossy', $car_page_id);
    $cros_zakhist_glossy = get_field('cros_zakhist_glossy', $car_page_id);

    $sm_ozonation = get_field('sm_ozonation', $car_page_id);
    $md_ozonation = get_field('md_ozonation', $car_page_id);
    $bis_ozonation = get_field('bis_ozonation', $car_page_id);
    $prem_ozonation = get_field('prem_ozonation', $car_page_id);
    $cros_ozonation = get_field('cros_ozonation', $car_page_id);

    $sm_cleaning_bitumen = get_field('sm_cleaning_bitumen', $car_page_id);
    $sm_hard_wax = get_field('sm_hard_wax', $car_page_id);
    $sm_cleaning_seats = get_field('sm_cleaning_seats', $car_page_id);
    $sm_leather_interior = get_field('sm_leather_interior', $car_page_id);
    $sm_resavr = get_field('sm_resavr', $car_page_id);
});

// Добавляем поддержку миниатюр, заголовков и логотипов
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

// Разрешаем загрузку SVG
add_filter('upload_mimes', function($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});

// Фиксим MIME-тип для SVG
add_filter('wp_check_filetype_and_ext', function($data, $file, $filename, $mimes, $real_mime = '') {
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    } else {
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));
    }

    if ($dosvg) {
        if (current_user_can('manage_options')) {
            $data['ext'] = 'svg';
            $data['type'] = 'image/svg+xml';
        } else {
            $data['ext'] = false;
            $data['type'] = false;
        }
    }

    return $data;
}, 10, 5);

?>