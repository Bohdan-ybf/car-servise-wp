<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>
        <?php
    if (is_front_page()) {
        echo 'Detailing Car Service – Професійний детейлінг авто в Києві';
    } elseif (is_page('car-body')) {
        echo 'Послуги детейлінгу авто – Київ | Detailing Car Service';
    } elseif (is_page('car-interior')) {
        echo 'Послуги детейлінгу авто – Київ | Detailing Car Service';
    }elseif (is_page('price')) {
        echo 'Ціни на детейлінг авто у Києві | Detailing Car Service';
    }elseif (is_page('gallery')) {
        echo 'Галерея робіт – Detailing Car Service, Київ';
    }elseif (is_page('about')) {
        echo 'Про нас – Detailing Car Service, Київ';
    }elseif (is_page('actions')) {
        echo 'Акції та знижки на детейлінг авто | Detailing Car Service';
    }elseif (is_page('contact')) {
        echo 'Контакти Detailing Car Service – Київ';
    }
     else {
        echo 'Detailing Car Service – Професійний детейлінг авто в Києві';
    }
    ?>

    </title>

    <meta name="description" content="<?php
      if (is_front_page()) {
        echo 'Довірте свій автомобіль експертам! Полірування, хімчистка, захист кузова. Детейлінг преміум-рівня у Києві.';
    } elseif (is_page('car-body')) {
        echo 'Повний спектр послуг: полірування, кераміка, хімчистка, захист кузова. Запишіться на професійний детейлінг у Києві!';
    } elseif (is_page('car-interior')) {
        echo 'Повний спектр послуг: полірування, кераміка, хімчистка, захист кузова. Запишіться на професійний детейлінг у Києві!';
    }elseif (is_page('price')) {
        echo 'Дізнайтеся вартість полірування, хімчистки, керамічного покриття та інших послуг. Найкраща якість за чесну ціну!';
    }elseif (is_page('gallery')) {
        echo 'Подивіться фото до та після! Результати полірування, хімчистки, захисту кузова. Довірте своє авто професіоналам.';
    }elseif (is_page('about')) {
        echo 'Ми – команда експертів з детейлінгу. Працюємо з любов’ю до авто, використовуємо якісні матеріали та сучасні технології.';
    }elseif (is_page('actions')) {
        echo ' Вигідні пропозиції на полірування, керамічний захист, хімчистку. Дізнайтесь про актуальні знижки та бонуси!';
    }elseif (is_page('contact')) {
        echo 'Зв’яжіться з нами! Адреса, телефон, соціальні мережі. Запишіться на професійний детейлінг авто прямо зараз!';
    }
     else {
        echo 'Довірте свій автомобіль експертам! Полірування, хімчистка, захист кузова. Детейлінг преміум-рівня у Києві.';
    }
    ?>">

<meta property="og:type" content="https://www.instagram.com/dscarservice/"/>
<meta property="og:locale" content="ua" />
<meta property="og:locale:alternate" content="uk-ua" />
<meta property="og:url" content="<?php echo get_permalink(get_page_by_title('home')->ID); ?>"/>
<meta property="og:site_name" content="Detailing Car Service">
<meta property="og:title" content="Detailing Car Service – Професійний детейлінг авто в Києві">
<meta property="og:description" content="Detailing Car Service – Довірте свій автомобіль експертам! Полірування, хімчистка, захист кузова. Детейлінг преміум-рівня у Києві."/>
<link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/icon-site.ico" type="image/x-icon">


    <?php wp_head(); ?>

</head>

<body>

    <?php
