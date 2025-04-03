<?php
/*
Template Name: carbody

*/
?>

<?php
global $phone, $phone_show, $instagram, $telegram, $viber, $address_name, $address_link, $mail;
?>



<?php get_header(); ?>



<section class="main_banner actions_banner">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/car-body-bg.jpg" alt="">
    <div class="main_banner_info">
        <p class="main_banner_text">Послуги</p>
        <!--  <p class="main_banner_bottom_text">Ми прагнемо завоювати вашу довіру, надаючи досвід та ціну, яку ви
                    очікуєте.</p>  -->
    </div>
</section>

<div class="container">
    <p class="center_title">Оберіть категорію</p>
</div>

<section class="section_swap_category">
    <div class="container">

        <div class="swap_category_wrapper">
            <div class="swap_category_box active" class="swap_category_box">Кузов</div>
            <a class="swap_category_box"
                href="<?php echo get_permalink(get_page_by_title('car-interior')->ID); ?>">Салон</a>
        </div>
    </div>
</section>

<section class="section_service section_service_odd" id="poliruvannya">
    <div class="container">
        <div class="service_wrapper">
            <div class="service_box service_box_img">
                <img class="service_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-3.jpeg" alt="">
            </div>
            <div class="service_box">
                <p class="service_title">Відновлююче полірування або корекційне</p>
                <p class="service_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit quos
                    libero nostrum vero exercitationem minima expedita, maxime quae debitis harum iusto.
                    Asperiores commodi totam eveniet libero doloremque quae iusto quibusdam quasi quis nisi,
                    illum sunt sint odio quia aut animi, numquam adipisci nostrum? Iure nam explicabo ipsam
                    consequuntur eos alias?</p>
                <p class="service_sub_text">Вартість:</p>
                <div class="service_price_wrapepr">

                    <div class="service_price_box">
                        <p class="service_price_name">Малий</p>
                        <p class="service_price"><?php the_field('sm_polishing'); ?></p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Середній</p>
                        <p class="service_price"><?php the_field('md_polishing'); ?></p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Бізнес</p>
                        <p class="service_price"><?php the_field('bis_polishing'); ?></p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Преміум</p>
                        <p class="service_price"><?php the_field('prem_polishing'); ?></p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Позашляховик</p>
                        <p class="service_price"><?php the_field('cross_polishing'); ?></p>
                    </div>
                </div>
                <a href="https://t.me/<?php echo $telegram; ?>" class="actions_modal_btn btn-w-50"
                    target="_blank">Замовити</a>
            </div>
        </div>
    </div>
</section>

<section class="section_service section_service_even" id="okleykaKuzova">
    <div class="container">
        <div class="service_wrapper">
            <div class="service_box service_box_img">
                <img class="service_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-9.jpg" alt="">
            </div>
            <div class="service_box">
                <p class="service_title">Оклейка кузова антигравійною плівкою</p>
                <p class="service_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit quos
                    libero nostrum vero exercitationem minima expedita, maxime quae debitis harum iusto.
                    Asperiores commodi totam eveniet libero doloremque quae iusto quibusdam quasi quis nisi,
                    illum sunt sint odio quia aut animi, numquam adipisci nostrum? Iure nam explicabo ipsam
                    consequuntur eos alias?</p>
                <p class="service_sub_text">Вартість:</p>
                <div class="service_price_wrapepr">

                    <div class="service_price_box">
                        <p class="service_price_name">Малий</p>
                        <p class="service_price"><?php the_field('sm_body_wrapping'); ?></p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Середній</p>
                        <p class="service_price"><?php the_field('sm_body_wrapping'); ?></p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Бізнес</p>
                        <p class="service_price"><?php the_field('sm_body_wrapping'); ?></p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Преміум</p>
                        <p class="service_price"><?php the_field('sm_body_wrapping'); ?></p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Позашляховик</p>
                        <p class="service_price"><?php the_field('sm_body_wrapping'); ?></p>
                    </div>
                </div>
                <a href="https://t.me/<?php echo $telegram; ?>" class="actions_modal_btn btn-w-50"
                    target="_blank">Замовити</a>
            </div>
        </div>
    </div>
