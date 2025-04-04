<?php
    global $phone, $phone_show, $instagram, $telegram, $viber, $address_name, $address_link, $mail;
?>

<footer class="footer">
    <div class="container">
        <div class="footer_wrapper">
            <ul class="footer_col">
                <li class="footer_title"><a href="<?php echo get_permalink(get_page_by_title('home')->ID); ?>"><img
                            src="<?php bloginfo('template_url'); ?>/assets/images/logo-service.png" alt=""></a>
                </li>
                <li class="footer_text">Detailing car service — це спеціалізований сервіс, що пропонує
                    комплексний догляд за автомобілями, спрямований на відновлення їх естетичного
                    вигляду і забезпечення довговічності.</li>
            </ul>
            <ul class="footer_col">
                <li class="footer_title">Контакти</li>
                <li class="footer_item"><a class="footer_link" href="<?php echo $address_link; ?>"
                        target="_blank"><?php echo $address_name; ?></a></li>
                <li class="footer_item"><a class="footer_link"
                        href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
                </li>
                <li class="footer_item"><a class="footer_link footer_link_tel"
                        href="tel:<?php echo $phone; ?>"><?php echo $phone_show; ?></a></li>
                <li class="footer_title footer_title_mr">Графік роботи:</li>
                <li class="footer_item foote_item_time">Пн-Пт: <span>09:00-20:00</span></li>
                <li class="footer_item foote_item_time">Сб: <span>09:00-15:00</span></li>
                <li class="footer_item foote_item_time">Нд: <span>Вихідний</span></li>
            </ul>
            <ul class="footer_col">
                <li class="footer_title">Посилання</li>
                <li class="footer_item"><a class="footer_link"
                        href="<?php echo get_permalink(get_page_by_title('home')->ID); ?>">Головна</a></li>
                <li class="footer_item"><a class="footer_link"
                        href="<?php echo get_permalink(get_page_by_title('car-body')->ID); ?>">Послуги</a>
                </li>
                <li class="footer_item"><a class="footer_link"
                        href="<?php echo get_permalink(get_page_by_title('price')->ID); ?>">Прайси</a>
                </li>
                <li class="footer_item"><a class="footer_link"
                        href="<?php echo get_permalink(get_page_by_title('gallery')->ID); ?>">Галерея</a>
                </li>
                <li class="footer_item"><a class="footer_link"
                        href="<?php echo get_permalink(get_page_by_title('about')->ID); ?>">Про студію</a></li>
                <li class="footer_item"><a class="footer_link"
                        href="<?php echo get_permalink(get_page_by_title('actions')->ID); ?>">Спецпропозиції</a></li>
                <li class="footer_item"><a class="footer_link"
                        href="<?php echo get_permalink(get_page_by_title('contact')->ID); ?>">Контакти</a></li>
            </ul>
            <ul class="footer_col">
                <li class="footer_title">Ми у соцмережах</li>
                <div class="footer_social_item_wrapper">
                    <li class="footer_item footer_social_item"><a class="footer_social" href="<?php echo $instagram; ?>"
                            target="_blank">
                            <svg enable-background="new 0 0 128 128" id="Social_Icons" version="1.1"
                                viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="_x37__stroke">
                                    <g id="Instagram_1_">
                                        <rect clip-rule="evenodd" fill="none" fill-rule="evenodd" height="128"
                                            width="128" />
                                        <radialGradient cx="19.1111" cy="128.4444" gradientUnits="userSpaceOnUse"
                                            id="Instagram_2_" r="163.5519">
                                            <stop offset="0" style="stop-color:#FFB140" />
                                            <stop offset="0.2559" style="stop-color:#FF5445" />
                                            <stop offset="0.599" style="stop-color:#FC2B82" />
                                            <stop offset="1" style="stop-color:#8E40B7" />
                                        </radialGradient>
                                        <path clip-rule="evenodd"
                                            d="M105.843,29.837    c0,4.242-3.439,7.68-7.68,7.68c-4.241,0-7.68-3.438-7.68-7.68c0-4.242,3.439-7.68,7.68-7.68    C102.405,22.157,105.843,25.595,105.843,29.837z M64,85.333c-11.782,0-21.333-9.551-21.333-21.333    c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333C85.333,75.782,75.782,85.333,64,85.333z M64,31.135    c-18.151,0-32.865,14.714-32.865,32.865c0,18.151,14.714,32.865,32.865,32.865c18.151,0,32.865-14.714,32.865-32.865    C96.865,45.849,82.151,31.135,64,31.135z M64,11.532c17.089,0,19.113,0.065,25.861,0.373c6.24,0.285,9.629,1.327,11.884,2.204    c2.987,1.161,5.119,2.548,7.359,4.788c2.24,2.239,3.627,4.371,4.788,7.359c0.876,2.255,1.919,5.644,2.204,11.884    c0.308,6.749,0.373,8.773,0.373,25.862c0,17.089-0.065,19.113-0.373,25.861c-0.285,6.24-1.327,9.629-2.204,11.884    c-1.161,2.987-2.548,5.119-4.788,7.359c-2.239,2.24-4.371,3.627-7.359,4.788c-2.255,0.876-5.644,1.919-11.884,2.204    c-6.748,0.308-8.772,0.373-25.861,0.373c-17.09,0-19.114-0.065-25.862-0.373c-6.24-0.285-9.629-1.327-11.884-2.204    c-2.987-1.161-5.119-2.548-7.359-4.788c-2.239-2.239-3.627-4.371-4.788-7.359c-0.876-2.255-1.919-5.644-2.204-11.884    c-0.308-6.749-0.373-8.773-0.373-25.861c0-17.089,0.065-19.113,0.373-25.862c0.285-6.24,1.327-9.629,2.204-11.884    c1.161-2.987,2.548-5.119,4.788-7.359c2.239-2.24,4.371-3.627,7.359-4.788c2.255-0.876,5.644-1.919,11.884-2.204    C44.887,11.597,46.911,11.532,64,11.532z M64,0C46.619,0,44.439,0.074,37.613,0.385C30.801,0.696,26.148,1.778,22.078,3.36    c-4.209,1.635-7.778,3.824-11.336,7.382C7.184,14.3,4.995,17.869,3.36,22.078c-1.582,4.071-2.664,8.723-2.975,15.535    C0.074,44.439,0,46.619,0,64c0,17.381,0.074,19.561,0.385,26.387c0.311,6.812,1.393,11.464,2.975,15.535    c1.635,4.209,3.824,7.778,7.382,11.336c3.558,3.558,7.127,5.746,11.336,7.382c4.071,1.582,8.723,2.664,15.535,2.975    C44.439,127.926,46.619,128,64,128c17.381,0,19.561-0.074,26.387-0.385c6.812-0.311,11.464-1.393,15.535-2.975    c4.209-1.636,7.778-3.824,11.336-7.382c3.558-3.558,5.746-7.127,7.382-11.336c1.582-4.071,2.664-8.723,2.975-15.535    C127.926,83.561,128,81.381,128,64c0-17.381-0.074-19.561-0.385-26.387c-0.311-6.812-1.393-11.464-2.975-15.535    c-1.636-4.209-3.824-7.778-7.382-11.336c-3.558-3.558-7.127-5.746-11.336-7.382c-4.071-1.582-8.723-2.664-15.535-2.975    C83.561,0.074,81.381,0,64,0z"
                                            fill="url(#Instagram_2_)" fill-rule="evenodd" id="Instagram" />
                                    </g>
                                </g>
                            </svg>
                        </a></li>
                    <li class="footer_item footer_social_item"><a class="footer_social"
                            href="https://t.me/<?php echo $telegram; ?>" target="_blank"><svg width="64px" height="64px"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                </g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M23.1117 4.49449C23.4296 2.94472 21.9074 1.65683 20.4317 2.227L2.3425 9.21601C0.694517 9.85273 0.621087 12.1572 2.22518 12.8975L6.1645 14.7157L8.03849 21.2746C8.13583 21.6153 8.40618 21.8791 8.74917 21.968C9.09216 22.0568 9.45658 21.9576 9.70712 21.707L12.5938 18.8203L16.6375 21.8531C17.8113 22.7334 19.5019 22.0922 19.7967 20.6549L23.1117 4.49449ZM3.0633 11.0816L21.1525 4.0926L17.8375 20.2531L13.1 16.6999C12.7019 16.4013 12.1448 16.4409 11.7929 16.7928L10.5565 18.0292L10.928 15.9861L18.2071 8.70703C18.5614 8.35278 18.5988 7.79106 18.2947 7.39293C17.9906 6.99479 17.4389 6.88312 17.0039 7.13168L6.95124 12.876L3.0633 11.0816ZM8.17695 14.4791L8.78333 16.6015L9.01614 15.321C9.05253 15.1209 9.14908 14.9366 9.29291 14.7928L11.5128 12.573L8.17695 14.4791Z"
                                        fill="#29A9EA"></path>
                                </g>
                            </svg></a></li>
                    <li class="footer_item footer_social_item"><a class="footer_social"
                            href="viber://chat?number=<?php echo $viber; ?>" target="_blank">
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
                            </svg></a></li>
                </div>
            </ul>
        </div>
        <p class="footer_copyright">Detailing car service © 2025. Всі права захищені.</p>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>