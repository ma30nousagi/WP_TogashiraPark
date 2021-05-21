<?php get_header(); ?>
        <main id="home" class="main">
            <article>
                <div class="main__Visual">
                    <div class="main__Visual-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-img.png" alt="" class="main__Visual-imgSP">
                        <div class="main__Visual-inner inner__xl">
                            <div class="main__Visual-wrap"></div>
                            <div class="scrolldown"><span>Scroll</span></div>
                        </div>
                    </div>
                </div><!-- /.mainVisual -->
                <?php get_template_part('desc'); ?><!-- desc.phpの取得 -->
                
                <?php 
                    $args = array(
                        'post_type' => 'news',//投稿タイプのスラッグ部分
                        'order' => 'DESC',
                        'posts_per_page' =>-1
                    );
                    $my_query = new WP_Query($args);
                    if($my_query->have_posts()):
                ?>
                <section class="media">
                    <div class="media__inner inner__xl">
                        <div class="media__wrap">
                            <div class="media__heading">Information</div>
                            <ul class="media__contents">
                                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                <li class="media__list">
                                    <div class="media__tag"><?php echo get_field('news_tag'); ?></div>
                                    <div class="media__date"><?php echo get_field('news_date'); ?></div>
                                    <div class="media__text"><?php if (get_field('news_url')) : ?>
                                        <a href="<?php echo get_field('news_url'); ?>"><?php echo the_title(); ?></a>
                                        <?php else: ?>
                                            <p><?php echo the_title(); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <div class="media__link">
                                <a href="<?php echo get_post_type_archive_link('news'); ?>" class="arrow__link">お知らせ一覧</a>
                            </div>
                        </div>
                    </div>
                </section>
                <?php endif; wp_reset_postdata(); ?>
                <?php 
                    $args = array(
                        'post_type' => 'album',//投稿タイプのスラッグ部分
                        'order' => 'DESC',
                        'posts_per_page' =>-1
                    );
                    $my_query = new WP_Query($args);
                    if($my_query->have_posts()):
                ?>                           
                <section class="news">
                    <div class="news__inner inner">
                        <div class="news__wrap">
                            <h2 class="news__heading">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title_white.png" alt="" class="news__heading-title">
                            </h2>
                            <div class="news__panel">
                                <ul class="news__panel-list">
                                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                    <li class="news__panel-item">
                                        <a href="<?php the_permalink(); ?>" class="news__panel-link">
                                            <span class="tag">お知らせ</span>
                                            <span class="mask">
                                            <img src="<?php echo get_field('album_img'); ?>" alt="<?php echo the_title(); ?>" alt="<?php echo the_title(); ?>" class="news__panel-img">
                                            </span>
                                            <div class="news__panel-title">
                                                <?php echo the_title(); ?>
                                            </div>
                                            <div class="news__panel-desc">
                                                <?php echo the_excerpt(); ?>
                                            </div>
                                            <div class="news__panel-date"><?php echo the_time('Y.m.d'); ?></div>
                                        </a>
                                    </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div><!-- /.news__panel -->
                            <div class="news__link">
                                <a href="<?php echo get_post_type_archive_link('album'); ?>" class="arrow__link">
                                    アルバム一覧
                                </a>
                            </div>
                        </div>
                    </div>
                </section><!-- /.news -->
                <?php endif; wp_reset_postdata(); ?>
                <section class="about" id="about">
                    <div class="about__inner inner__xl">
                        <div class="about__wrap">
                            <div class="about__heading">
                                <h2 class="about__title heading-primary">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works.png" alt="">
                                </h2>
                            </div>
                            <div class="about__img first-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people.png" alt="">
                            </div>
                            <div class="about__img second-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sports.png" alt="">
                            </div>
                            <div class="about__img third-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events.png" alt="">
                            </div>
                        </div>
                    </div>
                </section><!-- /.about -->
                <section class="album" id="album">
                    <div class="album__inner inner">
                        <div class="album__heading">
                            <h2 class="album__title">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title_green.png" alt="">
                            </h2>
                        </div>
                        <ul class="gallery">
                            <li class="album__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/album/index.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/20210504BBQ/0504BBQ_001.jpg" alt="" />
                                    <div class="album__overlay">
                                        <div class="album__overlay-inner">
                                            <h3 class="album__overlay-title">2021年5月4日</h3>
                                            <p class="album__overlay-desc">バーベキュー</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="album__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/album/index.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/20210504BBQ/0504BBQ_002.jpg" alt="" />
                                    <div class="album__overlay">
                                        <div class="album__overlay-inner">
                                            <h3 class="album__overlay-title">2021年5月4日</h3>
                                            <p class="album__overlay-desc">バーベキュー</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="album__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/album/index.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/20210504BBQ/0504BBQ_003.jpg" alt="" />
                                    <div class="album__overlay">
                                        <div class="album__overlay-inner">
                                            <h3 class="album__overlay-title">2021年5月4日</h3>
                                            <p class="album__overlay-desc">バーベキュー</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="album__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/album/index.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/20210504BBQ/0504BBQ_004.jpg" alt="" />
                                    <div class="album__overlay">
                                        <div class="album__overlay-inner">
                                            <h3 class="album__overlay-title">2021年5月4日</h3>
                                            <p class="album__overlay-desc">バーベキュー</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="album__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/album/index.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/20210504BBQ/0504BBQ_005.jpg" alt="" />
                                    <div class="album__overlay">
                                        <div class="album__overlay-inner">
                                            <h3 class="album__overlay-title">2021年5月4日</h3>
                                            <p class="album__overlay-desc">バーベキュー</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="album__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/album/index.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/20210504BBQ/0504BBQ_006.jpg" alt="" />
                                    <div class="album__overlay">
                                        <div class="album__overlay-inner">
                                            <h3 class="album__overlay-title">2021年5月4日</h3>
                                            <p class="album__overlay-desc">バーベキュー</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="album__item">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/album/index.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/20210504BBQ/0504BBQ_007.jpg" alt="" />
                                    <div class="album__overlay">
                                        <div class="album__overlay-inner">
                                            <h3 class="album__overlay-title">2021年5月4日</h3>
                                            <p class="album__overlay-desc">バーベキュー</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="album__link">
                            <a href="<?php echo get_post_type_archive_link('album'); ?>" class="arrow__link">
                                アルバム一覧
                            </a>
                        </div>
                    </div>
                </section><!-- /.album -->
                <?php get_template_part('contact'); ?><!-- /.contact -->
                <section class="faq">
                   <div class="faq__inner inner">
                       <div class="faq__heading">
                           <h2 class="faq__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq_title.png" alt=""></h2>
                       </div>
                       <ul class="accordion__area">
                           <li>
                               <section>
                                   <h3 class="accordion__title">誰でも参加できますか？</h3>
                                   <div class="accordion__box">
                                       <p>はい。どなたでもご参加いただけます。公園でお声がけください。</p>
                                   </div>
                               </section>
                           </li>
                           <li>
                                <section>
                                    <h3 class="accordion__title">仲良くしていただけますか？</h3>
                                    <div class="accordion__box">
                                        <p>はい。親・子ともに和気あいあいと週末を楽しんでいます。</p>
                                    </div>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <h3 class="accordion__title">バーベキューはいつ開催していますか？</h3>
                                    <div class="accordion__box">
                                        <p>GW（5月）期間中とお盆休み（8月）に開催することが多いです。</p>
                                    </div>
                                </section>
                            </li>
                       </ul>
                   </div> 
                </section><!-- /.faq -->
            </article>
        </main>
        <?php get_footer(); ?>
        
</body>
</html>