global $phone, $phone_show, $instagram, $telegram, $viber, $address_name, $address_link, $mail;
?>


    <div class="wrapper">
        <header class="header">
            <nav class="navbar navbar-expand-xl">
                <div class="container">
                    <div class="navbar-nav-mob-menu">
                        <div class="navbar-nav header_tel_nav_bar header_tel_nav_bar_mob">

                            <a class="header_tel" href="tel:<?php echo $phone; ?>">
                                <div class="shake">
                                    <svg viewBox="0 0 40 40" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 2c9.925 0 18 8.075 18 18s-8.075 18-18 18S2 29.925 2 20 10.075 2 20 2m0-2C8.955 0 0 8.954 0 20c0 11.047 8.955 20 20 20 11.047 0 20-8.953 20-20C40 8.954 31.047 0 20 0z"
                                            fill="#fffefe" class="fill-959595"></path>
                                        <path clip-rule="evenodd"
                                            d="M14.371 9.793c1.207-.228 1.998 1.133 2.6 2.072.586.912 1.307 1.982 1.016 3.169-.162.666-.764 1.029-1.219 1.422-.449.388-1.133.744-1.299 1.34-.271.967.322 1.982.689 2.56a14.704 14.704 0 0 0 3.129 3.534c.623.51 1.488 1.191 2.355 1.016 1.295-.262 1.637-1.859 3.047-2.072 1.342-.203 2.25.77 3.008 1.422.73.631 1.908 1.439 1.828 2.52-.047.621-.545 1.006-.977 1.381-.439.383-.824.813-1.258 1.096-1.051.686-2.34 1.022-3.82.976-1.451-.045-2.607-.538-3.656-1.097-2.051-1.094-3.672-2.633-5.199-4.348-1.502-1.686-2.889-3.682-3.656-5.889-.957-2.756-.451-5.587 1.098-7.353.262-.3.676-.613 1.055-.935.378-.323.728-.714 1.259-.814z"
                                            fill="#fffefe" fill-rule="evenodd" class="fill-959595"></path>
                                    </svg>
                                </div>
                                <span> <?php echo $phone_show; ?></span>
                            </a>
                            <a class="header_tel" href="https://t.me/<?php echo $telegram; ?>" target="_blank">
                                <svg fill="#29A9EA" width="64px" height="64px" viewBox="0 0 32 32" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>telegram</title>
                                        <path
                                            d="M22.122 10.040c0.006-0 0.014-0 0.022-0 0.209 0 0.403 0.065 0.562 0.177l-0.003-0.002c0.116 0.101 0.194 0.243 0.213 0.403l0 0.003c0.020 0.122 0.031 0.262 0.031 0.405 0 0.065-0.002 0.129-0.007 0.193l0-0.009c-0.225 2.369-1.201 8.114-1.697 10.766-0.21 1.123-0.623 1.499-1.023 1.535-0.869 0.081-1.529-0.574-2.371-1.126-1.318-0.865-2.063-1.403-3.342-2.246-1.479-0.973-0.52-1.51 0.322-2.384 0.221-0.23 4.052-3.715 4.127-4.031 0.004-0.019 0.006-0.040 0.006-0.062 0-0.078-0.029-0.149-0.076-0.203l0 0c-0.052-0.034-0.117-0.053-0.185-0.053-0.045 0-0.088 0.009-0.128 0.024l0.002-0.001q-0.198 0.045-6.316 4.174c-0.445 0.351-1.007 0.573-1.619 0.599l-0.006 0c-0.867-0.105-1.654-0.298-2.401-0.573l0.074 0.024c-0.938-0.306-1.683-0.467-1.619-0.985q0.051-0.404 1.114-0.827 6.548-2.853 8.733-3.761c1.607-0.853 3.47-1.555 5.429-2.010l0.157-0.031zM15.93 1.025c-8.302 0.020-15.025 6.755-15.025 15.060 0 8.317 6.742 15.060 15.060 15.060s15.060-6.742 15.060-15.060c0-8.305-6.723-15.040-15.023-15.060h-0.002q-0.035-0-0.070 0z">
                                        </path>
                                    </g>
                                </svg></a>
                            <a class="header_tel" href="viber://chat?number=<?php echo $viber; ?>" target="_blank">
                                <svg fill="#735EF3" height="200px" width="200px" version="1.1" id="Icons"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 32 32" xml:space="preserve">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M16,0C8.1,0,0,1.7,0,14c0,6.6,2.3,10.7,7,12.6v3.7c0,0.7,0.4,1.3,1,1.6C8.2,32,8.5,32,8.7,32c0.4,0,0.9-0.2,1.2-0.5l3.6-3.6 c0.8,0,1.6,0.1,2.5,0.1c7.9,0,16-1.7,16-14S23.9,0,16,0z M15.5,10.2c1.8,0,3.3,1.5,3.3,3.3c0,0.6-0.4,1-1,1s-1-0.4-1-1 c0-0.7-0.6-1.3-1.3-1.3c-0.6,0-1-0.4-1-1S14.9,10.2,15.5,10.2z M14.5,8.1c0-0.6,0.4-1,1-1c3.5,0,6.4,2.9,6.4,6.4c0,0.6-0.4,1-1,1 s-1-0.4-1-1c0-2.4-2-4.4-4.4-4.4C14.9,9.1,14.5,8.6,14.5,8.1z M22.7,20.5c-0.4,1.2-1.9,2.2-3.2,2.4C19.2,23,18.9,23,18.5,23 c-0.8,0-2-0.2-4.1-1.1c-2.4-1-4.8-3.1-6.7-5.8L7.7,16C7.1,15.1,6,13.4,6,11.6c0-2.2,1.1-3.3,1.5-3.8C8.1,7.3,8.8,7,9.6,7 c0.2,0,0.3,0,0.5,0c0.7,0,1.2,0.2,1.7,1.2l0.4,0.8c0.3,0.8,0.7,1.7,0.8,1.8c0.3,0.6,0.3,1.1,0,1.6c-0.1,0.3-0.3,0.5-0.5,0.7 c-0.1,0.2-0.2,0.3-0.3,0.3c-0.1,0.1-0.1,0.1-0.2,0.2c0.3,0.5,0.9,1.4,1.7,2.1c1.2,1.1,2.1,1.4,2.6,1.6l0,0c0.2-0.2,0.4-0.6,0.7-0.9 l0.1-0.2c0.5-0.7,1.3-0.9,2.1-0.6c0.4,0.2,2.6,1.2,2.6,1.2l0.2,0.1c0.3,0.2,0.7,0.3,0.9,0.7C23.2,18.5,22.9,19.8,22.7,20.5z M24,14.5c-0.6,0-1-0.4-1-1C23,9.4,19.6,6,15.5,6c-0.6,0-1-0.4-1-1s0.4-1,1-1c5.2,0,9.5,4.3,9.5,9.5C25,14.1,24.6,14.5,24,14.5z">
                                        </path>
                                    </g>
                                </svg>
                            </a>


                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M4 18L20 18" stroke="#FFFEFE" stroke-width="2" stroke-linecap="round">
                                    </path>
                                    <path d="M4 12L20 12" stroke="#FFFEFE" stroke-width="2" stroke-linecap="round">
                                    </path>
                                    <path d="M4 6L20 6" stroke="#FFFEFE" stroke-width="2" stroke-linecap="round"></path>
                                </g>
                            </svg>
                        </button>

                    </div>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav header_logo_nav">
                            <a class="header_logo"
                                href="<?php echo get_permalink(get_page_by_title('home')->ID); ?>"><img
                                    class="header_logo_img"
                                    src="<?php bloginfo('template_url'); ?>/assets/images/logo-service.png" alt=""></a>
                        </div>
                        <div class="navbar-nav">
                            <a class="nav-link"
                                href="<?php echo get_permalink(get_page_by_title('home')->ID); ?>">Головна</a>
                            <a class="nav-link"
                                href="<?php echo get_permalink(get_page_by_title('car-body')->ID); ?>">Послуги</a>
                            <a class="nav-link"
                                href="<?php echo get_permalink(get_page_by_title('price')->ID); ?>">Прайси</a>
                            <a class="nav-link"
                                href="<?php echo get_permalink(get_page_by_title('gallery')->ID); ?>">Галерея</a>
                            <a class="nav-link" href="<?php echo get_permalink(get_page_by_title('about')->ID); ?>">Про
                                студію</a>
                            <a class="nav-link"
                                href="<?php echo get_permalink(get_page_by_title('actions')->ID); ?>">Спецпропозиції</a>
                            <a class="nav-link"
                                href="<?php echo get_permalink(get_page_by_title('contact')->ID); ?>">Контакти</a>
                        </div>

                        <div class="navbar-nav header_tel_nav_bar header_tel_nav_bar_desc">

                            <a class="header_tel" href="tel:<?php echo $phone; ?>">
                                <div class="shake">
                                    <svg viewBox="0 0 40 40" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 2c9.925 0 18 8.075 18 18s-8.075 18-18 18S2 29.925 2 20 10.075 2 20 2m0-2C8.955 0 0 8.954 0 20c0 11.047 8.955 20 20 20 11.047 0 20-8.953 20-20C40 8.954 31.047 0 20 0z"
                                            fill="#fffefe" class="fill-959595"></path>
                                        <path clip-rule="evenodd"
                                            d="M14.371 9.793c1.207-.228 1.998 1.133 2.6 2.072.586.912 1.307 1.982 1.016 3.169-.162.666-.764 1.029-1.219 1.422-.449.388-1.133.744-1.299 1.34-.271.967.322 1.982.689 2.56a14.704 14.704 0 0 0 3.129 3.534c.623.51 1.488 1.191 2.355 1.016 1.295-.262 1.637-1.859 3.047-2.072 1.342-.203 2.25.77 3.008 1.422.73.631 1.908 1.439 1.828 2.52-.047.621-.545 1.006-.977 1.381-.439.383-.824.813-1.258 1.096-1.051.686-2.34 1.022-3.82.976-1.451-.045-2.607-.538-3.656-1.097-2.051-1.094-3.672-2.633-5.199-4.348-1.502-1.686-2.889-3.682-3.656-5.889-.957-2.756-.451-5.587 1.098-7.353.262-.3.676-.613 1.055-.935.378-.323.728-.714 1.259-.814z"
                                            fill="#fffefe" fill-rule="evenodd" class="fill-959595"></path>
                                    </svg>
                                </div>
                                <span> <?php echo $phone_show; ?></span>
                            </a>
                            <a class="header_tel" href="https://t.me/<?php echo $telegram; ?>" target="_blank">
                                <svg fill="#29A9EA" width="64px" height="64px" viewBox="0 0 32 32" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>telegram</title>
                                        <path
                                            d="M22.122 10.040c0.006-0 0.014-0 0.022-0 0.209 0 0.403 0.065 0.562 0.177l-0.003-0.002c0.116 0.101 0.194 0.243 0.213 0.403l0 0.003c0.020 0.122 0.031 0.262 0.031 0.405 0 0.065-0.002 0.129-0.007 0.193l0-0.009c-0.225 2.369-1.201 8.114-1.697 10.766-0.21 1.123-0.623 1.499-1.023 1.535-0.869 0.081-1.529-0.574-2.371-1.126-1.318-0.865-2.063-1.403-3.342-2.246-1.479-0.973-0.52-1.51 0.322-2.384 0.221-0.23 4.052-3.715 4.127-4.031 0.004-0.019 0.006-0.040 0.006-0.062 0-0.078-0.029-0.149-0.076-0.203l0 0c-0.052-0.034-0.117-0.053-0.185-0.053-0.045 0-0.088 0.009-0.128 0.024l0.002-0.001q-0.198 0.045-6.316 4.174c-0.445 0.351-1.007 0.573-1.619 0.599l-0.006 0c-0.867-0.105-1.654-0.298-2.401-0.573l0.074 0.024c-0.938-0.306-1.683-0.467-1.619-0.985q0.051-0.404 1.114-0.827 6.548-2.853 8.733-3.761c1.607-0.853 3.47-1.555 5.429-2.010l0.157-0.031zM15.93 1.025c-8.302 0.020-15.025 6.755-15.025 15.060 0 8.317 6.742 15.060 15.060 15.060s15.060-6.742 15.060-15.060c0-8.305-6.723-15.040-15.023-15.060h-0.002q-0.035-0-0.070 0z">
                                        </path>
                                    </g>
                                </svg></a>
                            <a class="header_tel" href="viber://chat?number=<?php echo $viber; ?>" target="_blank">
                                <svg fill="#735EF3" height="200px" width="200px" version="1.1" id="Icons"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 32 32" xml:space="preserve">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M16,0C8.1,0,0,1.7,0,14c0,6.6,2.3,10.7,7,12.6v3.7c0,0.7,0.4,1.3,1,1.6C8.2,32,8.5,32,8.7,32c0.4,0,0.9-0.2,1.2-0.5l3.6-3.6 c0.8,0,1.6,0.1,2.5,0.1c7.9,0,16-1.7,16-14S23.9,0,16,0z M15.5,10.2c1.8,0,3.3,1.5,3.3,3.3c0,0.6-0.4,1-1,1s-1-0.4-1-1 c0-0.7-0.6-1.3-1.3-1.3c-0.6,0-1-0.4-1-1S14.9,10.2,15.5,10.2z M14.5,8.1c0-0.6,0.4-1,1-1c3.5,0,6.4,2.9,6.4,6.4c0,0.6-0.4,1-1,1 s-1-0.4-1-1c0-2.4-2-4.4-4.4-4.4C14.9,9.1,14.5,8.6,14.5,8.1z M22.7,20.5c-0.4,1.2-1.9,2.2-3.2,2.4C19.2,23,18.9,23,18.5,23 c-0.8,0-2-0.2-4.1-1.1c-2.4-1-4.8-3.1-6.7-5.8L7.7,16C7.1,15.1,6,13.4,6,11.6c0-2.2,1.1-3.3,1.5-3.8C8.1,7.3,8.8,7,9.6,7 c0.2,0,0.3,0,0.5,0c0.7,0,1.2,0.2,1.7,1.2l0.4,0.8c0.3,0.8,0.7,1.7,0.8,1.8c0.3,0.6,0.3,1.1,0,1.6c-0.1,0.3-0.3,0.5-0.5,0.7 c-0.1,0.2-0.2,0.3-0.3,0.3c-0.1,0.1-0.1,0.1-0.2,0.2c0.3,0.5,0.9,1.4,1.7,2.1c1.2,1.1,2.1,1.4,2.6,1.6l0,0c0.2-0.2,0.4-0.6,0.7-0.9 l0.1-0.2c0.5-0.7,1.3-0.9,2.1-0.6c0.4,0.2,2.6,1.2,2.6,1.2l0.2,0.1c0.3,0.2,0.7,0.3,0.9,0.7C23.2,18.5,22.9,19.8,22.7,20.5z M24,14.5c-0.6,0-1-0.4-1-1C23,9.4,19.6,6,15.5,6c-0.6,0-1-0.4-1-1s0.4-1,1-1c5.2,0,9.5,4.3,9.5,9.5C25,14.1,24.6,14.5,24,14.5z">
                                        </path>
                                    </g>
                                </svg>
                            </a>


                        </div>

                    </div>

                </div>
            </nav>
        </header>