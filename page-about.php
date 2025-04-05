<?php
/*
Template Name: about

*/
?>

<?php
global $phone, $phone_show, $instagram, $telegram, $viber, $address_name, $address_link, $mail;
?>



<?php get_header(); ?>


<main class="main">

    <section class="section_about section_about_first">
        <div class="container">
            <div class="about_box">
                <img class="header_logo_img" src="<?php bloginfo('template_url'); ?>/assets/images/logo-service.png"
                    alt="">
                <h1 class="about_text">Detailing car service — детейлінгова студія, заснована у 2013 році, з великим
                    досвідом у сфері професійного догляду за авто. Ми пропонуємо широкий спектр послуг для збереження та
                    покращення зовнішнього вигляду вашого автомобіля, використовуючи сучасні технології та якісні
                    матеріали.</h1>
            </div>
        </div>
    </section>

    <section class="section_about">
        <div class="container">
            <div class="about_wrapper">
                <div class="swiper swiperAbout">
                    <div class="swiper-wrapper" id="light-gallery-show">
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon4.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon4.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon16.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon16.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon9.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon9.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon15.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon15.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon1.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon1.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon13.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon13.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon8.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon8.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon2.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon2.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon18.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon18.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon5.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon5.jpg" />
                        </a>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_advantages">
        <div class="container">
            <p class="advantages_title">Невеличка інформація про нас</p>
            <div class="advantages_wrapper">
                <div class="advantages_box">
                    <span class="advantages_number">01</span>
                    <p class="advantages_text">Тут буде ваш текст Тут буде ваш текст</p>
                </div>
                <div class="advantages_box">
                    <span class="advantages_number">02</span>
                    <p class="advantages_text">Тут буде ваш текст Тут буде ваш текст</p>
                </div>
                <div class="advantages_box">
                    <span class="advantages_number">03</span>
                    <p class="advantages_text">Тут буде ваш текст Тут буде ваш текст</p>
                </div>
                <div class="advantages_box">
                    <span class="advantages_number">04</span>
                    <p class="advantages_text">Тут буде ваш текст Тут буде ваш текст</p>
                </div>
                <div class="advantages_box">
                    <span class="advantages_number">05</span>
                    <p class="advantages_text">Тут буде ваш текст Тут буде ваш текст</p>
                </div>
                <div class="advantages_box">
                    <span class="advantages_number">06</span>
                    <p class="advantages_text">Тут буде ваш текст Тут буде ваш текст</p>
                </div>

            </div>
        </div>
    </section>

    <section class="section_about_map">
        <a href="<?php echo $address_link; ?>" target="_blank"><img
                src="<?php bloginfo('template_url'); ?>/assets/images/map.jpg" alt=""></a>
    </section>



</main>


<?php get_footer(); ?>