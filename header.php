<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="とがしら公園のみなさまの共有サイトです。イベント時の写真やお知らせなど掲載しています。">
    <?php get_template_part('_inc/title_info'); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/style.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />
    <!-- favicon -->
	<!-- <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/m_favicon.ico"> -->
	<!-- normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
    <!-- font awesome CSS -->
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	<!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600;700&family=Noto+Sans+JP&family=Varela+Round&family=Yusei+Magic&display=swap" rel="stylesheet" />
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.4/swiper-bundle.min.css" integrity="sha512-Uny/q0WcgHTmPEwEnudIstSn9ITJ5A4M69WwQ8kii9QmCKfIgwLZQjEo7W0O4yZpamS29cJP0LGrPqFBEzINIw==" crossorigin="anonymous" />
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body>
    <div id="splash">
        <div id="splash-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></div>
    </div><!--/splash-->
    <div class="splashbg"></div><!---画面遷移用-->
    <div class="wrapper loader">
        <header class="header" id="header">
            <div class="header__logo">
                <h1 class="logo">
                    <a href="<?php echo home_url(); ?>" class="logo__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="" class="logo__img" />
                        <span class="logo__title">とがしらPARK</span>
                    </a>
                </h1>
            </div>
            <nav class="global-nav sideGnav">
                <ul class="global-nav__list">
                    <li class="global-nav__item"><a href="<?php echo home_url(); ?>" class="global-nav__link">ホーム</a></li>
                    <li class="global-nav__item"><a href="<?php echo get_post_type_archive_link('news'); ?>" class="global-nav__link">お知らせ</a></li>
                    <li class="global-nav__item"><a href="<?php echo home_url(); ?>" class="global-nav__link">活動内容</a></li>
                    <li class="global-nav__item"><a href="<?php echo get_post_type_archive_link('album'); ?>" class="global-nav__link">アルバム</a></li>
                    <li class="global-nav__item"><a href="<?php echo home_url(); ?>" class="global-nav__link">お問い合わせ</a></li>
                </ul>
            </nav>
            <div class="openbtn"><span></span><span></span><span></span></div>
        </header><!-- /.header -->