</section>

<section class="section_service section_service_odd" id="deteylinhMyyka">
    <div class="container">
        <div class="service_wrapper">
            <div class="service_box service_box_img">
                <img class="service_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-4.jpeg" alt="">
            </div>
            <div class="service_box">
                <p class="service_title">Детейлін мийка</p>
                <p class="service_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit quos
                    libero nostrum vero exercitationem minima expedita, maxime quae debitis harum iusto.
                    Asperiores commodi totam eveniet libero doloremque quae iusto quibusdam quasi quis nisi,
                    illum sunt sint odio quia aut animi, numquam adipisci nostrum? Iure nam explicabo ipsam
                    consequuntur eos alias?</p>
                <p class="service_sub_text">Вартість:</p>
                <div class="service_price_wrapepr">

                    <div class="service_price_box">
                        <p class="service_price_name">Малий</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Середній</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Бізнес</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Преміум</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Позашляховик</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                </div>
                <a href="https://t.me/<?php echo $telegram; ?>" class="actions_modal_btn btn-w-50"
                    target="_blank">Замовити</a>
            </div>
        </div>
    </div>
</section>

<section class="section_service section_service_even" id="myykaPidkapotnoho">
    <div class="container">
        <div class="service_wrapper">
            <div class="service_box service_box_img">
                <img class="service_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-7.jpg" alt="">
            </div>
            <div class="service_box">
                <p class="service_title">Мийка підкапотного простору</p>
                <p class="service_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit quos
                    libero nostrum vero exercitationem minima expedita, maxime quae debitis harum iusto.
                    Asperiores commodi totam eveniet libero doloremque quae iusto quibusdam quasi quis nisi,
                    illum sunt sint odio quia aut animi, numquam adipisci nostrum? Iure nam explicabo ipsam
                    consequuntur eos alias?</p>
                <p class="service_sub_text">Вартість:</p>
                <div class="service_price_wrapepr">

                    <div class="service_price_box">
                        <p class="service_price_name">Малий</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Середній</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Бізнес</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Преміум</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Позашляховик</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                </div>
                <a href="https://t.me/<?php echo $telegram; ?>" class="actions_modal_btn btn-w-50"
                    target="_blank">Замовити</a>
            </div>
        </div>
    </div>
</section>

<section class="section_service section_service_odd" id="antidosht">
    <div class="container">
        <div class="service_wrapper">
            <div class="service_box service_box_img">
                <img class="service_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-8.jpg" alt="">
            </div>
            <div class="service_box">
                <p class="service_title">Антидощ</p>
                <p class="service_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit quos
                    libero nostrum vero exercitationem minima expedita, maxime quae debitis harum iusto.
                    Asperiores commodi totam eveniet libero doloremque quae iusto quibusdam quasi quis nisi,
                    illum sunt sint odio quia aut animi, numquam adipisci nostrum? Iure nam explicabo ipsam
                    consequuntur eos alias?</p>
                <p class="service_sub_text">Вартість:</p>
                <div class="service_price_wrapepr">

                    <div class="service_price_box">
                        <p class="service_price_name">Малий</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Середній</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Бізнес</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Преміум</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Позашляховик</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                </div>
                <a href="https://t.me/<?php echo $telegram; ?>" class="actions_modal_btn btn-w-50"
                    target="_blank">Замовити</a>
            </div>
        </div>
    </div>
</section>

