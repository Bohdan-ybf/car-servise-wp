<?php
/*
Template Name: actions

*/
?>

<?php
global $phone, $phone_show, $instagram, $telegram, $viber, $address_name, $address_link, $mail;
?>



<?php get_header(); ?>

<main class="main">
    <section class="main_banner actions_banner">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/action-bg.jpg" alt="">
        <!-- <img src="./assets/images/20789.JPG" alt=""> -->
        <div class="main_banner_info">
            <!-- <h1 class="main_banner_title"><span>D</span>etailing  <span>C</span>ar <span>S</span>ervice</h1>-->

            <h1 class="main_banner_text">Спецпропозиції</h1>
            <!--  <p class="main_banner_bottom_text">Ми прагнемо завоювати вашу довіру, надаючи досвід та ціну, яку ви
                                очікуєте.</p>  -->
        </div>
    </section>

    <section class="section_special_offers">
        <div class="container">
            <p class="special_offers_title special_offers_title_cust">Наша команда представляє не лише найкращий сервіс,
                але
                та дбати про гаманці наших клієнтів</p>
            <!--  <p class="special_offers_text">Наша команда представляє не лише найкращий сервіс, але
                        та дбати про гаманці наших клієнтів</p>  -->



            <div class="special_offers_wrapper">
                <button type="button" class="special_offers_box" data-bs-toggle="modal" data-bs-target="#modal1">
                    <img class="special_offers_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-14.jpg"
                        alt="">
                    <p class="special_offers_name">Хімчистка на вихідні – знижка 10%</p>
                    <span class="special_offers_present">
                        <svg class="special_offers_icon" fill="#FFFEFE" viewBox="0 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M32 10.015c0-1.104-0.895-2-2-2h-3.414c0.884-0.872 1.449-2.014 1.449-3.421 0-1.732-0.995-3.615-3.788-3.615-3.675 0-6.745 3.913-8.188 6.106-1.444-2.193-4.607-6.106-8.282-6.106-2.793 0-3.788 1.882-3.788 3.614 0 1.407 0.581 2.55 1.482 3.421h-3.472c-1.105 0-2 0.896-2 2v5.986h2.018v13.017c0 1.105 0.895 2 2 2h23.99c1.105 0 2-0.895 2-2v-13.018h1.992v-5.986zM24.247 2.981c1.236 0 1.788 0.52 1.788 1.615 0 2.221-2.479 3.42-4.811 3.42h-3.386c1.421-2.111 3.922-5.035 6.409-5.035zM7.778 2.981c2.487 0 5.083 2.924 6.504 5.034h-3.386c-2.332 0-4.905-1.229-4.905-3.451 0-1.095 0.551-1.583 1.788-1.583zM30 14.002h-13v-3.986h13v3.986zM2 10.015h13v3.986h-13zM4.018 16.002h10.982v13.018h-10.982zM28.008 29.020h-11.008v-13.017h11.008v13.017z">
                                </path>
                            </g>
                        </svg>
                    </span>
                </button>
                <button type="button" class="special_offers_box" data-bs-toggle="modal" data-bs-target="#modal2">
                    <img class="special_offers_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-10.jpg"
                        alt="">
                    <p class="special_offers_name">Кожній хімчисті авто, озонація салону в подарунок</p>
                    <span class="special_offers_present">
                        <svg class="special_offers_icon" fill="#FFFEFE" viewBox="0 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M32 10.015c0-1.104-0.895-2-2-2h-3.414c0.884-0.872 1.449-2.014 1.449-3.421 0-1.732-0.995-3.615-3.788-3.615-3.675 0-6.745 3.913-8.188 6.106-1.444-2.193-4.607-6.106-8.282-6.106-2.793 0-3.788 1.882-3.788 3.614 0 1.407 0.581 2.55 1.482 3.421h-3.472c-1.105 0-2 0.896-2 2v5.986h2.018v13.017c0 1.105 0.895 2 2 2h23.99c1.105 0 2-0.895 2-2v-13.018h1.992v-5.986zM24.247 2.981c1.236 0 1.788 0.52 1.788 1.615 0 2.221-2.479 3.42-4.811 3.42h-3.386c1.421-2.111 3.922-5.035 6.409-5.035zM7.778 2.981c2.487 0 5.083 2.924 6.504 5.034h-3.386c-2.332 0-4.905-1.229-4.905-3.451 0-1.095 0.551-1.583 1.788-1.583zM30 14.002h-13v-3.986h13v3.986zM2 10.015h13v3.986h-13zM4.018 16.002h10.982v13.018h-10.982zM28.008 29.020h-11.008v-13.017h11.008v13.017z">
                                </path>
                            </g>
                        </svg>
                    </span>
                </button>
                <button type="button" class="special_offers_box" data-bs-toggle="modal" data-bs-target="#modal3">
                    <img class="special_offers_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-4.jpeg"
                        alt="">
                    <p class="special_offers_name">До кожного полірування авто твердий віск у подарунок</p>
                    <span class="special_offers_present">
                        <svg class="special_offers_icon" fill="#FFFEFE" viewBox="0 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M32 10.015c0-1.104-0.895-2-2-2h-3.414c0.884-0.872 1.449-2.014 1.449-3.421 0-1.732-0.995-3.615-3.788-3.615-3.675 0-6.745 3.913-8.188 6.106-1.444-2.193-4.607-6.106-8.282-6.106-2.793 0-3.788 1.882-3.788 3.614 0 1.407 0.581 2.55 1.482 3.421h-3.472c-1.105 0-2 0.896-2 2v5.986h2.018v13.017c0 1.105 0.895 2 2 2h23.99c1.105 0 2-0.895 2-2v-13.018h1.992v-5.986zM24.247 2.981c1.236 0 1.788 0.52 1.788 1.615 0 2.221-2.479 3.42-4.811 3.42h-3.386c1.421-2.111 3.922-5.035 6.409-5.035zM7.778 2.981c2.487 0 5.083 2.924 6.504 5.034h-3.386c-2.332 0-4.905-1.229-4.905-3.451 0-1.095 0.551-1.583 1.788-1.583zM30 14.002h-13v-3.986h13v3.986zM2 10.015h13v3.986h-13zM4.018 16.002h10.982v13.018h-10.982zM28.008 29.020h-11.008v-13.017h11.008v13.017z">
                                </path>
                            </g>
                        </svg>
                    </span>
                </button>
                <button type="button" class="special_offers_box" data-bs-toggle="modal" data-bs-target="#modal4">
                    <img class="special_offers_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-8.jpg"
                        alt="">
                    <p class="special_offers_name">До кожної послуги "керамічне покриття", озонація та антидощ
                        на скло у
                        подарунок</p>
                    <span class="special_offers_present">
                        <svg class="special_offers_icon" fill="#FFFEFE" viewBox="0 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M32 10.015c0-1.104-0.895-2-2-2h-3.414c0.884-0.872 1.449-2.014 1.449-3.421 0-1.732-0.995-3.615-3.788-3.615-3.675 0-6.745 3.913-8.188 6.106-1.444-2.193-4.607-6.106-8.282-6.106-2.793 0-3.788 1.882-3.788 3.614 0 1.407 0.581 2.55 1.482 3.421h-3.472c-1.105 0-2 0.896-2 2v5.986h2.018v13.017c0 1.105 0.895 2 2 2h23.99c1.105 0 2-0.895 2-2v-13.018h1.992v-5.986zM24.247 2.981c1.236 0 1.788 0.52 1.788 1.615 0 2.221-2.479 3.42-4.811 3.42h-3.386c1.421-2.111 3.922-5.035 6.409-5.035zM7.778 2.981c2.487 0 5.083 2.924 6.504 5.034h-3.386c-2.332 0-4.905-1.229-4.905-3.451 0-1.095 0.551-1.583 1.788-1.583zM30 14.002h-13v-3.986h13v3.986zM2 10.015h13v3.986h-13zM4.018 16.002h10.982v13.018h-10.982zM28.008 29.020h-11.008v-13.017h11.008v13.017z">
                                </path>
                            </g>
                        </svg>
                    </span>
                </button>
            </div>



        </div>
    </section>


    <!-- Модальное окно 1 -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
        <div class="modal-dialog actions_modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content actions_modal-content">
                <div class="modal-header">
                    <h5 class="modal-title actions_modal-title" id="modal1Label">Хімчистка на вихідні – знижка
                        10%</h5>

                    <button type="button" class="btn_close_offcanvas text-reset" data-bs-dismiss="modal"
                        aria-label="Close">
                        <svg viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M3 21.32L21 3.32001" stroke="#FFFEFE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M3 3.32001L21 21.32" stroke="#FFFEFE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="modal-body actions_modal_body">
                    <img class="actions_modal_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-14.jpg"
                        alt="">
                    <p class="actions_modal_text">На вихідних у нашому сервісі ви маєте чудову можливість
                        освіжити своє
                        авто за акційною ціною! Отримайте знижку 10% на всі послуги хімчистки автомобілів.</p>

                    <p class="actions_modal_text"> Наші фахівці використовують тільки якісні та безпечні засоби
                        для
                        чищення, щоб ваш автомобіль виглядав як новий. Ми уважно працюємо над кожним елементом:
                        сидіння,
                        килимки, обшивка, вікна – ми зможемо очистити всі частини вашого авто, позбавивши його
                        від
                        забруднень, запахів і плям.</p>

                    <p class="actions_modal_text"> Не втрачайте шанс надати вашому автомобілю бездоганний вигляд
                        за
                        вигідною ціною! Акція діє лише в ці вихідні, тож записуйтеся на хімчистку вже сьогодні.
                    </p>

                    <p class="actions_modal_text"> З радістю чекаємо на вас у нашому сервісі!</p>
                </div>
                <div class="modal-footer">
                    <a class="actions_modal_btn" href="tel:<?php echo $phone; ?>" target="_blank">Зателефонувати</a>

                </div>
            </div>
        </div>
    </div>

    <!-- Модальное окно 2 -->
    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
        <div class="modal-dialog actions_modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content actions_modal-content">
                <div class="modal-header">
                    <h5 class="modal-title actions_modal-title" id="modal2Label">Кожній хімчисті авто, озонація
                        салону в
                        подарунок</h5>

                    <button type="button" class="btn_close_offcanvas text-reset" data-bs-dismiss="modal"
                        aria-label="Close">
                        <svg viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M3 21.32L21 3.32001" stroke="#FFFEFE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M3 3.32001L21 21.32" stroke="#FFFEFE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="modal-body actions_modal_body">
                    <img class="actions_modal_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-10.jpg"
                        alt="">

                    <p class="actions_modal_text">Зробіть ваше авто ще більш комфортним і приємним для поїздок!
                        При
                        замовленні послуги хімчистки автомобіля отримуйте озонацію салону в подарунок.</p>

                    <p class="actions_modal_text">Озонація – це ефективний спосіб позбавитися від неприємних
                        запахів,
                        бактерій та алергенів у салоні вашого автомобіля. Під час процедури ми використовуємо
                        озон, який
                        дозволяє освіжити повітря і зробити його чистим та безпечним для вас і ваших пасажирів.
                    </p>

                    <p class="actions_modal_text">Наша команда професіоналів гарантує якісну хімчистку, яка
                        поверне
                        вашому
                        автомобілю «новий вигляд», а безкоштовна озонація зробить ваш салон комфортним і свіжим.
                    </p>

                    <p class="actions_modal_text">Не пропустіть можливість покращити стан вашого авто!
                        Зв'яжіться з
                        нами,
                        щоб замовити хімчистку та озонацію вже сьогодні.</p>

                    <p class="actions_modal_text">Чекаємо вас у нашому сервісі!</p>
                </div>
                <div class="modal-footer">
                    <a class="actions_modal_btn" href="tel:<?php echo $phone; ?>" target="_blank">Зателефонувати</a>

                </div>
            </div>
        </div>
    </div>

    <!-- Модальное окно 3 -->
    <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
        <div class="modal-dialog actions_modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content actions_modal-content">
                <div class="modal-header">
                    <h5 class="modal-title actions_modal-title" id="modal3Label">До кожного полірування авто
                        твердий
                        віск у подарунок</h5>

                    <button type="button" class="btn_close_offcanvas text-reset" data-bs-dismiss="modal"
                        aria-label="Close">
                        <svg viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M3 21.32L21 3.32001" stroke="#FFFEFE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M3 3.32001L21 21.32" stroke="#FFFEFE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="modal-body actions_modal_body">
                    <img class="actions_modal_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-4.jpeg"
                        alt="">



                    <p class="actions_modal_text">Після осінніх дощів і зимових морозів ваше авто потребує
                        особливого
                        догляду. Замовте послугу полірування автомобіля в нашому сервісі та отримайте твердий
                        віск у
                        подарунок!</p>

                    <p class="actions_modal_text">Завдяки твердому воску ваше авто буде захищене від шкідливих
                        впливів
                        навколишнього середовища. Він не лише надає блиск, але й створює міцний захисний шар, що
                        запобігає появі подряпин, окислення і забруднень. Ваш автомобіль виглядатиме як новий і
                        буде
                        надійно захищений.</p>

                    <p class="actions_modal_text">Наша команда професіоналів виконає полірування на високому
                        рівні, а
                        безкоштовний віск стане прекрасним доповненням до вашого догляду за автомобілем.</p>

                    <p class="actions_modal_text">Не пропустіть цю чудову можливість! Записуйтеся на полірування
                        вже
                        сьогодні і надайте своєму автомобілю неперевершений вигляд!</p>

                    <p class="actions_modal_text">Чекаємо вас у нашому сервісі! </p>

                </div>
                <div class="modal-footer">
                    <a class="actions_modal_btn" href="tel:<?php echo $phone; ?>" target="_blank">Зателефонувати</a>

                </div>
            </div>
        </div>
    </div>

    <!-- Модальное окно 4 -->
    <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
        <div class="modal-dialog actions_modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content actions_modal-content">
                <div class="modal-header">
                    <h5 class="modal-title actions_modal-title" id="modal4Label">До кожної послуги "керамічне
                        покриття",
                        озонація та антидощ на скло у подарунок</h5>

                    <button type="button" class="btn_close_offcanvas text-reset" data-bs-dismiss="modal"
                        aria-label="Close">
                        <svg viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M3 21.32L21 3.32001" stroke="#FFFEFE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M3 3.32001L21 21.32" stroke="#FFFEFE" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="modal-body actions_modal_body">
                    <img class="actions_modal_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-8.jpg"
                        alt="">



                    <p class="actions_modal_text">Подаруйте своєму автомобілю бездоганний вигляд та надійний
                        захист!
                        Замовляючи послугу керамічного покриття, отримайте озонацію та антидощ на скло в
                        подарунок!</p>

                    <p class="actions_modal_text">Керамічне покриття забезпечує тривалий захист лакофарбового
                        покриття
                        вашого автомобіля від подряпин, ультрафіолетового випромінювання та шкідливих впливів
                        навколишнього середовища. Це покриття не лише підкреслить насиченість кольору, але й
                        значно
                        спростить процес догляду за вашим авто. </p>

                    <p class="actions_modal_text">А щоб ваш салон був чистим і свіжим, ми включаємо озонацію –
                        ефективний спосіб очищення повітря та усунення неприємних запахів. </p>

                    <p class="actions_modal_text">Крім того, ви отримуєте антидощ на скло, який покращує
                        видимість у
                        дощову погоду, відштовхуючи воду і бруд з поверхні скла. </p>

                    <p class="actions_modal_text">Не доводьте до того, щоб ваш автомобіль виглядав неакуратно!
                        Записуйтеся на керамічне покриття вже сьогодні і насолоджуйтеся всіма перевагами, які
                        отримуєте
                        в подарунок!</p>

                    <p class="actions_modal_text">Чекаємо вас у нашому сервісі!</p>


                </div>
                <div class="modal-footer">
                    <a class="actions_modal_btn" href="tel:<?php echo $phone; ?>" target="_blank">Зателефонувати</a>

                </div>
            </div>
        </div>
    </div>

</main>


<?php get_footer(); ?>