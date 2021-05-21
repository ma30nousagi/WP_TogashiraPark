<div class="breadcrumb">
                    <div class="l-inner">
                        <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                            <!-- 1つめ -->
                            <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                              <a itemprop="item" href="<?php echo home_url(); ?>">
                                  <span itemprop="name">HOME</span>
                              </a>
                              <meta itemprop="position" content="1" />
                            </li>

                            

                            <!-- アルバム一覧 -->
                            <?php if(is_post_type_archive('album')) : ?>
                            <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                              <a itemprop="item" href="">
                                  <span itemprop="name">アルバム一覧</span>
                              </a>
                              <meta itemprop="position" content="2" />
                            </li>

                            <!-- アルバム詳細 -->
                            <?php elseif(is_singular('album')) : ?>
                                <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                              <a itemprop="item" href="<?php echo get_post_type_archive_link('album'); ?>">
                                  <span itemprop="name">アルバム一覧</span>
                              </a>
                              <meta itemprop="position" content="2" />
                            </li>  
                            <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                                <span itemprop="name"><?php echo the_title(); ?></span>
                                <meta itemprop="position" content="3" />
                            </li>


                            <!-- お知らせ一覧 -->
                            <?php elseif(is_post_type_archive('news')) : ?>
                            <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                              <a itemprop="item" href="">
                                  <span itemprop="name">お知らせ</span>
                              </a>
                              <meta itemprop="position" content="2" />
                            </li>

                            <!-- 404 -->
                            <?php elseif(is_404()) : ?>
                            <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem">
                            </li>

                            <?php endif; ?>
                          </ol>
                    </div>
                </div><!-- /.breadcrumb -->