<section class="section_service section_service_even" id="antikhrom">
    <div class="container">
        <div class="service_wrapper">
            <div class="service_box service_box_img">
                <img class="service_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-16.jpg" alt="">
            </div>
            <div class="service_box">
                <p class="service_title">Антихром</p>
                <p class="service_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit quos
                    libero nostrum vero exercitationem minima expedita, maxime quae debitis harum iusto.
                    Asperiores commodi totam eveniet libero doloremque quae iusto quibusdam quasi quis nisi,
                    illum sunt sint odio quia aut animi, numquam adipisci nostrum? Iure nam explicabo ipsam
                    consequuntur eos alias?</p>
                <p class="service_sub_text">Вартість:</p>
                <div class="service_price_wrapepr">

                    <div class="service_price_box">
                        <p class="service_price_name">Малий</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Середній</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Бізнес</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Преміум</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Позашляховик</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                </div>
                <a href="https://t.me/<?php echo $telegram; ?>" class="actions_modal_btn btn-w-50"
                    target="_blank">Замовити</a>
            </div>
        </div>
    </div>
</section>

<section class="section_service section_service_odd" id="restavratsiyaOptyky">
    <div class="container">
        <div class="service_wrapper">
            <div class="service_box service_box_img">
                <img class="service_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-15.jpg" alt="">
            </div>
            <div class="service_box">
                <p class="service_title">Реставрація оптики</p>
                <p class="service_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit quos
                    libero nostrum vero exercitationem minima expedita, maxime quae debitis harum iusto.
                    Asperiores commodi totam eveniet libero doloremque quae iusto quibusdam quasi quis nisi,
                    illum sunt sint odio quia aut animi, numquam adipisci nostrum? Iure nam explicabo ipsam
                    consequuntur eos alias?</p>
                <p class="service_sub_text">Вартість:</p>
                <div class="service_price_wrapepr">

                    <div class="service_price_box">
                        <p class="service_price_name">Малий</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Середній</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Бізнес</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Преміум</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Позашляховик</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                </div>
                <a href="https://t.me/<?php echo $telegram; ?>" class="actions_modal_btn btn-w-50"
                    target="_blank">Замовити</a>
            </div>
        </div>
    </div>
</section>

<section class="section_service section_service_even" id="zakhysnykhPokryttiy">
    <div class="container">
        <div class="service_wrapper">
            <div class="service_box service_box_img">
                <img class="service_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-11.jpg" alt="">
            </div>
            <div class="service_box">
                <p class="service_title">Нанесення захисних покриттів в салоні</p>
                <p class="service_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit quos
                    libero nostrum vero exercitationem minima expedita, maxime quae debitis harum iusto.
                    Asperiores commodi totam eveniet libero doloremque quae iusto quibusdam quasi quis nisi,
                    illum sunt sint odio quia aut animi, numquam adipisci nostrum? Iure nam explicabo ipsam
                    consequuntur eos alias?</p>
                <p class="service_sub_text">Вартість:</p>
                <div class="service_price_wrapepr">

                    <div class="service_price_box">
                        <p class="service_price_name">Малий</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Середній</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Бізнес</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Преміум</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                    <div class="service_price_box">
                        <p class="service_price_name">Позашляховик</p>
                        <p class="service_price">1 000 грн</p>
                    </div>
                </div>
                <a href="https://t.me/<?php echo $telegram; ?>" class="actions_modal_btn btn-w-50"
                    target="_blank">Замовити</a>
            </div>
        </div>
    </div>
</section>




<!-- ============================= -->
<!--  <section class="section_service_info">
<div class="container">
    <ul class="service_info_ul">
        <li class="service_info_list">Малий - Пояснення цій послузі...</li>
        <li class="service_info_list">Середній - Пояснення цій послузі...</li>
        <li class="service_info_list">Бізнес - Пояснення цій послузі...</li>
        <li class="service_info_list">Позашляховик - Пояснення цій послузі...</li>
    </ul>
</div>
</section>
-->

