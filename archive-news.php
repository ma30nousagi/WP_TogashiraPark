<?php get_header(); ?>
        <main id="home" class="main">
            <article>
                <div class="main__Visual">
                    <div class="main__Visual-img__news">
                        <div class="main__Visual-inner inner__xl albumBack">
                        </div>
                    </div>
                </div><!-- /.mainVisual -->
                
                 <!-- パンくずリスト -->
                 <?php get_template_part('_inc/breadcrumbs'); ?>
                <!-- /.breadcrumb -->

                <?php get_template_part('desc'); ?><!-- /.desc -->

                <section class="subnews">
                    <div class="subnews__inner inner">
                        <div class="subnews__heading">
                            <h2 class="subnews__title" data-en="Information">
                                お知らせ
                            </h2>
                        </div>
                        <div class="subnews__container">
                            <ul class="subnews__contents">

                                <?php if(have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                
                                <li class="subnews__list">
                                    <div class="subnews__tag"><?php echo get_field('news_tag'); ?></div>
                                    <div class="subnews__date"><?php echo get_field('news_date'); ?></div>
                                    <div class="subnews__text"><a href="<?php the_parmalink(); ?>"><?php echo the_title(); ?></a></div>
                                </li>
                                <!-- <li class="subnews__list">
                                    <div class="subnews__tag">BBQ</div>
                                    <div class="subnews__date">2021.05.01</div>
                                    <div class="subnews__text"><a href="news-20210501.html">バーベキューのアンケート結果のお知らせ</a></div>
                                </li>
                                <li class="subnews__list">
                                    <div class="subnews__tag">BBQ</div>
                                    <div class="subnews__date">2021.04.30</div>
                                    <div class="subnews__text"><a href="news-20210430.html">バーベキュー開催のご案内</a></div>
                                </li>
                                <li class="subnews__list">
                                    <div class="subnews__tag">お知らせ</div>
                                    <div class="subnews__date">2021.04.01</div>
                                    <div class="subnews__text">ホームページが完成しました！</div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </section>
                <?php get_template_part('contact'); ?><!-- /.contact -->
            </article>
        </main>
        <?php get_footer(); ?>
</body>
</html>