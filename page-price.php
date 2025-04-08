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
            <!--  <p class="main_banner_bottom_text">Ми прагнемо завоювати вашу довіру, надаючи досвід та ціну, яку ви
                                очікуєте.</p>  -->
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
                            <p class="price_name">1- Мийка авто 3 фази (ручна) з вологим прибиранням</p>
                            <span class="prices_services">1000 грн</span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">2- Мийка підкапотного простору</p>
                            <span class="prices_services">800 грн</span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">3- Чистка кузова від бітуму та інших забруднень</p>
                            <span class="prices_services">1200 грн</span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">4- Нанесення твердого воску з ощищенням кузову</p>
                            <span class="prices_services">1500 грн</span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">5- Нанесення керамічного покриття (кузов)</p>
                            <span class="prices_services">9000 грн</span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">6- Нанесення покриття антидощ</p>
                            <span class="prices_services">1500 грн</span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">7- Полірування кузова авто</p>
                            <span class="prices_services">7000 - 11000 грн</span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">8- Полірування оптики з її оклейкою</p>
                            <span class="prices_services">3000 - 3500 грн</span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">9- Оклейка антигравійною плівкою фронтальної частини авто</p>
                            <span class="prices_services">40000 - 50000 грн</span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">10- Хімчистка авто</p>
                            <span class="prices_services">Малий 4000 грн | Середній 4300 грн  | Бізнес 4700 грн | Позашляховик 5000 грн </span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">11- Хімчистка сидінь</p>
                            <span class="prices_services">2000 грн</span>
                        </div>
                        <div class="price_row">
                            <p class="price_name">12- Озонація</p>
                            <span class="prices_services">500 грн</span>
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
                                <p class="price_name">13- Нанесення керамічного покриття шкіряний салон</p>
                                <span class="prices_services">5000 - 6000 грн</span>
                            </div>
                            <div class="price_row">
                                <p class="price_name">14- Реставрація шкіряного салону</p>
                                <span class="prices_services">Договірна</span>
                            </div>
                            <div class="price_row">
                                <p class="price_name">15- Реставраційні роботи</p>
                                <span class="prices_services">Договірна</span>
                            </div>
                            <div class="price_row">
                                <p class="price_name">16- Тонування</p>
                                <span class="prices_services">4000 - 8000 грн</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</main>


<?php get_footer(); ?>