<section class="section_why_us">
    <div class="container">
        <div class="why_us_wrapper">
            <img class="why_us_img" src="<?php bloginfo('template_url'); ?>/assets/images/why-us.jpeg" alt="">

            <div class="why_us_info_wrapper">
                <div class="why_us_up_box">
                    <p class="why_us_up_title">Чому ми?</p>
                    <p class="why_us_up_text">Детейлінгова студія яка працює з 2013 року</p>
                </div>
                <div class="why_us_info_box">
                    <svg width="65px" height="65px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" fill="#000000" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"
                            stroke-width="12.288"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M512 505.6c-108.8 0-204.8-89.6-204.8-204.8S396.8 102.4 512 102.4c108.8 0 204.8 89.6 204.8 204.8S620.8 505.6 512 505.6z m0-358.4c-83.2 0-153.6 70.4-153.6 153.6s64 153.6 153.6 153.6 153.6-70.4 153.6-153.6S595.2 147.2 512 147.2z"
                                fill="#FFFEFE"></path>
                            <path d="M832 864c0-211.2-147.2-377.6-326.4-377.6s-326.4 166.4-326.4 377.6H832z"
                                fill="#17181A">
                            </path>
                            <path
                                d="M832 889.6H147.2v-25.6c0-224 160-403.2 352-403.2s352 179.2 352 396.8v25.6l-19.2 6.4z m-633.6-51.2h608C800 659.2 665.6 512 505.6 512c-166.4 0-294.4 147.2-307.2 326.4zM710.4 499.2c-12.8 0-25.6-12.8-25.6-25.6s12.8-25.6 25.6-25.6c64 0 121.6-51.2 121.6-121.6 0-51.2-32-96-83.2-115.2-12.8-6.4-19.2-19.2-12.8-32 6.4-12.8 19.2-19.2 32-12.8 70.4 19.2 115.2 83.2 115.2 160-6.4 96-83.2 172.8-172.8 172.8z"
                                fill="#FFFEFE"></path>
                            <path
                                d="M966.4 806.4h-57.6c-12.8 0-25.6-12.8-25.6-25.6s12.8-25.6 25.6-25.6h32c-12.8-140.8-115.2-249.6-236.8-249.6-12.8 0-25.6-12.8-25.6-25.6s12.8-25.6 25.6-25.6c160 0 288 147.2 288 326.4v25.6h-25.6z"
                                fill="#FFFEFE"></path>
                            <path
                                d="M300.8 499.2c-6.4 0-6.4 0 0 0-44.8 0-89.6-12.8-121.6-44.8-32-32-44.8-76.8-44.8-121.6 0-70.4 44.8-134.4 115.2-160 12.8-6.4 25.6 0 32 12.8 6.4 12.8 0 25.6-12.8 32-57.6 19.2-89.6 64-89.6 115.2 0 32 12.8 64 32 83.2 19.2 25.6 51.2 32 83.2 38.4 19.2 0 25.6 12.8 25.6 25.6s-6.4 19.2-19.2 19.2z"
                                fill="#FFFEFE"></path>
                            <path
                                d="M89.6 806.4H12.8v-25.6c0-179.2 128-320 288-320 12.8 0 25.6 12.8 25.6 25.6s-12.8 25.6-25.6 25.6C179.2 512 76.8 620.8 64 761.6h32c12.8 0 25.6 12.8 25.6 25.6-6.4 6.4-12.8 19.2-32 19.2z"
                                fill="#FFFEFE"></path>
                        </g>
                    </svg>
                    <p class="why_us_title">кожен клієнт особливий</p>
                    <p class="why_us_text">Індивідуальний підхід до кожного клієнта</p>
                </div>
                <div class="why_us_info_box">
                    <svg fill="#FFFEFE" height="200px" width="200px" version="1.1" id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 441.685 441.685" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M429.179,375.509l-104.78-104.78l-1.568-7.857c-1.792-8.979-8.349-16.208-17.112-18.863 c-8.765-2.655-18.229-0.283-24.704,6.192l-9.629,9.629l-29.289-29.289l90.885-90.885c7.746-7.747,17.535-13.674,28.308-17.142 c9.454-3.043,18.182-8.383,25.241-15.443c12.195-12.194,18.761-28.408,18.489-45.654c-0.271-17.246-7.36-33.259-19.96-45.089 c-2.26-2.121-5.45-2.931-8.45-2.142c-2.998,0.789-5.378,3.064-6.302,6.023l-10.225,32.774c-1.189,3.812-3.791,6.932-7.327,8.787 c-3.536,1.854-7.581,2.221-11.395,1.031c-3.812-1.189-6.932-3.791-8.786-7.327c-1.854-3.536-2.221-7.583-1.032-11.394l10.107-32.399 c0.929-2.978,0.25-6.225-1.796-8.581s-5.165-3.485-8.243-2.982c-11.704,1.907-22.555,7.016-31.381,14.775 c-15.525,13.65-23.428,34.041-21.139,54.544c2.282,20.44-5.01,40.765-20.008,55.762l-61.164,61.165L71.738,60.172l1.896-26.397 c0.248-3.453-1.506-6.741-4.512-8.458L30.979,3.52c-3.525-2.014-7.959-1.42-10.83,1.45L3.803,21.317 c-2.87,2.87-3.463,7.305-1.45,10.829l21.796,38.143c1.61,2.817,4.6,4.535,7.812,4.535c0.214,0,0.43-0.008,0.646-0.023l26.407-1.896 l126.178,126.188l-90.881,90.881c-7.747,7.747-17.536,13.674-28.309,17.142c-9.453,3.043-18.182,8.383-25.241,15.442 c-12.195,12.195-18.761,28.409-18.489,45.655s7.36,33.259,19.96,45.088c2.26,2.122,5.451,2.932,8.45,2.142 c2.998-0.789,5.378-3.064,6.302-6.023l10.225-32.774c2.455-7.868,10.852-12.277,18.722-9.817c3.812,1.189,6.932,3.791,8.786,7.327 c1.854,3.536,2.221,7.583,1.032,11.394l-10.107,32.399c-0.929,2.978-0.25,6.225,1.796,8.581c1.724,1.986,4.212,3.1,6.795,3.1 c0.48,0,0.965-0.039,1.448-0.117c11.704-1.907,22.555-7.017,31.38-14.775c15.526-13.65,23.429-34.041,21.139-54.544 c-2.282-20.44,5.01-40.765,20.008-55.762l61.161-61.161l29.289,29.29l-9.625,9.625c-6.475,6.475-8.848,15.941-6.192,24.704 c2.655,8.763,9.883,15.32,18.862,17.111l7.857,1.568l104.78,104.78c7.56,7.56,17.487,11.34,27.418,11.339 c9.928-0.001,19.86-3.78,27.418-11.339C444.297,415.228,444.297,390.628,429.179,375.509z M54.047,55.214l-17.08,1.227 L21.392,29.184l6.625-6.625l27.257,15.576L54.047,55.214z M155.481,291.701c-18.888,18.888-28.062,44.579-25.169,70.487 c1.637,14.667-4.021,29.256-15.135,39.028c-2.182,1.918-4.539,3.609-7.037,5.056l4.793-15.364c2.621-8.401,1.813-17.32-2.274-25.115 c-4.087-7.794-10.965-13.53-19.367-16.15c-3.239-1.01-6.553-1.511-9.852-1.511c-5.258,0-10.474,1.273-15.263,3.785 c-7.794,4.087-13.53,10.965-16.151,19.367L44.999,387.4c-2.989-5.972-4.619-12.585-4.728-19.472 c-0.194-12.332,4.5-23.924,13.219-32.643c5.121-5.121,11.187-8.834,18.029-11.036c13.48-4.339,25.764-11.79,35.521-21.548 l164.773-164.773c18.888-18.888,28.062-44.579,25.169-70.487c-1.637-14.666,4.021-29.256,15.135-39.029 c2.182-1.918,4.539-3.609,7.037-5.056L314.36,38.72c-2.621,8.401-1.813,17.32,2.274,25.115c4.087,7.794,10.965,13.53,19.367,16.15 s17.321,1.813,25.115-2.274c7.794-4.087,13.53-10.965,16.151-19.367l5.028-16.116c2.989,5.972,4.62,12.585,4.728,19.473 c0.194,12.331-4.5,23.924-13.219,32.643c-5.121,5.121-11.187,8.833-18.029,11.036c-13.481,4.339-25.764,11.791-35.521,21.548 L155.481,291.701z M265.226,306.346c-3.593-0.717-4.804-3.511-5.158-4.679s-0.897-4.165,1.694-6.756l31.981-31.981 c1.585-1.585,3.322-1.997,4.699-1.997c0.875,0,1.604,0.166,2.058,0.304c1.168,0.354,3.963,1.565,4.68,5.159l1.16,5.811l-35.301,35.3 L265.226,306.346L265.226,306.346z M416.451,417.618c-8.101,8.1-21.281,8.099-29.381,0L286.725,317.273l29.382-29.381 l100.345,100.345c3.924,3.924,6.084,9.141,6.084,14.69S420.375,413.694,416.451,417.618z">
                            </path>
                        </g>
                    </svg>
                    <p class="why_us_title">найкраще обладнання</p>
                    <p class="why_us_text">Ми постійно інвестуємо у новітнє обладнання</p>
                </div>
                <div class="why_us_info_box">
                    <svg fill="#FFFEFE" width="64px" height="64px" viewBox="0 0 64 64"
                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g id="ICON">
                                <path
                                    d="M35.596,48.159l-2.631,9.822c-0.114,0.424 0.063,0.873 0.435,1.106c0.372,0.233 0.853,0.196 1.185,-0.091l3.731,-3.231c0,0 1.616,4.663 1.616,4.663c0.143,0.411 0.535,0.683 0.97,0.673c0.434,-0.011 0.813,-0.301 0.935,-0.719l1.673,-5.708l1.652,5.705c0.121,0.418 0.499,0.71 0.935,0.721c0.435,0.012 0.828,-0.26 0.971,-0.672l1.616,-4.663c-0,0 3.731,3.231 3.731,3.231c0.332,0.287 0.813,0.324 1.185,0.091c0.372,-0.233 0.549,-0.682 0.435,-1.106l-2.631,-9.822c1.919,-1.981 3.101,-4.68 3.101,-7.654c-0,-6.074 -4.931,-11.005 -11.005,-11.005c-6.074,-0 -11.005,4.931 -11.005,11.005c0,2.974 1.182,5.673 3.101,7.654Zm1.689,1.426l-1.545,5.765l2.383,-2.063c0.251,-0.217 0.593,-0.296 0.914,-0.21c0.32,0.086 0.577,0.325 0.686,0.639c-0,-0 1.075,3.101 1.075,3.101l1.572,-5.365c-1.874,-0.191 -3.609,-0.854 -5.085,-1.867Zm12.43,0c-1.468,1.008 -3.194,1.669 -5.056,1.864l1.549,5.352l1.069,-3.085c0.109,-0.314 0.366,-0.553 0.686,-0.639c0.321,-0.086 0.663,-0.007 0.914,0.21c-0,0 2.383,2.063 2.383,2.063l-1.545,-5.765Zm-46.715,-15.585l0,15c-0,0.796 0.316,1.559 0.879,2.121c0.562,0.563 1.325,0.879 2.121,0.879c6.483,-0 26.5,-0 26.5,-0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1c0,-0 -20.017,-0 -26.5,-0c-0.265,0 -0.52,-0.105 -0.707,-0.293c-0.188,-0.187 -0.293,-0.442 -0.293,-0.707l0,-15c0,-0.552 -0.448,-1 -1,-1c-0.552,-0 -1,0.448 -1,1Zm0,-28l0,24c0,0.552 0.448,1 1,1c0.552,-0 1,-0.448 1,-1l0,-18l30,-0c0.552,-0 1,-0.448 1,-1c-0,-0.552 -0.448,-1 -1,-1l-30,-0c0,0 -0,-4 -0,-4c0,-0.552 0.448,-1 1,-1c0,0 51.5,0 51.5,0c0.552,0 1,0.448 1,1c0,0 0,4 0,4c0,-0 -19.5,-0 -19.5,-0c-0.552,-0 -1,0.448 -1,1c-0,0.552 0.448,1 1,1l19.5,-0l-0,37c-0,0.552 -0.448,1 -1,1l-2.5,-0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1l2.5,-0c1.657,0 3,-1.343 3,-3l0,-43c-0,-1.657 -1.343,-3 -3,-3l-51.5,0c-1.657,0 -3,1.343 -3,3Zm40.5,25.5c4.97,0 9.005,4.035 9.005,9.005c-0,4.97 -4.035,9.005 -9.005,9.005c-4.97,-0 -9.005,-4.035 -9.005,-9.005c0,-4.97 4.035,-9.005 9.005,-9.005Zm-14.5,13.5l-0,-2c-0,-1.657 -1.343,-3 -3,-3l-14,-0c-1.657,-0 -3,1.343 -3,3l0,2c0,1.657 1.343,3 3,3l14,0c1.657,0 3,-1.343 3,-3Zm15.374,-12.127c-0.176,-0.317 -0.511,-0.514 -0.874,-0.514c-0.363,0 -0.698,0.197 -0.874,0.514l-1.979,3.559c-0,0 -3.997,0.783 -3.997,0.783c-0.356,0.07 -0.646,0.327 -0.758,0.672c-0.113,0.346 -0.029,0.724 0.218,0.99l2.774,2.982c-0,0 -0.491,4.043 -0.491,4.043c-0.044,0.36 0.111,0.716 0.405,0.93c0.293,0.213 0.68,0.25 1.009,0.097l3.693,-1.716c0,0 3.693,1.716 3.693,1.716c0.329,0.153 0.716,0.116 1.009,-0.097c0.294,-0.214 0.449,-0.57 0.405,-0.93l-0.491,-4.043c0,0 2.774,-2.982 2.774,-2.982c0.247,-0.266 0.331,-0.644 0.218,-0.99c-0.112,-0.345 -0.402,-0.602 -0.758,-0.672l-3.997,-0.783c0,0 -1.979,-3.559 -1.979,-3.559Zm-17.374,10.127l-0,2c-0,0.552 -0.448,1 -1,1l-14,0c-0.552,0 -1,-0.448 -1,-1c-0,-0 0,-2 0,-2c0,-0.552 0.448,-1 1,-1l14,-0c0.552,-0 1,0.448 1,1Zm16.5,-7.583l1.331,2.394c0.143,0.257 0.393,0.438 0.682,0.495l2.688,0.526c-0,0 -1.866,2.006 -1.866,2.006c-0.2,0.215 -0.295,0.509 -0.26,0.801l0.33,2.719c0,-0 -2.484,-1.154 -2.484,-1.154c-0.267,-0.124 -0.575,-0.124 -0.842,-0l-2.484,1.154c-0,-0 0.33,-2.719 0.33,-2.719c0.035,-0.292 -0.06,-0.586 -0.26,-0.801l-1.866,-2.006c0,0 2.688,-0.526 2.688,-0.526c0.289,-0.057 0.539,-0.238 0.682,-0.495l1.331,-2.394Zm-33.5,1.583l18.5,-0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-18.5,-0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm0,-4l21,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-21,0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm0,-4l23,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-23,0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm0,-4l43,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-43,0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm0,-4l43,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-43,-0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1Zm9,-4l25.5,0c0.552,-0 1,-0.448 1,-1c-0,-0.552 -0.448,-1 -1,-1l-25.5,0c-0.552,-0 -1,0.448 -1,1c-0,0.552 0.448,1 1,1Zm-11,-10.5c0.552,-0 1,0.448 1,1c0,0.552 -0.448,1 -1,1c-0.552,-0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1Zm4,-0c0.552,-0 1,0.448 1,1c0,0.552 -0.448,1 -1,1c-0.552,-0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1Zm4,-0c0.552,-0 1,0.448 1,1c0,0.552 -0.448,1 -1,1c-0.552,-0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1Z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <p class="why_us_title">Професійні стандарти</p>
                    <p class="why_us_text">Наші співробітники регулярно проходять атестацію та проходять
                        курси
                        підвищення кваліфікації</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section_special_offers">
    <div class="container">
        <p class="special_offers_title">Спецпропозиції</p>
        <p class="special_offers_text">Наша команда представляє не лише найкращий сервіс, але
            та дбати про гаманці наших клієнтів</p>
        <div class="special_offers_wrapper">
            <button type="button" class="special_offers_box" data-bs-toggle="modal" data-bs-target="#modal1">
                <img class="special_offers_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-14.jpg"
                    alt="">
                <p class="special_offers_name">Хімчистка на вихідні – знижка 10%</p>
                <p class="special_offers_data">2025</p>
            </button>
            <button type="button" class="special_offers_box" data-bs-toggle="modal" data-bs-target="#modal2">
                <img class="special_offers_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-10.jpg"
                    alt="">
                <p class="special_offers_name">Кожній хімчисті авто, озонація салону в подарунок</p>
                <p class="special_offers_data">2025</p>
            </button>
            <button type="button" class="special_offers_box" data-bs-toggle="modal" data-bs-target="#modal3">
                <img class="special_offers_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-4.jpeg"
                    alt="">
                <p class="special_offers_name">До кожного полірування авто твердий віск у подарунок</p>
                <p class="special_offers_data">2025</p>
            </button>
            <button type="button" class="special_offers_box" data-bs-toggle="modal" data-bs-target="#modal4">
                <img class="special_offers_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-8.jpg"
                    alt="">
                <p class="special_offers_name">До кожної послуги "керамічне покриття", озонація та антидощ
                    на
                    скло у
                    подарунок</p>
                <p class="special_offers_data">2025</p>
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
                    10%
                </h5>

                <button type="button" class="btn_close_offcanvas text-reset" data-bs-dismiss="modal" aria-label="Close">
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
                    освіжити
                    своє
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
                <a class="actions_modal_btn" href="https://t.me/<?php echo $telegram; ?>">Замовити</a>

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

                <button type="button" class="btn_close_offcanvas text-reset" data-bs-dismiss="modal" aria-label="Close">
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
                    озон,
                    який
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
                <a class="actions_modal_btn" href="https://t.me/<?php echo $telegram; ?>">Замовити</a>

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

                <button type="button" class="btn_close_offcanvas text-reset" data-bs-dismiss="modal" aria-label="Close">
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
                    рівні,
                    а
                    безкоштовний віск стане прекрасним доповненням до вашого догляду за автомобілем.</p>

                <p class="actions_modal_text">Не пропустіть цю чудову можливість! Записуйтеся на полірування
                    вже
                    сьогодні і надайте своєму автомобілю неперевершений вигляд!</p>

                <p class="actions_modal_text">Чекаємо вас у нашому сервісі! </p>

            </div>
            <div class="modal-footer">
                <a class="actions_modal_btn" href="https://t.me/<?php echo $telegram; ?>">Замовити</a>

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

                <button type="button" class="btn_close_offcanvas text-reset" data-bs-dismiss="modal" aria-label="Close">
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
                <img class="actions_modal_img" src="<?php bloginfo('template_url'); ?>/assets/images/serv-8.jpg" alt="">



                <p class="actions_modal_text">Подаруйте своєму автомобілю бездоганний вигляд та надійний
                    захист!
                    Замовляючи послугу керамічного покриття, отримайте озонацію та антидощ на скло в
                    подарунок!
                </p>

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
                <a class="actions_modal_btn" href="https://t.me/<?php echo $telegram; ?>">Замовити</a>

            </div>
        </div>
    </div>
</div>



</main>


<?php get_footer(); ?>