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
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon1.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon1.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon2.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon2.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon3.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon3.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon4.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon4.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon5.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon5.jpg" />
                        </a>
                        <a class="swiper-slide swiper_about_slide"
                            href="<?php bloginfo('template_url'); ?>/assets/images/salon/salon6.jpg">
                            <img class="swiper_about_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/salon/salon6.jpg" />
                        </a>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_advantages" id="advantagesCount">
        <div class="container">
            <p class="advantages_title">Невеличка інформація про нас</p>
            <div class="advantages_wrapper">
                <div class="advantages_box">
                    <span class="advantages_number">11 000+</span>
                    <p class="advantages_text">Хімчисток салонів авто</p>
                </div>
                <div class="advantages_box">
                    <span class="advantages_number">2 000+</span>
                    <p class="advantages_text">Відполірованих авто</p>
                </div>
                <div class="advantages_box">
                    <span class="advantages_number">500+</span>
                    <p class="advantages_text">Відреставрованих салонів авто</p>
                </div>
                <div class="advantages_box">
                    <span class="advantages_number">400+</span>
                    <p class="advantages_text">Керамічних покриттів на кузові авто</p>
                </div>
                <div class="advantages_box">
                    <span class="advantages_number">250+</span>
                    <p class="advantages_text">Захищених авто антигравійною плівкою</p>
                </div>
                <div class="advantages_box">
                    <span class="advantages_number">350+</span>
                    <p class="advantages_text">Затонованих авто</p>
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