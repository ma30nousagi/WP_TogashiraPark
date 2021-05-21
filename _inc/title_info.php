<title>
    <?php bloginfo('name'); ?>
    |
    <?php global $page, $paged;
    if (is_front_page()) : //トップページ?>
    とがしらPARK

    <?php elseif(is_post_type_archive('news')) : ?>
        お知らせ一覧
    <?php elseif(is_post_type_archive('album')) : ?>
        アルバム一覧
    
    <?php
        elseif(is_404()): //404ページ
            echo '404|';
            bloginfo('name');
        endif;
    ?>
     </title>