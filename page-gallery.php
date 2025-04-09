<?php
/*
Template Name: gallery

*/
?>

<?php
global $phone, $phone_show, $instagram, $telegram, $viber, $address_name, $address_link, $mail;
?>



<?php get_header(); ?>


<main class="main">

    <section class="main_banner actions_banner">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/gallery/cuzov/show-pic12.JPG" alt="">
        <div class="main_banner_info">
            <h1 class="main_banner_text">Галерея</h1>
        </div>
    </section>

    <section class="section_galley">
        <div class="container">
            <p class="center_title">Оберіть категорію</p>
            <ul class="nav nav-tabs nav_tabs_swich" id="myTab" role="tablist">
                <li class="nav-item nav_item_swich" role="presentation">
                    <button class="nav-link nav_link_text active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                        aria-selected="true">Кузов</button>
                </li>
                <li class="nav-item nav_item_swich" role="presentation">
                    <button class="nav-link nav_link_text" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="false">Салон</button>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="gallery_mixed_wrapper" id="gallery-mixed-content-demo">
                        <?php for ($i = 1; $i <= 82; $i++): ?>
                            <a class="gallery_mixed_item"
                                href="<?php bloginfo('template_url'); ?>/assets/images/gallery/cuzov/cuzov<?php echo $i; ?>.jpeg">
                                <img class="gallery_mixed_img"
                                    src="<?php bloginfo('template_url'); ?>/assets/images/gallery/cuzov/cuzov<?php echo $i; ?>.jpeg" />
                            </a>
                        <?php endfor; ?>

                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="gallery_mixed_wrapper" id="gallery-mixed-content-demo-2">
                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s1.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s1.jpeg" />
                        </a>

                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s2.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s2.jpeg" />
                        </a>

                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s3.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s3.jpeg" />
                        </a>

                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s4.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s4.jpeg" />
                        </a>

                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s5.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s5.jpeg" />
                        </a>

                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s6.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s6.jpeg" />
                        </a>

                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s7.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s7.jpeg" />
                        </a>

                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s8.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s8.jpeg" />
                        </a>

                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s9.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s9.jpeg" />
                        </a>

                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s10.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s10.jpeg" />
                        </a>

                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s11.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s11.jpeg" />
                        </a>

                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s12.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s12.jpeg" />
                        </a>
                        <a class="gallery_mixed_item"
                            href="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s13.jpeg">
                            <img class="gallery_mixed_img"
                                src="<?php bloginfo('template_url'); ?>/assets/images/gallery/salon/s13.jpeg" />
                        </a>
                    </div>
                </div>
            </div>
    </section>






</main>


<?php get_footer(); ?>