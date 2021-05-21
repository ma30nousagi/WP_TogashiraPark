<?php 

//最新の記事以外を表示させる
function is_first() {
    global $wp_query;
    return ($wp_query->current_post === 0);
}

//archive.php 記事を抜粋文にする
function archive_excerpt_length($length) {
    return 50;
}
add_filter('excerpt_length' , 'archive_excerpt_length');
//[]を消す
function archive_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more' , 'archive_excerpt_more');



















?>