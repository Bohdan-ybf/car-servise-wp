<?php
/*
Template Name: price

*/
?>

<?php
global $phone, $phone_show, $instagram, $telegram, $viber, $address_name, $address_link, $mail;
?>



<?php get_header(); ?>


<main class="main">


    <section class="main_banner actions_banner">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/gallery-bg.jpg" alt="">
        <div class="main_banner_info">
            <h1 class="main_banner_text">Прайси</h1>
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
                    <div class="price_head_wapper">
                        <span>Послуга</span>
                        <span>Ціна</span>
                    </div>
                    <div class="price_warapper">
                        <div class="price_row">
                            <p class="price_name">Мийка авто 3 фази (ручна) з вологим прибиранням</p>
                            <span class="prices_services"><?php echo $sm_details; ?></span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">Мийка підкапотного простору</p>
                            <span class="prices_services"><?php echo $sm_under_engine; ?></span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">Чистка кузова від бітуму та інших забруднень</p>
                            <span class="prices_services"><?php echo $sm_cleaning_bitumen; ?></span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">Нанесення твердого воску з ощищенням кузову</p>
                            <span class="prices_services"><?php echo $sm_hard_wax; ?></span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">Нанесення керамічного покриття (кузов)</p>
                            <span class="prices_services"><?php echo $sm_protective_coatings; ?></span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">Нанесення покриття антидощ</p>
                            <span class="prices_services"><?php echo $sm_anti_rain; ?></span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">Полірування кузова авто</p>
                            <span class="prices_services"><?php echo $sm_polishing; ?></span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">Полірування оптики з її оклейкою</p>
                            <span class="prices_services"><?php echo $sm_optics_restoration; ?></span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">Оклейка антигравійною плівкою фронтальної частини авто</p>
                            <span class="prices_services"><?php echo $sm_body_wrapping; ?></span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">Антихром</p>
                            <span class="prices_services"><?php echo $sm_antichrome; ?></span>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="test">
                        <div class="price_head_wapper">
                            <span>Послуга</span>
                            <span>Ціна</span>
                        </div>
                        <div class="price_warapper">
                            <div class="price_row">
                                <p class="price_name">Хімчистка салона авто</p>
                                <span class="prices_services">Малий <?php echo $sm_cleaning_salon; ?> | Середній <?php echo $md_cleaning_salon; ?> | Бізнес <?php echo $bis_cleaning_salon; ?> |
                                    Позашляховик <?php echo $cros_cleaning_salon; ?> </span>
                            </div>
                            <div class="price_row">
                                <p class="price_name">Хімчистка сидінь</p>
                                <span class="prices_services"><?php echo $sm_cleaning_seats; ?></span>
                            </div>
                            <div class="price_row">
                                <p class="price_name">Озонація</p>
                                <span class="prices_services"><?php echo $sm_ozonation; ?></span>
                            </div>
                            <div class="price_row">
                                <p class="price_name">Нанесення керамічного покриття шкіряний салон</p>
                                <span class="prices_services"><?php echo $sm_dry_coating; ?></span>
                            </div>
                            <div class="price_row">
                                <p class="price_name">Реставрація шкіряного салону</p>
                                <span class="prices_services"><?php echo $sm_leather_interior; ?></span>
                            </div>
                            <div class="price_row">
                                <p class="price_name">Реставраційні роботи</p>
                                <span class="prices_services"><?php echo $sm_resavr; ?></span>
                            </div>
                            <div class="price_row">
                                <p class="price_name">Тонування</p>
                                <span class="prices_services"><?php echo $sm_drowning; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</main>


<?php get_footer(); ?>