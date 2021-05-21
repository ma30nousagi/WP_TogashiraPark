<footer class="footer">
            <div class="footer__wrapper">
                <div class="footer__inner">
                    <nav class="footer__menu">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="<?php echo home_url(); ?>" class="footer__link">ホーム</a></li>
                            <li class="footer__item"><a href="<?php echo get_post_type_archive_link('news'); ?>" class="footer__link">お知らせ</a></li>
                            <li class="footer__item"><a href="<?php echo home_url(); ?>" class="footer__link">活動内容</a></li>
                            <li class="footer__item"><a href="<?php echo get_post_type_archive_link('album'); ?>" class="footer__link">アルバム</a></li>
                            <li class="footer__item"><a href="<?php echo get_page_link(33); ?>" class="footer__link">お問い合わせ</a></li>
                        </ul>
                    </nav>
                    <div class="footer__sns">
                        <ul class="footer__sns-list">
                            <li class="footer__sns-item"><a href="#" class="footer__sns-link"><i class="fab fa-line"></i></a></li>
                            <li class="footer__sns-item"><a href="#" class="footer__sns-link"><i class="fab fa-twitter"></i></a></li>
                            <li class="footer__sns-item"><a href="#" class="footer__sns-link"><i class="fab fa-instagram"></i></a></li>
                            <li class="footer__sns-item"><a href="#" class="footer__sns-link"><i class="fab fa-facebook"></i></a></li>
                        </ul>
                    </div>
                    <small lang="en">&copy;Togashira Park by SocketWEB 2021</small>
                </div>
            </div>
        </footer>
        <div class="page-top">
            <a href="." class="page-top__link">
                <i class="fas fa-arrow-up" aria-hidden="true"></i>
            </a>
        </div>
    </div><!-- /.wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.4/swiper-bundle.min.js" integrity="sha512-hQQhpacNvYwkN+PyMQghLPCql/6OQfWNKVUkpW0KgCB5XjqtIkxm8UYny+gTjvIfvE/CrqrKEUOLotbHBFs/0Q==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll-polyfill.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/function.js"></script>
        