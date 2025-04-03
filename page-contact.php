<?php
/*
Template Name: contact

*/
?>

<?php
global $phone, $phone_show, $instagram, $telegram, $viber, $address_name, $address_link, $mail;
?>



<?php get_header(); ?>

<main class="main">

    <section class="main_banner contact_banner">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/contact-bg.jpg" alt="">
        <!-- <img src="./assets/images/20789.JPG" alt=""> -->
        <div class="main_banner_info">
            <!-- <h1 class="main_banner_title"><span>D</span>etailing  <span>C</span>ar <span>S</span>ervice</h1>-->

            <p class="main_banner_text">Контакти</p>
            <!--  <p class="main_banner_bottom_text">Ми прагнемо завоювати вашу довіру, надаючи досвід та ціну, яку ви
                            очікуєте.</p>  -->
        </div>
    </section>


    <section class="section_contact">
        <div class="container">
            <div class="contact_wrapper">
                <div class="contact_info-body">
                    <p class="offcanvas_info_title">Контакти</p>
                    <a class="offcanvas_info_link" href="tel:<?php echo $phone; ?>"><?php echo $phone_show; ?></a>
                    <a class="offcanvas_info_link" href="<?php echo $address_link; ?>"
                        target="_blank"><?php echo $address_name; ?></a>
                    <p class="offcanvas_info_title">Графік роботи</p>
                    <p class="offcanvas_info_text">Пн-Пт: <span>09:00-20:00</span></p>
                    <p class="offcanvas_info_text">Сб: <span>09:00-15:00</span></p>
                    <p class="offcanvas_info_text">Нд: <span>Вихідний</span></p>

                    <div class="offcanvas_info_wrapper contact_info_box">
                        <a href="<?php echo $instagram; ?>" class="offcanvas_info_box">
                            <svg enable-background="new 0 0 128 128" id="Social_Icons" version="1.1"
                                viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="_x37__stroke">
                                    <g id="Instagram_1_">
                                        <rect clip-rule="evenodd" fill="none" fill-rule="evenodd" height="128"
                                            width="128"></rect>
                                        <radialGradient cx="19.1111" cy="128.4444" gradientUnits="userSpaceOnUse"
                                            id="Instagram_2_" r="163.5519">
                                            <stop offset="0" style="stop-color:#FFB140"></stop>
                                            <stop offset="0.2559" style="stop-color:#FF5445"></stop>
                                            <stop offset="0.599" style="stop-color:#FC2B82"></stop>
                                            <stop offset="1" style="stop-color:#8E40B7"></stop>
                                        </radialGradient>
                                        <path clip-rule="evenodd"
                                            d="M105.843,29.837    c0,4.242-3.439,7.68-7.68,7.68c-4.241,0-7.68-3.438-7.68-7.68c0-4.242,3.439-7.68,7.68-7.68    C102.405,22.157,105.843,25.595,105.843,29.837z M64,85.333c-11.782,0-21.333-9.551-21.333-21.333    c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333C85.333,75.782,75.782,85.333,64,85.333z M64,31.135    c-18.151,0-32.865,14.714-32.865,32.865c0,18.151,14.714,32.865,32.865,32.865c18.151,0,32.865-14.714,32.865-32.865    C96.865,45.849,82.151,31.135,64,31.135z M64,11.532c17.089,0,19.113,0.065,25.861,0.373c6.24,0.285,9.629,1.327,11.884,2.204    c2.987,1.161,5.119,2.548,7.359,4.788c2.24,2.239,3.627,4.371,4.788,7.359c0.876,2.255,1.919,5.644,2.204,11.884    c0.308,6.749,0.373,8.773,0.373,25.862c0,17.089-0.065,19.113-0.373,25.861c-0.285,6.24-1.327,9.629-2.204,11.884    c-1.161,2.987-2.548,5.119-4.788,7.359c-2.239,2.24-4.371,3.627-7.359,4.788c-2.255,0.876-5.644,1.919-11.884,2.204    c-6.748,0.308-8.772,0.373-25.861,0.373c-17.09,0-19.114-0.065-25.862-0.373c-6.24-0.285-9.629-1.327-11.884-2.204    c-2.987-1.161-5.119-2.548-7.359-4.788c-2.239-2.239-3.627-4.371-4.788-7.359c-0.876-2.255-1.919-5.644-2.204-11.884    c-0.308-6.749-0.373-8.773-0.373-25.861c0-17.089,0.065-19.113,0.373-25.862c0.285-6.24,1.327-9.629,2.204-11.884    c1.161-2.987,2.548-5.119,4.788-7.359c2.239-2.24,4.371-3.627,7.359-4.788c2.255-0.876,5.644-1.919,11.884-2.204    C44.887,11.597,46.911,11.532,64,11.532z M64,0C46.619,0,44.439,0.074,37.613,0.385C30.801,0.696,26.148,1.778,22.078,3.36    c-4.209,1.635-7.778,3.824-11.336,7.382C7.184,14.3,4.995,17.869,3.36,22.078c-1.582,4.071-2.664,8.723-2.975,15.535    C0.074,44.439,0,46.619,0,64c0,17.381,0.074,19.561,0.385,26.387c0.311,6.812,1.393,11.464,2.975,15.535    c1.635,4.209,3.824,7.778,7.382,11.336c3.558,3.558,7.127,5.746,11.336,7.382c4.071,1.582,8.723,2.664,15.535,2.975    C44.439,127.926,46.619,128,64,128c17.381,0,19.561-0.074,26.387-0.385c6.812-0.311,11.464-1.393,15.535-2.975    c4.209-1.636,7.778-3.824,11.336-7.382c3.558-3.558,5.746-7.127,7.382-11.336c1.582-4.071,2.664-8.723,2.975-15.535    C127.926,83.561,128,81.381,128,64c0-17.381-0.074-19.561-0.385-26.387c-0.311-6.812-1.393-11.464-2.975-15.535    c-1.636-4.209-3.824-7.778-7.382-11.336c-3.558-3.558-7.127-5.746-11.336-7.382c-4.071-1.582-8.723-2.664-15.535-2.975    C83.561,0.074,81.381,0,64,0z"
                                            fill="url(#Instagram_2_)" fill-rule="evenodd" id="Instagram"></path>
                                    </g>
                                </g>
                            </svg>
                            <span class="offcanvas_info_link" target="_blank">Instagram</span>
                        </a>
                        <a href="<?php echo $telegram; ?>" class="offcanvas_info_box">
                            <svg fill="#29A9EB" width="64px" height="64px" viewBox="0 0 32 32" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                </g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>telegram</title>
                                    <path
                                        d="M22.122 10.040c0.006-0 0.014-0 0.022-0 0.209 0 0.403 0.065 0.562 0.177l-0.003-0.002c0.116 0.101 0.194 0.243 0.213 0.403l0 0.003c0.020 0.122 0.031 0.262 0.031 0.405 0 0.065-0.002 0.129-0.007 0.193l0-0.009c-0.225 2.369-1.201 8.114-1.697 10.766-0.21 1.123-0.623 1.499-1.023 1.535-0.869 0.081-1.529-0.574-2.371-1.126-1.318-0.865-2.063-1.403-3.342-2.246-1.479-0.973-0.52-1.51 0.322-2.384 0.221-0.23 4.052-3.715 4.127-4.031 0.004-0.019 0.006-0.040 0.006-0.062 0-0.078-0.029-0.149-0.076-0.203l0 0c-0.052-0.034-0.117-0.053-0.185-0.053-0.045 0-0.088 0.009-0.128 0.024l0.002-0.001q-0.198 0.045-6.316 4.174c-0.445 0.351-1.007 0.573-1.619 0.599l-0.006 0c-0.867-0.105-1.654-0.298-2.401-0.573l0.074 0.024c-0.938-0.306-1.683-0.467-1.619-0.985q0.051-0.404 1.114-0.827 6.548-2.853 8.733-3.761c1.607-0.853 3.47-1.555 5.429-2.010l0.157-0.031zM15.93 1.025c-8.302 0.020-15.025 6.755-15.025 15.060 0 8.317 6.742 15.060 15.060 15.060s15.060-6.742 15.060-15.060c0-8.305-6.723-15.040-15.023-15.060h-0.002q-0.035-0-0.070 0z">
                                    </path>
                                </g>
                            </svg>
                            <span class="offcanvas_info_link" target="_blank">Telegram</span>
                        </a>
                        <a href="viber://chat?number=<?php echo $viber; ?>" class="offcanvas_info_box">
                            <svg fill="#735EF3" height="200px" width="200px" version="1.1" id="Icons"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 32 32" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                </g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M16,0C8.1,0,0,1.7,0,14c0,6.6,2.3,10.7,7,12.6v3.7c0,0.7,0.4,1.3,1,1.6C8.2,32,8.5,32,8.7,32c0.4,0,0.9-0.2,1.2-0.5l3.6-3.6 c0.8,0,1.6,0.1,2.5,0.1c7.9,0,16-1.7,16-14S23.9,0,16,0z M15.5,10.2c1.8,0,3.3,1.5,3.3,3.3c0,0.6-0.4,1-1,1s-1-0.4-1-1 c0-0.7-0.6-1.3-1.3-1.3c-0.6,0-1-0.4-1-1S14.9,10.2,15.5,10.2z M14.5,8.1c0-0.6,0.4-1,1-1c3.5,0,6.4,2.9,6.4,6.4c0,0.6-0.4,1-1,1 s-1-0.4-1-1c0-2.4-2-4.4-4.4-4.4C14.9,9.1,14.5,8.6,14.5,8.1z M22.7,20.5c-0.4,1.2-1.9,2.2-3.2,2.4C19.2,23,18.9,23,18.5,23 c-0.8,0-2-0.2-4.1-1.1c-2.4-1-4.8-3.1-6.7-5.8L7.7,16C7.1,15.1,6,13.4,6,11.6c0-2.2,1.1-3.3,1.5-3.8C8.1,7.3,8.8,7,9.6,7 c0.2,0,0.3,0,0.5,0c0.7,0,1.2,0.2,1.7,1.2l0.4,0.8c0.3,0.8,0.7,1.7,0.8,1.8c0.3,0.6,0.3,1.1,0,1.6c-0.1,0.3-0.3,0.5-0.5,0.7 c-0.1,0.2-0.2,0.3-0.3,0.3c-0.1,0.1-0.1,0.1-0.2,0.2c0.3,0.5,0.9,1.4,1.7,2.1c1.2,1.1,2.1,1.4,2.6,1.6l0,0c0.2-0.2,0.4-0.6,0.7-0.9 l0.1-0.2c0.5-0.7,1.3-0.9,2.1-0.6c0.4,0.2,2.6,1.2,2.6,1.2l0.2,0.1c0.3,0.2,0.7,0.3,0.9,0.7C23.2,18.5,22.9,19.8,22.7,20.5z M24,14.5c-0.6,0-1-0.4-1-1C23,9.4,19.6,6,15.5,6c-0.6,0-1-0.4-1-1s0.4-1,1-1c5.2,0,9.5,4.3,9.5,9.5C25,14.1,24.6,14.5,24,14.5z">
                                    </path>
                                </g>
                            </svg>
                            <span class="offcanvas_info_link" target="_blank">Viber</span>
                        </a>
                        <a class="banner_call_button contact_call_button" href="tel:<?php echo $phone; ?>">Замовити
                            дзвінок</a>
                    </div>
                </div>

                <a class="map_box" href="<?php echo $address_link; ?>" target="_blank">
                    <span class="our_services_btn map_btn">Прокласти маршрут
                        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M4 12H6.5M20 12L14 6M20 12L14 18M20 12H9.5" stroke="#FFFEFE" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </span>
                    <div class="contact_map_image">
                        <img class="contact_map_img" src="<?php bloginfo('template_url'); ?>/assets/images/map.jpg"
                            alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>