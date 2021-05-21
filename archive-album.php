<?php get_header(); ?><!-- /.header -->
        <main id="home" class="main">
            <article>
                <div class="main__Visual">
                    <div class="main__Visual-img__album"></div>
                </div><!-- /.mainVisual -->
                
                <!-- パンくずリスト -->
                <?php get_template_part('_inc/breadcrumbs'); ?>
                <!-- /.breadcrumb -->
   
                <?php get_template_part('desc'); ?><!-- /.desc -->
                <section class="subalbum">
                    <div class="subalbum__inner inner__xl">
                        <div class="subalbum__heading">
                            <h2 class="subalbum__title">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title_green.png" alt="">
                            </h2>
                        </div>
                        <div class="subalbum__contents">
                            <div class="news__panel">
                                <ul class="news__panel-list">
                                <?php if(have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                
                                    <li class="news__panel-item">
                                        <a href="<?php the_permalink(); ?>" class="news__panel-link">
                                            <!-- <span class="tag">お知らせ</span> -->
                                            <span class="mask">
                                                <img src="<?php echo get_field('album_img'); ?>" alt="<?php echo the_title(); ?>" class="news__panel-img" />
                                            </span>
                                            <div class="news__panel-title">
                                                <?php echo the_title(); ?>
                                            </div>
                                            <div class="news__panel-desc">
                                                <?php echo the_excerpt(); ?>
                                            </div>
                                            <div class="news__panel-date"><?php echo the_time('Y.m.d'); ?> </div>
                                            <div class="news__panel-tag">
                                                <?php the_tags('<div class="archive__tag">', '</div><div class="archive__tag">',  '</div>'); ?> 
                                            </div>
                                        </a>
                                    </li>
                                    
                                <?php endwhile; endif; ?>
                                </ul>
                            </div>
                        </div>                       
                    </div>
                </section><!-- /.subalbum -->
                <?php get_template_part('contact'); ?><!-- /.contact -->
            </article>
        </main>
        <?php get_footer(); ?>
</body>
</html>