<?php get_header(); ?>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title_green.png" alt="お知らせ見出し" />
                            </h2>
                        </div>
                        <div class="subalbum__wrapper">
                            <div class="subalbum__img">
                                <img src="<?php echo get_field('album_img'); ?>" alt="<?php echo the_title(); ?>" />
                            </div>
                            <?php echo the_content(); ?>
                            <?php echo the_time('Y.m.d'); ?></span></p>
                        </div>

                        <ul class="gallery">
                            <?php 
                              
                              foreach (SCF::get('gallery') as $field_name => $field_value) :  
                               
                              $carousel_thumbnail = wp_get_attachment_image_src($field_value['gallery_img'], 'large');
                              $carousel_thumbnail = esc_url($carousel_thumbnail[0]);//
                              if (!$carousel_thumbnail) {
                                $carousel_thumbnail =  'https://placehold.jp/600x400.png';
                              }
                            ?>
                            <li>
                              <a href="<?php echo $carousel_thumbnail; ?>" data-lightbox="gallery1" data-title="<?php echo the_title(); ?>">
                                <img src="<?php echo $carousel_thumbnail; ?>" alt="<?php echo the_title(); ?>" />
                              </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="subalbum__tagItems">
                        <?php the_tags('<div class="archive__tag">', '</div><div class="archive__tag">', '</div>'); ?> 
                            <!-- <a href="#" class="subalbum__tag">#バーベキュー</a>
                            <a href="#" class="subalbum__tag">#とがしら</a>
                            <a href="#" class="subalbum__tag">#パーティー</a> -->
                        </div>
                    </div>
                </section><!-- /.subalbum -->
                <?php get_template_part('contact'); ?><!-- /.contact -->
            </article>
        </main>
        <?php get_footer(); ?>
</body>
</html>